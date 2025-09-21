<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        return response()->json(UserResource::make($user));
    }


    public function index(Request $request)
    {
        $users = User::all();
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
        ]);

        return response()->json(UserResource::collection($users));

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }


    }


    /**ユーザ情報登録*/
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::create([
            'name' => $request->name,
            'play_time' => 0,
            'clear_time' => 0,
            'create_stage' => 0
        ]);
//APIトークンを発行する
        $token = $user->createToken($request->name)->plainTextToken;

        //ユーザーIDとAPIトークンを返す
        return response()->json(['user_id' => $user->id, 'token' => $token]);

    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required']
        ]);


        $user = User::findOrFail($request->user()->id);

        $user->fill([
            'name' => $request->name,

        ]);

        $user->save();

        return response()->json();
    }

    public function updateCount(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required']
        ]);


        $user = User::findOrFail($request->user()->id);

        $user->fill([
            'play_time' => $user->play_time + $request->play_time,
            'clear_time' => $user->clear_time + $request->clear_time,
            'create_stage' => $user->create_stage + $request->create_stage,
        ]);

        $user->save();

        return response()->json();
    }

}

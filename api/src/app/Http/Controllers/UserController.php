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
            'level' => $request->level,
            'EXP' => $request->EXP
        ]);

        return response()->json(['user_id' => $user->id]);

    }

    public function update(Request $request)
    {


        $user = User::findOrFail($request->user_id);

        $user->name = $request->name;
        $user->level = $request->level;
        $user->EXP = $request->EXP;

        $user->save();

        return response()->json();
    }

}

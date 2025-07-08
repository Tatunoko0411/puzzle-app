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


}

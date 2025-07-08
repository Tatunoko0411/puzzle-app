<?php

namespace App\Http\Controllers;

use App\Http\Resources\StageResource;
use App\Http\Resources\UserResource;
use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StageController extends Controller
{
    public function show(Request $request)
    {
        $stage = Stage::findOrFail($request->stage_id);
        return response()->json(StageResource::make($stage));
    }

    public function index(Request $request)
    {
        $stages = Stage::all();
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
        ]);
        return response()->json(StageResource::collection($stages));


        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        return $stages;

    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Resources\StageCellResource;
use App\Http\Resources\StageResource;
use App\Models\StageCell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StageCellController extends Controller
{
    public function show(Request $request)
    {
        $cell = StageCell::findOrFail($request->stage_id);
        return response()->json(StageCellResource::make($cell));
    }

    public function index(Request $request)
    {
        $cells = StageCell::all();
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
        ]);
        return response()->json(StageCellResource::collection($cells));


        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        return $stages;

    }
}

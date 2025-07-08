<?php

namespace App\Http\Controllers;

use App\Http\Resources\ItemResource;
use App\Http\Resources\UserResource;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    public function show(Request $request)
    {
        $items = Item::findOrFail($request->item_id);
        return response()->json(ItemResource::make($items));
    }

    public function index(Request $request)
    {
        $items = Item::all();
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
        ]);
        return response()->json(ItemResource::collection($items));


        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }


    }
}

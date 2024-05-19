<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Http\Resources\GalleryResource;
use App\Http\Resources\GalleryCollection as GalleryResourceCollection;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $galleries = Gallery::all();
        return new GalleryResourceCollection($galleries);
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'name' => 'required|string|max:255',
            // Add validation rules
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $gallery = Gallery::create($request->all());
        return new GalleryResource($gallery);
    }

    // Display the specified resource.
    public function show($id)
    {
        $gallery = Gallery::find($id);

        if (!$gallery) {
            return response()->json(['message' => 'Not found'], 404);
        }

        return new GalleryResource($gallery);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);

        if (!$gallery) {
            return response()->json(['message' => 'Not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            // 'name' => 'required|string|max:255',
            // Add validation rules
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $gallery->update($request->all());
        return new GalleryResource($gallery);
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $gallery = Gallery::find($id);

        if (!$gallery) {
            return response()->json(['message' => 'Not found'], 404);
        }

        $gallery->delete();
        return response()->json(['message' => 'Deleted successfully'], 200);
    }
}
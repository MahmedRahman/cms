<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Http\Resources\ProfileResource;
use App\Http\Resources\ProfileCollection as ProfileResourceCollection;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $profiles = Profile::all();
        return new ProfileResourceCollection($profiles);
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

        $profile = Profile::create($request->all());
        return new ProfileResource($profile);
    }

    // Display the specified resource.
    public function show($id)
    {
        $profile = Profile::find($id);

        if (!$profile) {
            return response()->json(['message' => 'Not found'], 404);
        }

        return new ProfileResource($profile);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);

        if (!$profile) {
            return response()->json(['message' => 'Not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            // 'name' => 'required|string|max:255',
            // Add validation rules
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $profile->update($request->all());
        return new ProfileResource($profile);
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $profile = Profile::find($id);

        if (!$profile) {
            return response()->json(['message' => 'Not found'], 404);
        }

        $profile->delete();
        return response()->json(['message' => 'Deleted successfully'], 200);
    }
}
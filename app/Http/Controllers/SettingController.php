<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Http\Resources\SettingResource;
use App\Http\Resources\SettingCollection as SettingResourceCollection;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $settings = Setting::all();
        return new SettingResourceCollection($settings);
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

        $setting = Setting::create($request->all());
        return new SettingResource($setting);
    }

    // Display the specified resource.
    public function show($id)
    {
        $setting = Setting::find($id);

        if (!$setting) {
            return response()->json(['message' => 'Not found'], 404);
        }

        return new SettingResource($setting);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $setting = Setting::find($id);

        if (!$setting) {
            return response()->json(['message' => 'Not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            // 'name' => 'required|string|max:255',
            // Add validation rules
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $setting->update($request->all());
        return new SettingResource($setting);
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $setting = Setting::find($id);

        if (!$setting) {
            return response()->json(['message' => 'Not found'], 404);
        }

        $setting->delete();
        return response()->json(['message' => 'Deleted successfully'], 200);
    }
}
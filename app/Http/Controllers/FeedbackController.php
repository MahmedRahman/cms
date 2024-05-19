<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Http\Resources\FeedbackResource;
use App\Http\Resources\FeedbackCollection as FeedbackResourceCollection;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $feedback = Feedback::all();
        return new FeedbackResourceCollection($feedback);
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

        $feedback = Feedback::create($request->all());
        return new FeedbackResource($feedback);
    }

    // Display the specified resource.
    public function show($id)
    {
        $feedback = Feedback::find($id);

        if (!$feedback) {
            return response()->json(['message' => 'Not found'], 404);
        }

        return new FeedbackResource($feedback);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $feedback = Feedback::find($id);

        if (!$feedback) {
            return response()->json(['message' => 'Not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            // 'name' => 'required|string|max:255',
            // Add validation rules
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $feedback->update($request->all());
        return new FeedbackResource($feedback);
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $feedback = Feedback::find($id);

        if (!$feedback) {
            return response()->json(['message' => 'Not found'], 404);
        }

        $feedback->delete();
        return response()->json(['message' => 'Deleted successfully'], 200);
    }

    public function destroyRow($id)
    {
        $feedback = Feedback::find($id);
    
        if (!$feedback) {
            return redirect()->back()->with('error', 'Feedback not found');
        }
    
        $feedback->delete();
        return redirect()->route('dashboard.contact.index')->with('success', 'Feedback deleted successfully');
    }
}
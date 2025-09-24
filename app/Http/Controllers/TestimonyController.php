<?php

namespace App\Http\Controllers;
use App\Models\Testimony;

use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    //
    public function index()
    {
        $testimonies = Testimony::all();
        return view("admin.testimony.index",compact("testimonies"));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'Message' => 'required|string',
            'customer_type' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating' => 'required|numeric|max:5',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimonies', 'public');
        }

      Testimony::updateOrCreate([
            'id' => $request->testimony_id
        ],[
            'name' => $request->name,
            'message' => $request->Message,
            'customer_type' => $request->customer_type,
            'image_path' => $imagePath,
            'rating' => $request->rating,
        ]);
        return redirect()->back()->with('success', 'Testimony saved successfully.');

    }
    public function edit($id){
        $testimony = Testimony::findOrFail($id);
        return response()->json($testimony);
    }
    public function update(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'Message' => 'required|string',
            'customer_type' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating' => 'required|numeric|max:5',
        ]);

        $testimony = Testimony::findOrFail($request->testimony_id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimonies', 'public');
            $testimony->image_path = $imagePath;
        }

        $testimony->name = $request->name;
        $testimony->message = $request->Message;
        $testimony->customer_type = $request->customer_type;
        $testimony->rating = $request->rating;
        $testimony->save();
        return redirect()->route('testimony.index')->with('success', 'Testimony updated successfully.');
    }
}

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
            'message' => 'required|string',
            'customer_type' => 'required|string|max:255',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('testimonies', 'public');
        }

      Testimony::updateOrCreate([
            'id' => $request->testimon_id
        ],[
            'name' => $request->name,
            'message' => $request->message,
            'customer_type' => $request->customer_type,
            'image_path' => $imagePath,
        ]);
        return redirect()->back()->with('success', 'Testimony saved successfully.');
    }
}

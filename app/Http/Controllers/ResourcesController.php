<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function index()
    {
        $resources = Resources::all();
        return view('admin.resources.index', compact('resources'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'document_type' => 'required|string|max:255',
            'document_path' => 'required|pdf|doc|docx|max:255',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:255',
        ]);
        $document_path = null;
        if ($request->hasFile('document_path')) {
            $document_path = $request->file('document_path')->store('resources', 'public');
        }
        $image_path = null;
        if ($request->hasFile('image_path')) {
            $image_path = $request->file('image_path')->store('resources', 'public');
        }
        Resources::create([
            'title' => $request->title,
            'document_type' => $request->document_type,
            'document_path' => $document_path,
            'image_path' => $image_path,
        ]);
        return redirect()->route('resources.index')->with('success', 'Resource added successfully.');
    }
    public function edit($id)
    {
        $resource = Resources::findOrFail($id);
        return response()->json($resource);
    }
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'document_type' => 'required|string|max:255',
            'document_path' => 'nullable|file|pdf|doc|docx|max:255',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:255',
        ]);
        
        $resource = Resources::findOrFail($request->resource_id);
        if ($request->hasFile('document_path')) {
            $document_path = $request->file('document_path')->store('resources', 'public');
            $resource->document_path = $document_path;
        }
        if ($request->hasFile('image_path')) {
            $image_path = $request->file('image_path')->store('resources', 'public');
            $resource->image_path = $image_path;
        }
        $resource->save();
        $resource->update([
            'title' => $request->title,
            'document_type' => $request->document_type,
           
        ]);
        return redirect()->route('resources.index')->with('success', 'Resource updated successfully.');
    }
    public function viewindex()
    {
        $resources = Resources::all();
        return view('pages.resources', compact('resources'));
    }
}

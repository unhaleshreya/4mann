<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resources;
use Illuminate\Support\Facades\Storage;

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

    // Validating document_type as a file (doc, docx, pdf)
    'document_type' => 'required|string|max:255', // max:10240 = 10MB

    // Validating document_path as a file (doc, docx, pdf)
    'document_path' => 'required|file|mimes:pdf,doc,docx|max:10240',

    // Validating image_path as optional image (jpeg, png, jpg, webp), max 2MB
    'image_path' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
]);

        $document_path = null;
        if ($request->hasFile('document_path')) {
            $document_path = $request->file('document_path')->store('our_resources', 'public');
            $document_path='/storage'.'/'.$document_path;
        }
        $image_path = null;
        if ($request->hasFile('image_path')) {
            $image_path = $request->file('image_path')->store('our_resources', 'public');
            $image_path='/storage'.'/'.$image_path;
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
        'document_path' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
        'image_path' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
    ]);

    $resource = Resources::findOrFail($request->resource_id);

    // Handle document file
    if ($request->hasFile('document_path')) {
        if ($resource->document_path) {
            // Remove "/storage/" prefix to get the relative path
            $oldDocPath = str_replace('/storage/', '', $resource->document_path);
            Storage::disk('public')->delete($oldDocPath);
        }

        $document_path = $request->file('document_path')->store('our_resources', 'public');
        $resource->document_path = '/storage/' . $document_path; // for frontend use
    }

    // Handle image file
    if ($request->hasFile('image_path')) {
        if ($resource->image_path) {
            $oldImagePath = str_replace('/storage/', '', $resource->image_path);
            Storage::disk('public')->delete($oldImagePath);
        }

        $image_path = $request->file('image_path')->store('our_resources', 'public');
        $resource->image_path = '/storage/' . $image_path;
    }

    // Save and update other fields
    $resource->title = $request->title;
    $resource->document_type = $request->document_type;
    $resource->save();

    return redirect()->route('resources.index')->with('success', 'Resource updated successfully.');
}

    public function viewindex()
    {
        $resources = Resources::all();
        return view('pages.resources', compact('resources'));
    }
}

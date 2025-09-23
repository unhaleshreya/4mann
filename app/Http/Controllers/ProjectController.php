<?php

namespace App\Http\Controllers;
use App\Models\project;
use App\Models\products;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index()
    {
            $projects = project::all();
            $products = products::all();
            return view("admin.projects.index", compact("projects","products"));
    }
    public function store(Request $request){
        $request->validate([
            'project_title' => 'required|string|max:255|unique:projects,project_title',
            'project_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'project_sector' => 'required|string|max:255',
            'project_description' => 'required|string',
            'project_client' => 'required|string|max:255',
            'project_products_id' => 'required|exists:products,id',
            'project_state' => 'required|string|max:255',
            'project_city' => 'required|string|max:255',
            'project_location' => 'required|string|max:255',
        ]);

        $imagePath = null;
        if ($request->hasFile('project_image')) {
            $imagePath = $request->file('project_image')->store('projects', 'public');
        }

        project::create([
            'project_title' => $request->project_title,
            'project_image' => $imagePath,
            'project_sector' => $request->project_sector,
            'project_description' => $request->project_description,
            'project_client' => $request->project_client,
            'project_products_id' => $request->project_products_id,
            'project_slug' => Str::slug($request->project_title),
            'project_state' => $request->project_state,
            'project_city' => $request->project_city,
            'project_location' => $request->project_location,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project added successfully!');

    }
    public function edit($id){
        $project = project::findOrFail($id);
        return response()->json($project);
    }
    public function update(Request $request){
        $request->validate([
            'project_id' => 'required|exists:projects,id',
            'project_title' => 'required|string|max:255|unique:projects,project_title,'.$request->project_id,
            'project_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'project_sector' => 'required|string|max:255',
            'project_description' => 'required|string',
            'project_client' => 'required|string|max:255',
            'project_products_id' => 'required|exists:products,id',
            'project_state' => 'required|string|max:255',
            'project_city' => 'required|string|max:255',
            'project_location' => 'required|string|max:255',
        ]);

        $project = project::findOrFail($request->project_id);

        if ($request->hasFile('project_image')) {
            // Delete old image if exists
            if ($project->project_image) {
                Storage::disk('public')->delete($project->project_image);
            }
            $imagePath = $request->file('project_image')->store('projects', 'public');
            $project->project_image = $imagePath;
        }

        $project->update([
            'project_title' => $request->project_title,
            'project_sector' => $request->project_sector,
            'project_description' => $request->project_description,
            'project_client' => $request->project_client,
            'project_products_id' => $request->project_products_id,
            'project_slug' => Str::slug($request->project_title),
            'project_state' => $request->project_state,
            'project_city' => $request->project_city,
            'project_location' => $request->project_location,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }
}

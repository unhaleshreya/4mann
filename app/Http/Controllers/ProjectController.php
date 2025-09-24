<?php

namespace App\Http\Controllers;
use App\Models\project;
use App\Models\products;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\State;
use App\Models\City;
use App\Models\Testimony;
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

      $project=  project::create([
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
             for ($i = 1; $i <= 6; $i++) {
        $fileInput = 'project_image'.$i;
        if ($request->hasFile($fileInput)) {
            $path = $request->file($fileInput)->store('projects', 'public');
            $project->images()->create([
                'image_path' => $path,
                
            ]);
        }
    }
    

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
for ($i = 1; $i <= 9; $i++) {
        $fileInput = 'project_image'.$i;
        if ($request->hasFile($fileInput)) {
            $newPath = $request->file($fileInput)->store('projects', 'public');

            // Check if image already exists in that position
            $existingImage = $project->images()->skip($i-1)->first();
            if ($existingImage) {
                // Delete old file
                Storage::disk('public')->delete($existingImage->image_path);
                $existingImage->update([
                    'image_path' => $newPath,
                    
                ]);
            } else {
                // Create new image if not exists
                $project->images()->create([
                    'image_path' => $newPath,
                    
                ]);
            }
        }
}
            return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    
}
    public function viewProjects()
    {
        $projects = project::all();
        $products = products::all();
    $states   = State::orderBy('name')->get();

    return view("pages.projects", compact("projects", "products", "states"));
    }
    public function viewProjectShowcase($slug)
    {
        $project = project::with('images')->where('project_slug', $slug)->firstOrFail();
        $testimonies = Testimony::all();
        return view('pages.project-showcase', compact('project', 'testimonies'));
    }
    public function getCities($stateName)
    {
        $state = State::where('name', $stateName)->first();

        if (!$state) {
            return response()->json([]);
        }

        return response()->json($state->cities()->pluck('name', 'id'));
    }
    public function filterProjects(Request $request)
{
    $query = Project::query();

    if ($request->filled('state')) {
        $query->where('project_state', $request->state);
    }
    if ($request->filled('city')) {
        $query->where('project_city', $request->city);
    }
    if ($request->filled('product')) {
        $query->where('project_products_id', $request->product);
    }
    if ($request->filled('sector')) {
        $query->where('project_sector', $request->sector);
    }
    if ($request->filled('client')) {
        $query->where('project_client', 'LIKE', '%' . $request->client . '%');
    }

    $projects = $query->get();

    return view('pages.partials.projects-list', compact('projects'))->render();
}

}

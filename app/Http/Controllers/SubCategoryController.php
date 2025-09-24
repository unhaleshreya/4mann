<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\subcategory;
use App\Models\categories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    //
    public function index()
    {
        $subcategories = subcategory::all();
        $categories = categories::all(); // Make sure the model is 'Category', not 'categories'

        return view("admin.categories.index", compact("categories", "subcategories"));

    }
    public function store(Request $request)
{
    // dd($request->all());
    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|string|max:255',
        'sub_category_image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048|dimensions:min_width=500,min_height=400',
    ]);

    $imagePath = null;

     if ($request->hasFile('sub_category_image')) {
        // dd($request->file('sub_category_image'));
        $imagePath = $request->file('sub_category_image')->store('subcategory_images', 'public');
        $imagePath='/storage'.'/'.$imagePath;
    }

    if ($request->subcategory_id) {
        // Update existing subcategory
        $subcategory = subcategory::findOrFail($request->subcategory_id);

        if ($request->hasFile('sub_category_image') && $subcategory->sub_category_img) {
            Storage::disk('public')->delete($subcategory->sub_category_img);
        }

        $subcategory->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'sub_category_img' => $imagePath ?? $subcategory->sub_category_img,
        ]);
    } else {
        // Create new subcategory
        subcategory::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'sub_category_img' => $imagePath,
        ]);
    }

    return redirect()->back()->with('success', 'Subcategory saved successfully.');
}

    public function edit($id)
    {
        $subcategory = subcategory::findOrFail($id);
        return response()->json($subcategory);
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'category_id'=>'required|exists:categories,id',
        'name'=>'required|string|max:255',
        'sub_category_img' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);

    $subcategory = SubCategory::findOrFail($id);

    $imagePath = $subcategory->sub_category_img;

    if ($request->hasFile('sub_category_img')) {
        if ($subcategory->sub_category_img) {
            Storage::disk('public')->delete($subcategory->sub_category_img);
        }
        $imagePath = $request->file('sub_category_img')->store('subcategory_images', 'public');
    }

    $subcategory->update([
        'category_id' => $request->category_id,
        'name' => $request->name,
        'slug' => Str::slug($request->name),
        'sub_category_img' => $imagePath,
    ]);

    return redirect()->back()->with('success','Subcategory updated successfully.');
}

}

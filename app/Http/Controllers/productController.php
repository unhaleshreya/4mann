<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;
use App\Models\subcategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class productController extends Controller
{
    public function index()
    {
        $products = products::with(['category', 'subcategory'])->orderBy("id","desc")->paginate(10);
        $categories = categories::with(['subCategories'])->get();
        return view("products.index", compact("products","categories"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:sub_categories,id',
           'product_code' => 'required|string|max:255|unique:products,product_code',
            'title' => 'required|string|max:255|unique:products,product_title',
            'description' => 'required|string',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048|dimensions:min_width=600,min_height=300',
        ]);

        $imagePath = null;
        if ($request->hasFile('product_image')) {
            $imagePath = $request->file('product_image')->store('products', 'public');
        }

        products::create([
            'category_id' => $request->category_id,
            'sub_category_id' => $request->subcategory_id,
            'product_code' => $request->product_code,
            'product_title' => $request->title,
            'product_desc' => $request->description,
            'product_image' => $imagePath,
            'slug' => Str::slug($request->title),
        ]);

        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    public function getSubcategories($categoryId)
    {
        $subcategories = subcategory::where('category_id', $categoryId)->get();
        return response()->json($subcategories);
    }
    public function edit($id)
{
    $product = products::with(['category', 'subcategory'])->findOrFail($id);
    return response()->json($product);
}

public function update(Request $request)
{

    $request->validate([
        'product_id'     => 'required|exists:products,id',
        'category_id'    => 'required',
        'subcategory_id' => 'required',
        // 'product_code'   => 'required|string|max:255',
        'title'          => 'required|string|max:255',
        'description'    => 'required|string',
        'product_image'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // find product
    $product = products::findOrFail($request->product_id);

    // assign fields
    $product->category_id    = $request->category_id;
    $product->sub_category_id = $request->subcategory_id;
    // $product->product_code   = $request->product_code;
    $product->product_title  = $request->title;
    $product->product_desc   = $request->description;
    $product->slug           = Str::slug($request->title);

    // handle image if uploaded
    if ($request->hasFile('product_image')) {
        $path = $request->file('product_image')->store('products', 'public');
        $product->product_image = $path;
    }

    $product->save();

    return response()->json(['success' => 'Product updated successfully!']);
}
public function checkProductCode(Request $request)
{
    $exists = products::where('product_code', $request->product_code)->exists();

    return response()->json(['exists' => $exists]);
}



}

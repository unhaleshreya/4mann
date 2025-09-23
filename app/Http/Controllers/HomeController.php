<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Banner;
use App\Models\categories;
use App\Models\subcategory;
use App\Models\products;

class HomeController extends Controller
{
     public function index(Request $request)
    {
        $agent = $request->header('User-Agent');

        // Desktop request → fetch desktop banners
        $banners = Banner::orderBy('display_order')->get();

        // Fetch categories with their subcategories for navigation
        $categories = categories::with('subCategories')->where('status', 1)->get();

        return view('pages.home', compact('banners', 'categories'));
    }

    public function getSubcategories($categoryId)
    {
        $subcategories = subcategory::where('category_id', $categoryId)->get();
        return response()->json($subcategories);
    }

    public function subcategoryPage($slug)
    {
        $subcategory = subcategory::where('slug', $slug)->with('category')->firstOrFail();
        $products = products::where('sub_category_id', $subcategory->id)->with(['category', 'subcategory'])->get();

        return view('pages.subcategory', compact('subcategory', 'products'));
    }

    public function subcategoryPageById($id)
    {
        $subcategory = subcategory::with('category')->findOrFail($id);
        $products = products::where('sub_category_id', $subcategory->id)->with(['category', 'subcategory'])->get();

        return view('pages.subcategory', compact('subcategory', 'products'));
    }

    // Aluminium Composite Panels
    public function aluminiumCompositePanels()
    {
        $category = categories::where('slug', 'aluminium-composite-panels')->with('subCategories')->first();
        $subcategories = $category ? $category->subCategories : collect();
        $products = $category ? products::where('category_id', $category->id)->with(['category', 'subcategory'])->get() : collect();

        return view('pages.aluminium-composite-panels', compact('subcategories', 'products', 'category'));
    }

    // Metallic Flair Series
    public function metallicFlairSeries()
    {
        $category = categories::where('slug', 'metallic-flair-series')->with('subCategories')->first();
        $subcategories = $category ? $category->subCategories : collect();
        $products = $category ? products::where('category_id', $category->id)->with(['category', 'subcategory'])->get() : collect();

        return view('pages.metallic-flair-series', compact('subcategories', 'products', 'category'));
    }

    // Fire Retardant ACP Panels
    public function fireRetardantAcpPanels()
    {
        $category = categories::where('slug', 'fire-retardant-acp-panels')->with('subCategories')->first();
        $subcategories = $category ? $category->subCategories : collect();
        $products = $category ? products::where('category_id', $category->id)->with(['category', 'subcategory'])->get() : collect();

        return view('pages.fire-retardant-acp-panels', compact('subcategories', 'products', 'category'));
    }

    // 4Mann HPL
    public function fourMannHpl()
    {
        $category = categories::where('slug', '4mann-hpl')->with('subCategories')->first();
        $subcategories = $category ? $category->subCategories : collect();
        $products = $category ? products::where('category_id', $category->id)->with(['category', 'subcategory'])->get() : collect();

        return view('pages.ahpl', compact('subcategories', 'products', 'category'));
    }

    // Honeycomb Panels
    public function honeycombPanels()
    {
        $category = categories::where('slug', '4mann-honeycomb-panels')->with('subCategories')->first();
        $subcategories = $category ? $category->subCategories : collect();
        $products = $category ? products::where('category_id', $category->id)->with(['category', 'subcategory'])->get() : collect();

        return view('pages.honeycomb-panels', compact('subcategories', 'products', 'category'));
    }

    // Aluminium Composite Louvers
    public function aluminiumCompositeLouvers()
    {
        $category = categories::where('slug', 'metafulte-aluminium-composite-louvers')->with('subCategories')->first();
        $subcategories = $category ? $category->subCategories : collect();
        $products = $category ? products::where('category_id', $category->id)->with(['category', 'subcategory'])->get() : collect();

        return view('pages.louvers', compact('subcategories', 'products', 'category'));
    }

    // Other Building Materials
    public function otherBuildingMaterials()
    {
        $category = categories::where('slug', 'other-building-materials')->with('subCategories')->first();
        $subcategories = $category ? $category->subCategories : collect();
        $products = $category ? products::where('category_id', $category->id)->with(['category', 'subcategory'])->get() : collect();

        return view('pages.other-building', compact('subcategories', 'products', 'category'));
    }
    public function productDetails($slug)
    {
        $product = products::where('slug', $slug)->with(['category', 'subcategory'])->firstOrFail();
        return view('pages.product-details', compact('product'));
    }

}

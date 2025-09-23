<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('display_order')->get();
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required_without:mobile_image|image|mimes:jpeg,png,jpg,webp|max:2048|dimensions:min_width=1920,min_height=750',
            'mobile_image' => 'required_without:image|image|mimes:jpeg,png,jpg,webp|max:2048|dimensions:min_width=834,min_height=1194',
            'text_content' => 'required|string',
            'sub_text_content' => 'required|string',
            'banner_link' => 'nullable|string',
            'display_order' => 'nullable|integer',
        ]);
    //    if($request->file){
        if ($request->hasFile('image')) {
        $path = $request->file('image')->store('banners', 'public');
        }else{
            $path = '';
        }
        if ($request->hasFile('mobile_image')) {
        $mobile_img_path = $request->file('mobile_image')->store('banners','public');
        }else{
            $mobile_img_path = '';
        }

        Banner::create([
            'image_path' => $path,
            'text_content' => $request->text_content,
            'sub_text_content' => $request->sub_text_content,
            'mobile_img_path' => $mobile_img_path,
            'banner_link' => $request->banner_link,
            'display_order' => $request->display_order ?? 0,
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner created successfully.');
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return response()->json($banner);


    }


    public function updateAjax(Request $request)
    {
        $banner = Banner::findOrFail($request->banner_id);

        $banner->text_content = $request->text_content;
        $banner->sub_text_content = $request->sub_text_content;
        $banner->display_order = $request->display_order;

        // Update main image
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($banner->image_path && Storage::disk('public')->exists($banner->image_path)) {
                Storage::disk('public')->delete($banner->image_path);
            }

            // Store new image
            $path = $request->file('image')->store('banners', 'public');
            $banner->image_path = $path;
        }

        // Update mobile image
        if ($request->hasFile('mobile_image')) {
            // Delete old mobile image if exists
            if ($banner->mobile_img_path && Storage::disk('public')->exists($banner->mobile_img_path)) {
                Storage::disk('public')->delete($banner->mobile_img_path);
            }

            // Store new mobile image
            $path = $request->file('mobile_image')->store('banners', 'public');
            $banner->mobile_img_path = $path;
        }

        $banner->save();

        return redirect()->route('banners.index')->with('success', 'Updated successfully');
    }



    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('banners.index')->with('success', 'Banner deleted successfully.');
    }
}

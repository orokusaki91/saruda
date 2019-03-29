<?php

namespace App\Http\Controllers\Admin;

use App\Database\HomeImage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\HomeImageRequest;
use App\Http\Controllers\Controller;

class HomeImageController extends Controller
{
    public function index()
    {
        $images = HomeImage::all();
        return view('admin.pages.home-image.show', compact('images'));
    }

    public function create()
    {
        return view('admin.pages.home-image.create');
    }
    
    public function store(HomeImageRequest $request)
    {
        $request->merge([
            'image_path' => uploadFileInPublicFolder($request->file('image'), $request->name, '/img/homeImage/')
        ]);
        HomeImage::create($request->except('image'));

        return redirect()->route('admin.home-image')->with(['success' => 'You successfuly uploaded new image']);
    }
    
    public function show(HomeImage $image)
    {
        return view('admin.pages.home-image.preview', compact('image'));
    }
    
    public function destroy(HomeImage $image)
    {
        File::delete(public_path($image->image_path));
        $image->delete();
        
        return redirect()->route('admin.home-image')->with(['success' => 'You successfuly deleted image']);
    }
}

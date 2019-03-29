<?php

namespace App\Http\Controllers\Admin;

use App\Database\Gallery;
use App\Database\GalleryCategory;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Gallery\ImageStoreRequest;
use App\Http\Requests\Gallery\ImageUpdateRequest;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Gallery::all();
        $categories = GalleryCategory::all();
        return view('admin.pages.gallery.show', compact('images', 'categories'));
    }

    public function create()
    {
        $categories = GalleryCategory::all();
        return view('admin.pages.gallery.image.create', compact('categories'));
    }
    
    public function store(ImageStoreRequest $request)
    {
        $request->merge([
            'image_path' => uploadFileInPublicFolder($request->file('image'), $request->name, '/img/gallery/')
        ]);
        Gallery::create($request->except('image'));

        return redirect()->route('admin.gallery')->with(['success' => 'You successfuly uploaded new image']);
    }
    
    public function edit(Gallery $image)
    {
        $categories = GalleryCategory::all();
        return view('admin.pages.gallery.image.edit', compact('image', 'categories'));
    }

    public function update(ImageUpdateRequest $request, Gallery $image)
    {
        $image->update($request->all());

        return redirect()->route('admin.gallery')->with(['success' => 'You successfuly updated image']);
    }
    
    public function destroy(Gallery $image)
    {
        File::delete(public_path($image->image_path));
        $image->delete();
        
        return redirect()->route('admin.gallery')->with(['success' => 'You successfuly deleted image']);
    }
}

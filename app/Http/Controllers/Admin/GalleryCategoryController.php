<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Database\Gallery;
use App\Database\GalleryCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Gallery\CategoryRequest;
use App\Http\Requests\Gallery\ImageStoreRequest;

class GalleryCategoryController extends Controller
{
    public function index()
    {
        $images = Gallery::all();
        $categories = GalleryCategory::all();

        return view('admin.pages.gallery.category.index', compact('images', 'categories'));
    }

    public function show(GalleryCategory $category)
    {
        $category->load('images');

        return view('admin.pages.gallery.category.show', compact('category'));
    }

    public function create()
    {
        return view('admin.pages.gallery.category.create');
    }

    public function store(CategoryRequest $request)
    {
        GalleryCategory::create($request->all());
        
        return redirect()->route('admin.gallery')->with(['success' => 'You successfuly created new category']);
    }

    public function edit(GalleryCategory $category)
    {
        return view('admin.pages.gallery.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, GalleryCategory $category)
    {
        $category->update($request->all());
        
        return redirect()->route('admin.gallery')->with(['success' => 'You successfuly updated the category']);
    }

    public function destroy(GalleryCategory $category)
    {
        $category->delete();
        
        return redirect()->route('admin.gallery')->with(['success' => 'You successfuly deleted the category']);
    }

    public function createImages(GalleryCategory $category)
    {

        return view('admin.pages.gallery.image.create', compact('category'));
    }

    public function storeImages(ImageStoreRequest $request, GalleryCategory $category)
    {
        foreach ($request->images as $image) {
            $images[] = Gallery::create([
                'image_path' => uploadFileInPublicFolder($image, $image->getClientOriginalName(), '/img/gallery/' . $category->id . '/'),
                'category_id' => $category->id
            ]);           
        }

        return redirect()->route('admin.gallery-category.show', ['category' => $category->id])
            ->with(['success' => 'You successfuly uploaded new image']);
    }

    public function deleteImage(GalleryCategory $category, Gallery $image)
    {
        File::delete(public_path($image->image_path));
        $image->delete();
        
        return redirect()->route('admin.gallery-category.show', ['category' => $category->id])
            ->with(['success' => 'You successfuly deleted image']);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Database\GalleryCategory;
use App\Http\Requests\Gallery\CategoryRequest;
use App\Http\Controllers\Controller;

class GalleryCategoryController extends Controller
{
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
}

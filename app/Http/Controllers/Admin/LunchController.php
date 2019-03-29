<?php

namespace App\Http\Controllers\Admin;

use App\Database\Lunch;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Lunch\TextRequest;
use App\Http\Requests\Lunch\ImageRequest;
use App\Http\Controllers\Controller;

class LunchController extends Controller
{    
    public function index()
    {
        $lunch_text = Lunch::where('type', 'text')->first();
        $lunch_images = Lunch::where('type', 'image')->get();

        return view('admin.pages.lunch.show', compact('lunch_text', 'lunch_images'));
    }
    
    // Text
    public function update(TextRequest $request, Lunch $text)
    {
        $text->update($request->all());
        
        return redirect()->back()->with(['success' => 'You successfuly made changes']);
    }

    // Images
    public function create()
    {
        return view('admin.pages.lunch.create');
    }
    
    public function store(ImageRequest $request)
    {
        Lunch::create([
            'type' => 'image',
            'data' => uploadFileInPublicFolder($request->file('image'), 'image', '/img/pranzo/')
        ]);

        return redirect()->route('admin.lunch')->with(['success' => 'You successfuly uploaded new image']);
    }
    
    public function show(Lunch $image)
    {
        return view('admin.pages.lunch.preview', compact('image'));
    }
    
    public function destroy(Lunch $image)
    {
        File::delete(public_path($image->data));
        $image->delete();
        
        return redirect()->route('admin.lunch')->with(['success' => 'You successfuly deleted image']);
    }
}

<?php
namespace App\Http\Controllers\Admin;

use App\Database\Partner;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Partner\StoreRequest;
use App\Http\Requests\Partner\UpdateRequest;
use App\Http\Controllers\Controller;


class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.pages.partner.show', compact('partners'));
    }

    public function create()
    {
        return view('admin.pages.partner.create');
    }
    
    public function store(StoreRequest $request)
    {
        $request->merge([
            'image_path' => uploadFileInPublicFolder($request->file('image'), $request->name, '/img/partners/')
        ]);
        Partner::create($request->except('image'));

        return redirect()->route('admin.partner')->with(['success' => 'You successfuly uploaded new image']);
    }
    
    public function edit(Partner $partner)
    {
        return view('admin.pages.partner.edit', compact('partner'));
    }
    
    public function update(UpdateRequest $request, Partner $partner)
    {
        if (isset($request->image)) {
            $request->merge([
                'image_path' => uploadFileInPublicFolder($request->file('image'), $request->name, '/img/partners/')
            ]);
            File::delete(public_path($partner->image_path));
        }
        $partner->update($request->except('image'));

        return redirect()->route('admin.partner')->with(['success' => 'You successfuly made changes']);
    }
    
    public function destroy(Partner $partner)
    {
        File::delete(public_path($partner->image_path));
        $partner->delete();
        
        return redirect()->route('admin.partner')->with(['success' => 'You successfuly deleted image']);
    }

}
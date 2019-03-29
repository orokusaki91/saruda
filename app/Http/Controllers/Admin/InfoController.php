<?php

namespace App\Http\Controllers\Admin;

use App\Database\Info;
use App\Http\Requests\InfoRequest;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    public function index()
    {
        $info = Info::first();
        return view('admin.pages.info', compact('info'));
    }
    
    public function update(InfoRequest $request, Info $text)
    {
        $text->update($request->all());
        
        return redirect()->back()->with(['success' => 'You successfuly made changes']);
    }
}

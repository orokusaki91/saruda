<?php

namespace App\Http\Controllers\Admin\Workshop;

use App\Database\Workshop;
use App\Http\Requests\Workshop\DataRequest;
use App\Http\Requests\Workshop\PDFRequest;
use App\Http\Controllers\Controller;

class TraditionsController extends Controller
{
    public function index()
    {
        $records = Workshop::getAllRecordsByType('traditions');
        $pdf = Workshop::getPDFByType('traditions');
        return view('admin.pages.workshop.traditions.show', compact('records', 'pdf'));
    }

    public function create()
    {
        return view('admin.pages.workshop.traditions.create');
    }

    public function store(DataRequest $request)
    {
        Workshop::create([
            'type' => 'traditions',
            'title' => $request->title,
            'price' => $request->price
        ]);
        
        return redirect()->route('admin.workshop.traditions')->with(['success' => 'You successfuly created new record']);
    }

    public function edit(Workshop $record)
    {
        return view('admin.pages.workshop.traditions.edit', compact('record'));
    }

    public function update(DataRequest $request, Workshop $record)
    {
        $record->update($request->all());
        
        return redirect()->route('admin.workshop.traditions')->with(['success' => 'You successfuly updated the record']);
    }

    public function destroy(Workshop $record)
    {
        $record->delete();
        
        return redirect()->route('admin.workshop.traditions')->with(['success' => 'You successfuly deleted the record']);
    }

    public function uploadPDF(PDFRequest $request)
    {
        Workshop::deletePDFIfExist('traditions');

        Workshop::create([
            'type' => 'traditions',
            'title' => '/',
            'price' => 0,
            'is_pdf' => 1,
            'file_path' => uploadFileInPublicFolder($request->file('pdf'), 'traditionsPDF', '/workshopPDFs/')
        ]);
        
        return redirect()->route('admin.workshop.traditions')->with(['success' => 'You successfuly uploaded PDF']);
    }
}

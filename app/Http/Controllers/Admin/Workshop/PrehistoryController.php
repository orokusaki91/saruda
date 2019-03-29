<?php

namespace App\Http\Controllers\Admin\Workshop;

use App\Database\Workshop;
use App\Http\Requests\Workshop\DataRequest;
use App\Http\Requests\Workshop\PDFRequest;
use App\Http\Controllers\Controller;

class PrehistoryController extends Controller
{
    public function index()
    {
        $records = Workshop::getAllRecordsByType('prehistory');
        $pdf = Workshop::getPDFByType('prehistory');
        return view('admin.pages.workshop.prehistory.show', compact('records', 'pdf'));
    }

    public function create()
    {
        return view('admin.pages.workshop.prehistory.create');
    }

    public function store(DataRequest $request)
    {
        Workshop::create([
            'type' => 'prehistory',
            'title' => $request->title,
            'price' => $request->price
        ]);
        
        return redirect()->route('admin.workshop.prehistory')->with(['success' => 'You successfuly created new record']);
    }

    public function edit(Workshop $record)
    {
        return view('admin.pages.workshop.prehistory.edit', compact('record'));
    }

    public function update(DataRequest $request, Workshop $record)
    {
        $record->update($request->all());
        
        return redirect()->route('admin.workshop.prehistory')->with(['success' => 'You successfuly updated the record']);
    }

    public function destroy(Workshop $record)
    {
        $record->delete();
        
        return redirect()->route('admin.workshop.prehistory')->with(['success' => 'You successfuly deleted the record']);
    }

    public function uploadPDF(PDFRequest $request)
    {
        Workshop::deletePDFIfExist('prehistory');

        Workshop::create([
            'type' => 'prehistory',
            'title' => '/',
            'price' => 0,
            'is_pdf' => 1,
            'file_path' => uploadFileInPublicFolder($request->file('pdf'), 'prehistoryPDF', '/workshopPDFs/')
        ]);
        
        return redirect()->route('admin.workshop.prehistory')->with(['success' => 'You successfuly uploaded PDF']);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Database\WorkingHours;
use App\Http\Requests\WorkingHoursRequest;
use App\Http\Controllers\Controller;

class WorkingHoursController extends Controller
{
    public function index()
    {
        $records = WorkingHours::all();
        return view('admin.pages.workinghours.show', compact('records'));
    }

    public function edit(WorkingHours $day)
    {
        return view('admin.pages.workinghours.edit', compact('day'));
    }

    public function update(WorkingHoursRequest $request, WorkingHours $day)
    {
        $day->update($request->all());
        
        return redirect()->route('admin.workinghours')->with(['success' => 'You successfuly updated the day']);
    }
}

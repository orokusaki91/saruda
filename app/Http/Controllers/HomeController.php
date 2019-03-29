<?php

namespace App\Http\Controllers;

use App\Database\HomeImage;
use App\Database\WorkingHours;
use App\Database\GalleryCategory;
use App\Database\Gallery;
use App\Database\Workshop;
use App\Database\Partner;
use App\Database\Info;
use App\Database\Lunch;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $images = HomeImage::all();
        $days = WorkingHours::all();

        $gallery_categories = GalleryCategory::all();
        $gallery = Gallery::all();

        $prehistory = Workshop::getAllRecordsByType('prehistory');
        $prehistory_pdf = Workshop::getPDFByType('prehistory');

        $traditions = Workshop::getAllRecordsByType('traditions');
        $traditions_pdf = Workshop::getPDFByType('traditions');

        $baby = Workshop::getAllRecordsByType('baby');
        $baby_pdf = Workshop::getPDFByType('baby');

        $partners = Partner::all();
        $info = Info::first();

        $lunch_text = Lunch::where('type', 'text')->first();
        $lunch_images = Lunch::where('type', 'image')->get();

        return view('index', compact(
            'images',
            'days',
            'gallery_categories',
            'gallery',
            'prehistory',
            'prehistory_pdf',
            'traditions',
            'traditions_pdf',
            'baby',
            'baby_pdf',
            'partners',
            'info',
            'lunch_text',
            'lunch_images'
        ));
    }

    public function workshop(Workshop $category)
    {
        $records = $category->articles;
        return view('wsSinglePage', compact('category', 'records'));
    }

    public function downloadPDF(Workshop $pdf)
    {
        $url = public_path($pdf->file_path);
        return response()->download($url);
    }
}

<?php

namespace App\Database;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $guarded = ['id'];

    public static function getAllRecordsByType($type)
    {
        return self::where('type', $type)->where('is_pdf', 0)->get();
    }

    public static function getPDFByType($type)
    {
        return self::where('type', $type)->where('is_pdf', 1)->first();
    }

    public static function deletePDFIfExist(string $type)
    {
        $record = self::where('type', $type)->where('is_pdf', 1)->first();

        if ($record !== null) {
            File::delete(public_path($record->file_path));
            $record->delete();
        }
    }

    public function articles()
    {
        return $this->hasMany(WorkshopArticle::class, 'workshop_id');
    }
}

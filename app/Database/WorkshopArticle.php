<?php

namespace App\Database;

use Illuminate\Database\Eloquent\Model;

class WorkshopArticle extends Model
{
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Workshop::class, 'workshop_id');
    }
}

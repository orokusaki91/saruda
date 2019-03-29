<?php

namespace App\Database;

use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    protected $guarded = ['id'];

    public function images()
    {
        return $this->hasMany(Gallery::class, 'category_id');
    }
}

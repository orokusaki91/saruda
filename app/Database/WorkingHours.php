<?php

namespace App\Database;

use Illuminate\Database\Eloquent\Model;

class WorkingHours extends Model
{
    protected $guarded = ['id'];

    public function getWorkingHoursAttribute()
    {
        return $this->start . ' - ' . $this->end;
    }
}

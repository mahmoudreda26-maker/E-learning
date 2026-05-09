<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
}

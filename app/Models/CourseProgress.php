<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseProgress extends Model
{
       public function users()
    {
        return $this->belongsTo(User::class);
    }

public function course()
{
    return $this->belongsTo(Course::class);
}
}

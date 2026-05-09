<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function useres()
    {
        return $this->belongsTo(User::class);
    }
    public function categoryes()
    {
        return $this->belongsTo(Category::class);
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
    public function progress()
    {
        return $this->hasMany(CourseProgress::class );
    }
    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }
    public function instructors()
{
    return $this->belongsTo(User::class, 'user_id');
}

}

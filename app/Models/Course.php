<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [

        'user_id',
        'category_id',
        'title',
        'short_description',
        'description',
        'level',
        'language',
        'thumbnail',
        'image',
        'price',
        'status',

    ];
    public function usere()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
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
        return $this->hasMany(CourseProgress::class);
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

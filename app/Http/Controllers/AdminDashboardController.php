<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController
{
public function index()
{
    $user = auth()->user();
    $studentsCount = User::where('role', 'student')->count();
     $instructorsCount = User::where('role', 'instructor')->count();
    $courses = Course::count();
    return view('dashboard.admin', compact('instructorsCount' , 'studentsCount' ,'courses'));
}
}

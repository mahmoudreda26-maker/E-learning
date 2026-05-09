<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorDashboardController
{
   public function index()
    {
        $user = auth()->user();

        $courses = $user->courses()->with('enrollments')->get();

        $totalStudents = 0;

        foreach ($courses as $course) {
            $totalStudents += $course->enrollments->count();
        }

        return view('dashboard.instructor', compact('courses', 'totalStudents'));
    }
}

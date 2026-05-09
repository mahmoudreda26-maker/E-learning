<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDashboardController
{
public function index()
{
    $user = auth()->user();

    $progress = $user->progress()->with('course')->get();

    return view('dashboard.student', compact('progress'));
}
}

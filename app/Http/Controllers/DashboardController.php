<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController
{
 public function index()
    {
        return match(auth()->user()->role) {

            'admin' => redirect()->route('dashboard.admin'),

            'instructor' => redirect()->route('dashboard.instructor'),

            default => redirect()->route('dashboard.student'),

        };
    }
}

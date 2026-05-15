<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Course;
use App\Models\CourseProgress;
use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Prompts\Progress;

class UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::query();

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('role')) {
            $query->where('role', $request->role);
        }

        $users = $query->paginate(15);

        $enrollments = Enrollment::with(['course', 'user'])->get();

        return view('admin.user-management.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user-management.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()
            ->route('user-management.index')
            ->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::with('courses')->findOrFail($id);
        $totalstudent = 0;
        foreach ($user->courses as $course) {

            $totalstudent += $course->enrollments->count();
        }

        $progress = CourseProgress::where('user_id', $id)->get();

        return view(
            'admin.user-management.show',
            compact('user', 'progress', 'totalstudent')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $user = User::findOrFail($id);
        return view('admin.user-management.edit' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        $data = $request->validated();
        $user = User::findOrFail($id);
        if(!empty($data['password'])){
            $data['password'] = Hash::make($data['password']);
        }else{
                unset($data['password']);

        }

       $user->update($data);
        return redirect()
            ->route('user-management.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()
        ->route('user-management.index')
        ->with('success', 'User deleted successfully');
}
}

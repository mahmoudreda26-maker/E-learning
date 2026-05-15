<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoursesController
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $courses = Course::query();

    if (auth()->user()->role === 'student') {
        $courses->where('status', 'published');
    }

    if (auth()->user()->role === 'instructor') {
        $courses->where('user_id', auth()->id());
    }

    $courses = $courses->get();

    return view('admin.courses.index', compact('courses'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.courses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request )
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        if ($request->hasFile('thumbnail')) {

            $image = $request->file('thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $path = $image->storeAs('Courses', $imageName, 'public');

            $data['thumbnail'] = $path;
        }

        $course = Course::create($data);

        return redirect()->route('course.show', $course)->with('success', 'Course created successfully');
    }

    /**
     * Display the specified resource.
     */
public function show(Course $course)
{
    $user = auth()->user();

    if ($user->role === 'student' && $course->status === 'draft') {
        abort(404);
    }

    if ($user->role === 'instructor' && $course->user_id !== $user->id) {
        abort(403);
    }

    return view('admin.courses.show', compact('course'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $course = Course::findOrFail($id);
    $categories = Category::all();
        return view('admin.courses.edit', compact('course','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
          $data = $request->validated();

        if ($request->hasFile('thumbnail')) {
            if ($course->image) {
                Storage::disk('public')->delete($course->image);
            }

            $file = $request->file('thumbnail');
            $imageName = time() . '_' . $file->getClientOriginalName();

            $path = $file->storeAs('Courses', $imageName, 'public');

            $data['thumbnail'] = $path;
        }

        $course->update($data);

        return redirect()->route('course.index')
            ->with('success', 'Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index')->with('success', 'course deleted successfully');
    }
}

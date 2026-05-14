@extends('layouts.admin')

@section('content')
    <div class="container py-4">

        <div class="card shadow-sm">

            <div class="card-header bg-white">
                <h4 class="mb-0">Edit Course</h4>
            </div>

            <div class="card-body">

                <form>

                    <!-- Title -->
                    <div class="mb-3">
                        <label class="form-label">Course Title</label>
                        <input type="text" class="form-control" value="Existing Course Title">
                    </div>

                    <!-- Short Description -->
                    <div class="mb-3">
                        <label class="form-label">Short Description</label>
                        <input type="text" class="form-control" value="Existing short description">
                    </div>

                    <!-- Full Description -->
                    <div class="mb-3">
                        <label class="form-label">Full Description</label>
                        <textarea class="form-control" rows="4">Existing description...</textarea>
                    </div>

                    <!-- Category + Level -->
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-control">
                                <option selected>Web Development</option>
                                <option>Design</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Level</label>
                            <select class="form-control">
                                <option selected>Beginner</option>
                                <option>Intermediate</option>
                                <option>Advanced</option>
                            </select>
                        </div>

                    </div>

                    <!-- Language + Price -->
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Language</label>
                            <input type="text" class="form-control" value="English">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control" value="0">
                        </div>

                    </div>

                    <!-- Thumbnail -->
                    <div class="mb-3">
                        <label class="form-label">Change Thumbnail</label>
                        <input type="file" class="form-control">
                    </div>

                    <!-- Actions -->
                    <div class="d-flex justify-content-between">

                        <!-- Delete -->
                        <a href="{{ route('course.destroy', $course->id) }}" class="btn btn-danger"
                            onclick="event.preventDefault(); if(confirm('Are you sure?')) document.getElementById('delete-form').submit();">

                            Delete Course
                        </a>

                        <div class="d-flex gap-2">

                            <!-- Save Draft -->
                            <a href="{{ route('course.draft', $course->id) }}" class="btn btn-secondary">

                                Save Draft
                            </a>

                            <!-- Update -->
                            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-primary">

                                Update
                            </a>

                        </div>

                    </div>

                    <!-- Hidden delete form -->
                    <form id="delete-form" action="{{ route('course.destroy', $course->id) }}" method="POST"
                        class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>

                </form>

            </div>

        </div>

    </div>
@endsection

@extends('layouts.admin')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Create Course</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Courses</li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Course</h5>

                        <form method="POST" action="{{ url('/courses') }}" enctype="multipart/form-data">
                            @csrf

                            <!-- Course Name -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Course Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" placeholder="Enter course name">
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea name="description" class="form-control" style="height:120px" placeholder="Course description"></textarea>
                                </div>
                            </div>

                            <!-- Price -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Price ($)</label>
                                <div class="col-sm-9">
                                    <input type="number" name="price" class="form-control" placeholder="0.00">
                                </div>
                            </div>

                            <!-- Duration -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Duration (hours)</label>
                                <div class="col-sm-9">
                                    <input type="number" name="duration" class="form-control" placeholder="e.g. 10">
                                </div>
                            </div>

                            <!-- Level -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Level</label>
                                <div class="col-sm-9">
                                    <select name="level" class="form-select">
                                        <option value="beginner">Beginner</option>
                                        <option value="intermediate">Intermediate</option>
                                        <option value="advanced">Advanced</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Image -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Course Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select name="status" class="form-select">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="row mb-3">
                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary">
                                        Create Course
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

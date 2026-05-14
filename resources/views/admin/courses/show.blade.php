@extends('layouts.admin')

@section('content')

<div class="container py-4">

    <div class="row">

        <!-- Main Info -->
        <div class="col-md-8">

            <div class="card shadow-sm">

                <!-- Image -->
                <img src="https://via.placeholder.com/900x300"
                     class="card-img-top"
                     style="height: 300px; object-fit: cover;">

                <div class="card-body">

                    <!-- Title -->
                    <h3>Course Title Here</h3>

                    <!-- Short Description -->
                    <p class="text-muted">
                        This is a short description of the course that appears under the title.
                    </p>

                    <hr>

                    <!-- Full Description -->
                    <div>
                        <h5>Description</h5>
                        <p>
                            Full course description goes here. You can explain everything about the course,
                            what students will learn, and what they will achieve.
                        </p>
                    </div>

                    <hr>

                    <!-- What you'll learn -->
                    <div>
                        <h5>What you'll learn</h5>

                        <ul>
                            <li>Learn HTML, CSS, and JavaScript</li>
                            <li>Build real projects</li>
                            <li>Understand backend basics</li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

        <!-- Side Info -->
        <div class="col-md-4">

            <div class="card shadow-sm mb-3">

                <div class="card-body">

                    <h5>Course Info</h5>

                    <hr>

                    <p><strong>Category:</strong> Web Development</p>
                    <p><strong>Level:</strong> Beginner</p>
                    <p><strong>Language:</strong> English</p>
                    <p><strong>Price:</strong> Free</p>

                    <hr>

                    <p><strong>Status:</strong>
                        <span class="badge bg-success">Published</span>
                    </p>

                </div>

            </div>

            <!-- Actions -->
            <div class="card shadow-sm">

                <div class="card-body d-grid gap-2">

                    <button class="btn btn-primary">
                        Edit Course
                    </button>

                    <button class="btn btn-warning">
                        Change Status
                    </button>

                    <button class="btn btn-danger">
                        Delete Course
                    </button>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

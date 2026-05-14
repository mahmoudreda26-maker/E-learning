@extends('layouts.admin')

@section('content')

<div class="container py-4">

    <!-- Create Button -->
    <div class="d-flex justify-content-end mb-3">

        <a href="{{ route('course.create') }}"
           class="btn btn-primary d-inline-flex align-items-center gap-2 px-3 py-2 shadow-sm">

            <i class="bi bi-plus-circle"></i>
            <span>Create Course</span>

        </a>

    </div>

    <!-- Grid -->
    <div class="row">

        <!-- Card 1 -->
        <div class="col-md-4 mb-4">

            <div class="card shadow-sm h-100">

                <img src="{{ asset('assets/img/news-4.jpg') }}"
                     class="card-img-top"
                     style="height: 180px; object-fit: cover;">

                <div class="card-body">

                    <h5>Course Title</h5>

                    <p class="text-muted">
                        Short description of the course goes here...
                    </p>

                    <div class="d-flex justify-content-between">
                        <span class="badge bg-info">Beginner</span>
                        <span class="badge bg-success">Published</span>
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">

                    <a href="#" class="btn btn-sm btn-outline-primary">View</a>

                    <div class="d-flex gap-2">

                        <a href="#" class="btn btn-sm btn-outline-warning">Edit</a>

                        <form action="#" method="POST"
                              onsubmit="return confirm('Are you sure?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                Delete
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">

            <div class="card shadow-sm h-100">

                <img src="{{ asset('assets/img/news-5.jpg') }}"
                     class="card-img-top"
                     style="height: 180px; object-fit: cover;">

                <div class="card-body">

                    <h5>Course Title</h5>

                    <p class="text-muted">
                        Short description of the course goes here...
                    </p>

                    <div class="d-flex justify-content-between">
                        <span class="badge bg-info">Intermediate</span>
                        <span class="badge bg-secondary">Draft</span>
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-between">

                    <a href="#" class="btn btn-sm btn-outline-primary">View</a>

                    <div class="d-flex gap-2">

                        <a href="#" class="btn btn-sm btn-outline-warning">Edit</a>

                        <form action="#" method="POST"
                              onsubmit="return confirm('Are you sure?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                Delete
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

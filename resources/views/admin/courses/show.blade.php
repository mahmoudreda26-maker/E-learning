@extends('layouts.admin')

@section('content')
    <div class="container py-4">

        <div class="row">

            <!-- MAIN INFO -->
            <div class="col-md-8">

                <div class="card shadow-sm">

                    <!-- IMAGE -->
                    <img src="{{ $course->thumbnail ? asset('storage/' . $course->thumbnail) : 'https://via.placeholder.com/900x300' }}"
                        class="card-img-top" style="height: 300px; object-fit: cover;">

                    <div class="card-body">

                        <!-- TITLE -->
                        <h3 class="fw-bold">{{ $course->title }}</h3>

                        <!-- SHORT DESCRIPTION -->
                        <p class="text-muted">
                            {{ $course->short_description }}
                        </p>

                        <hr>

                        <!-- FULL DESCRIPTION -->
                        <div>
                            <h5 class="fw-bold">Description</h5>
                            <p>
                                {!! nl2br(e($course->description)) !!}
                            </p>
                        </div>

                        <hr>

                        <!-- WHAT YOU'LL LEARN -->
                        <div>
                            <h5 class="fw-bold">What you'll learn</h5>

                            <ul>
                                <li>Learn HTML, CSS, and JavaScript</li>
                                <li>Build real projects</li>
                                <li>Understand backend basics</li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

            <!-- SIDE INFO -->
            <div class="col-md-4">

                <!-- COURSE INFO -->
                <div class="card shadow-sm mb-3">

                    <div class="card-body">

                        <h5 class="fw-bold">Course Info</h5>

                        <hr>

                        <p><strong>Category:</strong>
                            {{ $course->category->name }}
                        </p>

                        <p><strong>Level:</strong>
                            {{ ucfirst($course->level) }}
                        </p>

                        <p><strong>Language:</strong>
                            {{ $course->language }}
                        </p>

                        <p><strong>Price:</strong>
                            {{ $course->price == 0 ? 'Free' : '$' . $course->price }}
                        </p>

                        <hr>

                        <p><strong>Status:</strong>
                            @if ($course->status == 'published')
                                <span class="badge bg-success">Published</span>
                            @else
                                <span class="badge bg-secondary">Draft</span>
                            @endif
                        </p>

                    </div>

                </div>

                <!-- ACTIONS -->
                <div class="card shadow-sm">

                    <div class="card-body">
                        @if (auth()->user()->role !== 'student')
                            <h5 class="fw-bold mb-3">Actions</h5>

                            <div class="d-grid gap-2">

                                <!-- ADD SECTION -->
                                <a href="#" class="btn btn-success">

                                    Add Section / Lesson
                                </a>

                                <!-- EDIT -->
                                <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning">

                                    Edit Section /Lesson
                                </a>
                        @endif
                        <!-- BACK -->
                        <a href="{{ route('course.index') }}" class="btn btn-secondary">

                            ← Back to Courses
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    </div>
@endsection

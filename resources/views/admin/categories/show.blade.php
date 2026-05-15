@extends('layouts.admin')

@section('content')
    <div class="container py-4">

        <!-- CATEGORY HEADER -->
        <div class="card shadow-sm border-0 mb-4">

            <div class="card-body">

                <h2 class="fw-bold mb-2">{{ $category->name }}</h2>

                <p class="text-muted mb-3">
                    {{ $category->description }}
                </p>

                <div class="d-flex flex-wrap gap-4 text-muted small">

                    <div>
                        <i class="bi bi-journal-bookmark"></i>
                        <strong>Total Courses:</strong> {{ $category->courses->count() }}
                    </div>

                    <div>
                        <i class="bi bi-calendar"></i>
                        <strong>Created:</strong> {{ $category->created_at->format('Y-m-d') }}
                    </div>

                </div>

            </div>

        </div>

        <!-- COURSES TITLE -->
        <div class="d-flex justify-content-between align-items-center mb-3">

            <h4 class="mb-0 fw-semibold">Courses</h4>

        </div>

        <!-- COURSES GRID -->
        <div class="row g-3">

            @forelse($courses as $course)
                <div class="col-md-4">

                    <div class="card h-100 border-0 shadow-sm hover-shadow transition overflow-hidden">

                        <!-- IMAGE -->
                        <img src="{{ asset('storage/' . $course->thumbnail) }}" class="card-img-top"
                            style="height: 180px; object-fit: cover;">

                        <div class="card-body">

                            <!-- TITLE -->
                            <h5 class="fw-bold">{{ $course->title }}</h5>

                            <!-- DESCRIPTION -->
                            <p class="text-muted small">
                                {{ $course->short_description }}
                            </p>

                            <!-- PRICE + BADGE -->
                            <div class="d-flex justify-content-between align-items-center mt-3">

                                <span class="badge bg-primary">
                                    {{ $course->level }}
                                </span>

                                <span class="fw-bold text-success">
                                    {{ $course->price == 0 ? 'Free' : '$' . $course->price }}
                                </span>

                            </div>

                        </div>

                        <!-- FOOTER -->
                        <div class="card-footer bg-white border-0 d-flex justify-content-end">

                            <a href="{{ route('course.show', $course->id) }}" class="btn btn-sm btn-outline-primary">
                                View
                            </a>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="alert alert-info text-center">
                        No courses found in this category yet
                    </div>

                </div>
            @endforelse

        </div>
    </div>

    <!-- BACK BUTTON -->
    <div class="mt-4">

        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
            ← Back
        </a>

    </div>

    </div>
@endsection

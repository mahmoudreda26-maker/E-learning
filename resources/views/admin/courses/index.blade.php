@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        @if (auth()->user()->role !== 'student')
            <div class="d-flex justify-content-end mb-3">

                <a href="{{ route('course.create') }}"
                    class="btn btn-primary d-inline-flex align-items-center gap-2 px-3 py-2 shadow-sm">

                    <i class="bi bi-plus-circle"></i>
                    <span>Create course</span>

                </a>

            </div>
        @endif
        <div class="row">

            @foreach ($courses as $course)
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">

                        <!-- IMAGE -->
                        <div class="position-relative">

                            <img src="{{ asset('storage/' . $course->thumbnail) }}" class="card-img-top"
                                style="height: 220px; object-fit: cover;">

                            <!-- STATUS -->
                            <span
                                class="badge position-absolute top-0 end-0 m-3 px-3 py-2
                        {{ $course->status == 'published' ? 'bg-success' : 'bg-secondary' }}">

                                {{ ucfirst($course->status) }}

                            </span>

                        </div>

                        <!-- BODY -->
                        <div class="card-body d-flex flex-column">

                            <div class="mb-2">
                                <span class="badge bg-light text-dark border">
                                    {{ $course->category->name }}
                                </span>
                            </div>

                            <h5 class="fw-bold">
                                {{ $course->title }}
                            </h5>

                            <p class="text-muted small flex-grow-1">
                                {{ $course->short_description }}
                            </p>

                            <div class="d-flex justify-content-between align-items-center mt-3">

                                <span class="badge bg-info-subtle text-info border">
                                    {{ ucfirst($course->level) }}
                                </span>

                                <span class="fw-bold text-success">
                                    {{ $course->price == 0 ? 'Free' : '$' . $course->price }}
                                </span>

                            </div>

                        </div>

                        <div class="card-footer bg-white border-0 pb-4">

                            <div class="d-flex justify-content-between align-items-center">

                                <a href="{{ route('course.show', $course->id) }}"
                                    class="btn btn-outline-primary btn-sm rounded-pill px-3">
                                    View
                                </a>
                                @if (auth()->user()->role !== 'student')
                                    <div class="d-flex gap-2">

                                        <a href="{{ route('course.edit', $course->id) }}"
                                            class="btn btn-outline-warning btn-sm rounded-pill px-3">
                                            Edit
                                        </a>

                                        <form action="{{ route('course.destroy', $course->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure?')">

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-outline-danger btn-sm rounded-pill px-3">
                                                Delete
                                            </button>

                                        </form>

                                    </div>
                                @endif
                            </div>

                        </div>

                    </div>

                </div>
            @endforeach
            <!-- BACK BUTTON -->
            <div class="mt-4">

                <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                    ← Back
                </a>

            </div>
        </div>

    </div>
@endsection

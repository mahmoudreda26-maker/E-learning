@extends('layouts.admin')

@section('content')

<div class="pagetitle">
    <h1>Student Dashboard</h1>
</div>
<div class="row">

    <!-- Enrolled Courses -->
    <div class="col-xxl-4 col-md-6">

        <div class="card info-card sales-card">

            <div class="card-body">
                <h5 class="card-title">
                    Enrolled Courses
                </h5>

                <div class="d-flex align-items-center">

                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-book"></i>
                    </div>

                    <div class="ps-3">
                        <h6>
                            {{ auth()->user()->enrollments()->count() }}
                        </h6>

                        <span class="text-muted small pt-2 ps-1">
                            Courses Joined
                        </span>
                    </div>

                </div>
            </div>

        </div>

    </div>

    <!-- Completed Courses -->
    <div class="col-xxl-4 col-md-6">

        <div class="card info-card revenue-card">

            <div class="card-body">
                <h5 class="card-title">
                    Completed Courses
                </h5>

                <div class="d-flex align-items-center">

                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-check-circle"></i>
                    </div>

                    <div class="ps-3">

                        <h6>

                        </h6>

                        <span class="text-muted small pt-2 ps-1">
                            Finished Successfully
                        </span>

                    </div>

                </div>
            </div>

        </div>

    </div>

</div>



<div class="card border-0 shadow-sm rounded-4 mt-4">
    <div class="card-body p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="fw-bold mb-0">Continue Learning</h5>

            <a href="#"
               class="btn btn-primary btn-sm rounded-pill">
                Browse Courses
            </a>
        </div>

        @foreach($progress as $progres)

            <div class="mb-4">

                <!-- Course Name -->
                <div class="d-flex justify-content-between mb-2">
                    <h6 class="fw-semibold mb-0">
                        {{ $progres->course->title }}
                    </h6>

                    <span class="text-muted small">
                        {{ $progres->progress ?? 0 }}%
                    </span>
                </div>

                <!-- Progress -->
                <div class="progress rounded-pill"
                     style="height: 10px;">

                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                         role="progressbar"
                         style="width: {{ $progres->progress ?? 0 }}%">
                    </div>

                </div>

            </div>

        @endforeach

    </div>
</div>
@endsection

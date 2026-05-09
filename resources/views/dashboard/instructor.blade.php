@extends('layouts.admin')

@section('content')
    <div class="pagetitle">
        <h1>Instructor Dashboard</h1>
    </div>

    <div class="row">

        <!-- My Courses -->
        <div class="col-xxl-4 col-md-6">

            <div class="card info-card sales-card">

                <div class="card-body">

                    <h5 class="card-title">
                        My Courses
                    </h5>

                    <div class="d-flex align-items-center">

                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-journal-bookmark"></i>
                        </div>

                        <div class="ps-3">

                            <h6>{{ auth()->user()->courses()->count() }}</h6>

                            <span class="text-muted small pt-2 ps-1">
                                Total Created Courses
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
                <div class="card-body">
                    <h5 class="card-title">
                        Total Students
                    </h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $totalStudents }}</h6>
                            <span class="text-muted small pt-2 ps-1">
                                Enrolled Students
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card recent-sales overflow-auto mt-4">
        <div class="card-body">
            <h5 class="card-title">
                My Courses
            </h5>
            <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>Students</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->title }}</td>
                            <td>
                                <span class="badge bg-primary">
                                    {{ $course->enrollments->count() }} Students
                                </span>
                            </td>
                            <td>
                                @if ($course->is_published)
                                    <span class="badge bg-success">
                                        Published
                                    </span>
                                @else
                                    <span class="badge bg-warning text-dark">
                                        Draft
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

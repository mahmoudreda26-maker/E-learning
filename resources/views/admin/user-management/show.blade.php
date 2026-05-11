@extends('layouts.admin')
@section('content')
    <div class="container py-5">

        <div class="card shadow-sm border-0">

            {{-- HEADER --}}
            <div class="card-header bg-white d-flex justify-content-between align-items-center">

                <h5 class="mb-0 fw-bold">User Details</h5>

                <a href="{{ route('user-management.index') }}" class="btn btn-secondary btn-sm">
                    <i class="bi bi-arrow-left"></i>
                    Back
                </a>

            </div>

            <div class="card-body">

                <div class="row">

                    {{-- LEFT SIDE (PROFILE) --}}
                    <div class="col-md-4 text-center border-end">

                        <img src="{{ $user->image ? asset('storage/' . $user->image) : 'https://i.pravatar.cc/150?u=' . $user->id }}"
                            class="rounded-circle mb-3" width="120" height="120">

                        <h5 class="mb-1">{{ $user->name }}</h5>

                        <p class="text-muted mb-2">
                            {{ ucfirst($user->role) }}
                        </p>

                        <span class="badge bg-primary mb-1">
                            {{ $user->bio }}
                        </span>

                        <br>

                        <span class="badge bg-{{ $user->status === 'active' ? 'success' : 'danger' }}">
                            {{ $user->status }}
                        </span>

                    </div>

                    {{-- RIGHT SIDE (INFO) --}}
                    <div class="col-md-8">

                        <table class="table table-borderless">

                            <tr>
                                <th width="30%">Email</th>
                                <td>{{ $user->email }}</td>
                            </tr>

                            <tr>
                                <th>Phone</th>
                                <td>{{ $user->phone }}</td>
                            </tr>

                            <tr>
                                <th>Joined Date</th>
                                <td>{{ $user->created_at ? $user->created_at->format('Y-m-d') : '' }}</td>
                            </tr>

                            <tr>
                                <th>Last Login</th>
                                <td>{{ $user->created_at?->diffForHumans() ?? 'four years' }}</td>
                            </tr>

                        </table>
                        <div class="d-flex justify-content-center gap-2 flex-wrap">


                            {{-- EDIT --}}
                            <button type="button" class="btn btn-sm btn-outline-warning"
                                onclick="window.location='{{ route('user-management.edit', $user->id) }}'">
                                <i class="bi bi-pencil-square"></i>
                            </button>

                            {{-- DELETE --}}
                            <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $user->id }}">
                                <i class="bi bi-trash"></i>
                            </button>

                        </div>
                    </div>

                </div>

            </div>

        </div>

        {{-- INSTRUCTOR SECTION --}}
        @if ($user->role == 'instructor')
            <div class="card shadow-sm border-0 mt-4">

                <div class="card-header bg-white">
                    <h6 class="mb-0">Instructor Stats</h6>
                </div>

                <div class="card-body">
                    @foreach ($user->courses as $course)
                        <div class="card p-3 mb-2">

                            <h5>{{ $course->title }}</h5>

                            Students:
                            {{ $course->enrollments->count() }}

                        </div>
                    @endforeach
                    <ul class="list-group mt-3">

                        <li class="list-group-item">
                            Total Courses:
                            <strong>{{ $user->courses->count() }}</strong>
                        </li>

                        <li class="list-group-item">
                            Total Students:
                            <strong>{{ $totalstudent }}</strong>
                        </li>

                        <li class="list-group-item">
                            Last Activity:
                            <strong>Today</strong>
                        </li>

                    </ul>

                </div>

            </div>
        @endif

        {{-- STUDENT SECTION --}}
        @if ($user->role == 'student')
            <div class="card shadow-sm border-0 mt-4">

                <div class="card-header bg-white">
                    <h6 class="mb-0">Student Courses</h6>
                </div>

                <div class="card-body">

                    <ul class="list-group">

                        @foreach ($user->enrollments as $enrollment)
                            <li class="list-group-item">
                                @foreach ($user->progress as $item)
                                    Course: {{ $item->course->title }}
                                    <br>
                                    Instructor: {{ $enrollment->course->instructors->name }}
                                    <br>
                                    Progress: {{ $item->progress ?? 0 }}%
                                @endforeach
                            </li>
                        @endforeach

                    </ul>

                </div>

            </div>
        @endif

    </div>
@endsection

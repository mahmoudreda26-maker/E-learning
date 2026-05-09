@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<section class="section dashboard">
    <div class="row">

        <div class="col-lg-4">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Students</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $studentsCount }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card info-card revenue-card">
                <div class="card-body">
                    <h5 class="card-title">Courses</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-book"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $courses }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">Instructors</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-video3"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $instructorsCount }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection

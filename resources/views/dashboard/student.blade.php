@extends('layouts.admin')

@section('content')

<div class="pagetitle">
    <h1>Student Dashboard</h1>
</div>

<div class="row">

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5>Enrolled Courses</h5>
                <h3>5</h3>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5>Completed Courses</h5>
                <h3>2</h3>
            </div>
        </div>
    </div>

</div>

<!-- Continue Learning -->
<div class="card mt-4">
    <div class="card-body">
        <h5>Continue Learning</h5>

        <div class="mb-3">
            <p>Laravel Basics</p>
            <div class="progress">
                <div class="progress-bar" style="width: 60%"></div>
            </div>
        </div>

    </div>
</div>

@endsection

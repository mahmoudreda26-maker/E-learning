@extends('layouts.admin')

@section('content')
<div class="pagetitle">
    <h1>Instructor Dashboard</h1>
</div>

<div class="row">

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5>My Courses</h5>
                <h3>8</h3>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5>Total Students</h5>
                <h3>320</h3>
            </div>
        </div>
    </div>

</div>

<!-- Courses List -->
<div class="card mt-4">
    <div class="card-body">
        <h5>My Courses</h5>

        <table class="table">
            <tr>
                <th>Course</th>
                <th>Students</th>
                <th>Status</th>
            </tr>

            <tr>
                <td>Laravel Basics</td>
                <td>50</td>
                <td>Published</td>
            </tr>
        </table>

    </div>
</div>

@endsection

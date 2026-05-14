@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-end mb-3">

        <a href="{{ route('categories.create') }}"
           class="btn btn-primary d-inline-flex align-items-center gap-2 px-3 py-2 shadow-sm">

            <i class="bi bi-plus-circle"></i>
            <span>Create Categore</span>

        </a>

    </div>

<div class="col-md-4 mb-4">

    <div class="card shadow-sm h-100">

        <!-- Image -->
        <img src="assets/img/news-4.jpg"
             class="card-img-top"
             style="height: 180px; object-fit: cover;">

        <div class="card-body">

            <h5>Web Development</h5>

            <p class="text-muted">
                Learn full stack web development
            </p>

            <span class="badge bg-info">12 Courses</span>

        </div>

        <div class="card-footer d-flex justify-content-between">

            <a href="#" class="btn btn-sm btn-outline-primary">View</a>

            <div class="d-flex gap-2">

                <a href="#" class="btn btn-sm btn-outline-warning">Edit</a>

                <form action="#" method="POST" onsubmit="return confirm('Are you sure?')">

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
@endsection

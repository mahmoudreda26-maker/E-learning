@extends('layouts.admin')

@section('content')

<div class="container py-4">

    <div class="card shadow-sm">

        <div class="card-body">

            <h3>Web Development</h3>

            <p class="text-muted">
                Learn full stack web development from scratch to advanced level.
            </p>

            <hr>

            <div class="row mb-3">

                <div class="col-md-6">
                    <strong>Total Courses:</strong> 12
                </div>

                <div class="col-md-6">
                    <strong>Created At:</strong> 2026-05-14
                </div>

            </div>

            <!-- Actions -->
            <div class="d-flex justify-content-between">

                <a href="#"
                   class="btn btn-secondary">
                    Back
                </a>

                <div class="d-flex gap-2">

                    <a href="#"
                       class="btn btn-warning">
                        Edit
                    </a>

                    <form action="#"
                          method="POST"
                          onsubmit="return confirm('Are you sure?')">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">
                            Delete
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

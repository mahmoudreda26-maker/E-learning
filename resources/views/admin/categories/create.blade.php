@extends('layouts.admin')

@section('content')

<div class="container py-4">

    <div class="card shadow-sm">

        <div class="card-header bg-white">
            <h4 class="mb-0">Create Category</h4>
        </div>

        <div class="card-body">

            <form>

                <!-- Name -->
                <div class="mb-3">
                    <label class="form-label">Category Name</label>
                    <input type="text" class="form-control">
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>

                <!-- Actions -->
                <div class="d-flex justify-content-end gap-2">

                    <a href="#"
                       class="btn btn-secondary">
                        Cancel
                    </a>

                    <a href="#"
                       class="btn btn-secondary">
                        Cancel
                    </a>
                </div>

            </form>

        </div>

    </div>

</div>

@endsection

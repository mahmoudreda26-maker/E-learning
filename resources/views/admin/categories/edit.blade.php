@extends('layouts.admin')

@section('content')

<div class="container py-4">

    <div class="card shadow-sm">

        <div class="card-header bg-white">
            <h4 class="mb-0">Edit Category</h4>
        </div>

        <div class="card-body">

            <form>

                <!-- Name -->
                <div class="mb-3">
                    <label class="form-label">Category Name</label>
                    <input type="text" class="form-control" value="Web Development">
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="4">Learn full stack web development</textarea>
                </div>

                <!-- Actions -->
                <div class="d-flex justify-content-between">

                    <button type="button" class="btn btn-danger">
                        Delete
                    </button>

                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-secondary">
                            Cancel
                        </button>

                        <button type="button" class="btn btn-primary">
                            Update Category
                        </button>
                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection

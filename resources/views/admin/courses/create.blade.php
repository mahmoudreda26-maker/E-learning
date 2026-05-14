@extends('layouts.admin')

@section('content')

<div class="container py-4">

    <div class="card shadow-sm">

        <div class="card-header bg-white">
            <h4 class="mb-0">Create Course</h4>
        </div>

        <div class="card-body">

            <form>

                <!-- Title -->
                <div class="mb-3">
                    <label class="form-label">Course Title</label>
                    <input type="text" class="form-control" placeholder="Enter course title">
                </div>

                <!-- Short Description -->
                <div class="mb-3">
                    <label class="form-label">Short Description</label>
                    <input type="text" class="form-control" placeholder="Short description">
                </div>

                <!-- Full Description -->
                <div class="mb-3">
                    <label class="form-label">Full Description</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>

                <!-- Category + Level -->
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-control">
                            <option>Web Development</option>
                            <option>Design</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Level</label>
                        <select class="form-control">
                            <option>Beginner</option>
                            <option>Intermediate</option>
                            <option>Advanced</option>
                        </select>
                    </div>

                </div>

                <!-- Language + Price -->
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Language</label>
                        <input type="text" class="form-control" value="English">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control" placeholder="0 for free">
                    </div>

                </div>

                <!-- Thumbnail -->
                <div class="mb-3">
                    <label class="form-label">Thumbnail</label>
                    <input type="file" class="form-control">
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-end gap-2">

                    <button type="button" class="btn btn-secondary">
                        Save Draft
                    </button>

                    <button type="button" class="btn btn-success">
                        Publish
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection

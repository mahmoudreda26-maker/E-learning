@extends('layouts.admin')

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
<div class="container py-4">

    <div class="card shadow-sm">

        <div class="card-header bg-white">
            <h4 class="mb-0">Create Course</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('course.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <!-- hidden status -->
                <input type="hidden" name="status" id="status" value="draft">

                <!-- Title -->
                <div class="mb-3">
                    <label class="form-label">Course Title</label>
                    <input type="text" class="form-control" name="title">

                    @error('title')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Short Description -->
                <div class="mb-3">
                    <label class="form-label">Short Description</label>
                    <input type="text" class="form-control" name="short_description">

                    @error('short_description')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Full Description -->
                <div class="mb-3">
                    <label class="form-label">Full Description</label>
                    <textarea class="form-control" name="description" rows="4"></textarea>

                    @error('description')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Category -->
                <div class="mb-3">
                    <label class="form-label">Category</label>

                    <select name="category_id" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Level -->
                <div class="mb-3">
                    <label class="form-label">Level</label>

<select name="level" class="form-control">

    <option value="beginner">Beginner</option>
    <option value="intermediate">Intermediate</option>
    <option value="advanced">Advanced</option>

</select>

                    @error('level')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Language + Price -->
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Language</label>
                        <input type="text" class="form-control" name="language" value="English">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control" name="price">
                    </div>

                </div>

                <!-- Thumbnail -->
                <div class="mb-3">
                    <label class="form-label">Thumbnail</label>
                    <input type="file" class="form-control" name="thumbnail">
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-end gap-2">

                    <button type="submit"
                            class="btn btn-secondary"
                            onclick="document.getElementById('status').value='draft'">
                        Save Draft
                    </button>

                    <button type="submit"
                            class="btn btn-success"
                            onclick="document.getElementById('status').value='published'">
                        Publish
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>
@endsection

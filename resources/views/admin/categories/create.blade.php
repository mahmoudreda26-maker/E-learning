@extends('layouts.admin')

@section('content')

<div class="container py-4">

    <div class="card shadow-sm border-0 rounded-4">

        <div class="card-header bg-white py-3">
            <h4 class="mb-0 fw-bold">Create Category</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <!-- Category Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Category Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ old('name') }}"
                               placeholder="Enter category name">

                        @error('name')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <!-- Image -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Category Image</label>

                    <input type="file"
                           name="image"
                           class="form-control"
                           accept="image/*">

                    @error('image')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Description</label>

                    <textarea name="description"
                              class="form-control"
                              rows="5"
                              placeholder="Write category description...">{{ old('description') }}</textarea>

                    @error('description')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Actions -->
                <div class="d-flex justify-content-end gap-2">

                    <a href="{{ route('categories.index') }}"
                       class="btn btn-light px-4">
                        Cancel
                    </a>

                    <button type="submit"
                            class="btn btn-primary px-4">
                        Create Category
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection

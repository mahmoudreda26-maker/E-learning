@extends('layouts.admin')

@section('content')

<div class="container py-4">

    <div class="card shadow-sm">

        <div class="card-header bg-white">
            <h4 class="mb-0">Edit Course</h4>
        </div>

        <div class="card-body">

            <!-- UPDATE FORM -->
            <form action="{{ route('course.update', $course->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <!-- Title -->
                <div class="mb-3">
                    <label class="form-label">Course Title</label>
                    <input type="text" name="title" class="form-control"
                           value="{{ $course->title }}">
                </div>

                <!-- Short Description -->
                <div class="mb-3">
                    <label class="form-label">Short Description</label>
                    <input type="text" name="short_description" class="form-control"
                           value="{{ $course->short_description }}">
                </div>

                <!-- Full Description -->
                <div class="mb-3">
                    <label class="form-label">Full Description</label>
                    <textarea name="description" class="form-control" rows="4">{{ $course->description }}</textarea>
                </div>

                <!-- Category + Level -->
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Category</label>
                        <select name="category_id" class="form-control">

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $course->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Level</label>
                        <select name="level" class="form-control">

                            <option value="beginner" {{ $course->level == 'beginner' ? 'selected' : '' }}>Beginner</option>
                            <option value="intermediate" {{ $course->level == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                            <option value="advanced" {{ $course->level == 'advanced' ? 'selected' : '' }}>Advanced</option>

                        </select>
                    </div>

                </div>

                <!-- Language + Price -->
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Language</label>
                        <input type="text" name="language" class="form-control"
                               value="{{ $course->language }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" name="price" class="form-control"
                               value="{{ $course->price }}">
                    </div>

                </div>

                <!-- Thumbnail -->
                <div class="mb-3">
                    <label class="form-label">Change Thumbnail</label>
                    <input type="file" name="thumbnail" class="form-control">
                </div>

                <!-- UPDATE BUTTON -->
                <button type="submit" class="btn btn-primary">
                    Update Course
                </button>

            </form>



        </div>

    </div>

</div>

@endsection

@extends('layouts.admin')

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    @if (auth()->user()->role == 'admin')
    <div class="d-flex justify-content-end mb-3">

        <a href="{{ route('categories.create') }}"
            class="btn btn-primary d-inline-flex align-items-center gap-2 px-3 py-2 shadow-sm">

            <i class="bi bi-plus-circle"></i>
            <span>Create Category</span>

        </a>

    </div>
@endif
    <div class="row">

        @foreach ($categories as $category)
            <div class="col-md-4 mb-4">

                <div class="card shadow-sm h-100">

                    <!-- Image -->
                    <img src="{{ $category->image ? asset('storage/' . $category->image) : 'https://i.pravatar.cc/150?u=' . $category->id }}"
                        class="card-img-top" style="height: 180px; object-fit: cover;">
                    <br>
                    <div class="card-body">

                        <h5>{{ $category->name }}</h5>

                        <p class="text-muted">
                            {{ $category->description }}
                        </p>

                    </div>

                    <div class="card-footer d-flex justify-content-between">

                        <a href="{{ route('categories.show', $category->id) }}"
                            class="btn btn-sm btn-outline-primary">View</a>
                        @if (auth()->user()->role == 'admin')
                            <div class="d-flex gap-2">

                                <a href="{{ route('categories.edit', $category->id) }}"
                                    class="btn btn-sm btn-outline-warning">
                                    Edit
                                </a>

                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        Delete
                                    </button>

                                </form>

                            </div>
                        @endif
                    </div>

                </div>

            </div>
        @endforeach

    </div>
@endsection

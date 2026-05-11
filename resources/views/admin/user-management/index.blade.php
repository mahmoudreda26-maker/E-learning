@extends('layouts.admin')

@section('content')
    <div class="card shadow-sm border-0">


        <div class="card-header bg-white py-3">

            <div class="d-flex justify-content-between align-items-center">

                <h5 class="mb-0 fw-bold">Users Management</h5>

                <a href="{{ route('user-management.create') }}" class="btn btn-primary d-flex align-items-center gap-1">
                    <i class="bi bi-plus-circle"></i>
                    Create User
                </a>

            </div>

            {{-- SEARCH + FILTER --}}
            <form method="GET" action="{{ route('user-management.index') }}" class="d-flex gap-2 mt-3 flex-wrap">


                <input type="text" name="search" value="{{ request('search') }}" class="form-control"
                    placeholder="Search user...">


                <select name="role" class="form-select">
                    <option value="">All Roles</option>
                    <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="instructor" {{ request('role') == 'instructor' ? 'selected' : '' }}>Instructor</option>
                    <option value="student" {{ request('role') == 'student' ? 'selected' : '' }}>Student</option>
                </select>

                {{-- BUTTON --}}
                <button class="btn btn-primary">
                    Search
                </button>

            </form>

        </div>

        {{-- TABLE --}}
        <div class="card-body">

            <div class="table-responsive">



                <table class="table table-hover align-middle">

                    <thead class="table-light text-center">
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Joined</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($users as $user)
                            <tr>

                                <td>{{ $user->id }}</td>

                                <td>
                                    <div class="d-flex align-items-center gap-2">

                                        <img src="{{ $user->image ? asset('storage/' . $user->image) : 'https://i.pravatar.cc/150?u=' . $user->id }}"
                                            class="rounded-circle" width="40" height="40">

                                        <div>
                                            <h6 class="mb-0">{{ $user->name }}</h6>
                                        </div>

                                    </div>
                                </td>

                                <td>{{ $user->email }}</td>

                                <td>
                                    <span class="badge bg-primary">{{ $user->role }}</span>
                                </td>

                                <td>
                                    <span class="badge bg-success">{{ $user->status }}</span>
                                </td>

                                <td>
                                    {{ $user->created_at?->diffForHumans() ?? 'four years' }}
                                </td>

                                <td class="text-center">

                                    <div class="d-flex justify-content-center gap-1 flex-wrap">

                                        {{-- VIEW --}}
                                        <a href="{{ route('user-management.show', $user->id) }}"
                                            class="btn btn-sm btn-outline-info">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        {{-- EDIT --}}
                                        <a href="{{ route('user-management.edit', $user->id) }}"
                                            class="btn btn-sm btn-outline-warning">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>

                                        {{-- DELETE --}}
                                        <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $user->id }}">
                                            <i class="bi bi-trash"></i>
                                        </button>

                                    </div>


                                    <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete User</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">
                                                    Are you sure you want to delete <b>{{ $user->name }}</b>?
                                                    <br>
                                                    <span class="text-danger">This action cannot be undone.</span>
                                                </div>

                                                <div class="modal-footer">

                                                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                                                        Cancel
                                                    </button>

                                                    <form method="POST"
                                                        action="{{ route('user-management.destroy', $user->id) }}">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button class="btn btn-danger">
                                                            Yes, Delete
                                                        </button>
                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    {{-- DELETE MODAL --}}
    <div class="modal fade" id="deleteModal" tabindex="-1">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Delete User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    Are you sure you want to delete this user?
                    <br>
                    <span class="text-danger">
                        This action cannot be undone.
                    </span>
                </div>

                <div class="modal-footer">

                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button class="btn btn-danger">
                        Yes, Delete
                    </button>

                </div>

            </div>

        </div>

    </div>
    <nav aria-label="...">

        {{ $users->links() }}
    </nav>
@endsection

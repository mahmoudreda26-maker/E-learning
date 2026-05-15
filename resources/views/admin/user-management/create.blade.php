@extends('layouts.admin')

@section('content')
    <div class="container py-5">

        <div class="card shadow-sm border-0">

            {{-- HEADER --}}
            <div class="card-header bg-white py-3">
                <h5 class="mb-0 fw-bold">Create New User</h5>
            </div>

            <div class="card-body">

                <form action="{{ route('user-management.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <table class="table table-borderless align-middle">

                        <tbody>

                            {{-- NAME --}}
                            <tr>
                                <th width="20%">Name</th>
                                <td>
                                    <input type="text" name="name" class="form-control" placeholder="Enter name">

                                    @error('name')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            {{-- EMAIL --}}
                            <tr>
                                <th>Email</th>
                                <td>
                                    <input type="email" name="email" class="form-control" placeholder="Enter email">

                                    @error('email')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            {{-- PASSWORD --}}
                            <tr>
                                <th>Password</th>
                                <td>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Enter password">

                                    @error('password')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            {{-- ROLE --}}
                            <tr>
                                <th>Role</th>
                                <td>
                                    <select class="form-select" name="role">
                                        <option value="admin">Admin</option>
                                        <option value="instructor">Instructor</option>
                                        <option value="student">Student</option>
                                    </select>

                                    @error('role')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>

                            {{-- PHONE --}}
                            <tr>
                                <th>Phone</th>
                                <td>
                                    <input type="text" class="form-control" placeholder="Enter phone" name="phone">

                                    @error('phone')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                    <fieldset class="row mb-3">

                                </td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <input type="radio" name="status" value="active"> active
                                    <br>
                                    <input type="radio" name="status" value="inactive"> inactive

                                </td>
                            </tr>

                        </tbody>

                    </table>

                    {{-- BUTTONS --}}
                    <div class="d-flex justify-content-end gap-2">

                        <button type="button" class="btn btn-secondary">
                            Cancel
                        </button>

                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>
@endsection

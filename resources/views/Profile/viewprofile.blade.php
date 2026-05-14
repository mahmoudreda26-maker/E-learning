@extends('layouts.admin')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profile</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard.admin') }}">Home</a>
                </li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div>

    <section class="section profile">
        <div class="row">

            <!-- LEFT -->
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="{{ $user->image ? asset('storage/'.$user->image) : asset('default.png') }}"
                             class="rounded-circle" width="120">

                        <h2>{{ $user->name }}</h2>
                        <h3>{{ $user->role }}</h3>

                    </div>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">

                        {{-- SUCCESS --}}
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        {{-- NAV TABS --}}
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active"
                                        data-bs-toggle="tab"
                                        data-bs-target="#overview">
                                    Overview
                                </button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link"
                                        data-bs-toggle="tab"
                                        data-bs-target="#edit">
                                    Edit Profile
                                </button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link"
                                        data-bs-toggle="tab"
                                        data-bs-target="#password">
                                    Change Password
                                </button>
                            </li>

                        </ul>

                        <div class="tab-content pt-3">

                            <!-- OVERVIEW -->
                            <div class="tab-pane fade show active" id="overview">
                                <p><b>Name:</b> {{ $user->name }}</p>
                                <p><b>Email:</b> {{ $user->email }}</p>
                                <p><b>Phone:</b> {{ $user->phone }}</p>
                                <p><b>Bio:</b> {{ $user->bio ?? '-' }}</p>
                            </div>

                            <!-- EDIT -->
                            <div class="tab-pane fade" id="edit">

                                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf

                                    <input type="file" name="image" class="form-control mb-3">

                                    <input type="text"
                                           name="name"
                                           class="form-control mb-3"
                                           value="{{ old('name',$user->name) }}">

                                    <input type="text"
                                           name="phone"
                                           class="form-control mb-3"
                                           value="{{ old('phone',$user->phone) }}">

                                    <textarea name="bio" class="form-control mb-3">{{ old('bio',$user->bio) }}</textarea>

                                    <button class="btn btn-primary">Save</button>
                                </form>

                            </div>

                            <!-- PASSWORD -->
                            <div class="tab-pane fade" id="password">

                                <form action="{{ route('profile.password') }}" method="POST">
                                    @method('PUT')
                                    @csrf

                                    <input type="password"
                                           name="current_password"
                                           class="form-control mb-3"
                                           placeholder="Current Password"
                                           autocomplete="current-password">

                                    @error('current_password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <input type="password"
                                           name="new_password"
                                           class="form-control mb-3"
                                           placeholder="New Password"
                                           autocomplete="new-password">

                                    @error('new_password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <input type="password"
                                           name="new_password_confirmation"
                                           class="form-control mb-3"
                                           placeholder="Confirm Password">

                                    <button class="btn btn-primary">Change Password</button>
                                </form>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

</main>

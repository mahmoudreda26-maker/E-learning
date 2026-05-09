@extends('layouts.admin')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profile</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a
                        href="{{ auth()->user()->role == 'admin'
                            ? route('dashboard.admin')
                            : (auth()->user()->role == 'instructor'
                                ? route('dashboard.instructor')
                                : route('dashboard.student')) }}">Home</a>
                </li>

                <li class="breadcrumb-item">Users</li>

                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div>

    <section class="section profile">

        <div class="row">

            <!-- LEFT SIDE -->
            <div class="col-xl-4">

                <div class="card">

                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="{{ asset('storage/' . $user->image) }}" alt="Profile" class="rounded-circle">

                        <h2>{{ $user->name }}</h2>

                        <h3>{{ $user->role }}</h3>

                    </div>

                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">
                                    Overview
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">
                                    Edit Profile
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">
                                    Change Password
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <!-- OVERVIEW -->
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <h5 class="card-title">
                                    Profile Details
                                </h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">
                                        Full Name
                                    </div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ $user->name }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">
                                        Email
                                    </div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ $user->email }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">
                                        Phone
                                    </div>

                                    <div class="col-lg-9 col-md-8">
                                        {{ $user->phone }}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">
                                        Bio
                                    </div>

                                    <div class="col-lg-9 col-md-8">
                                        {{ $user->bio }}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">
                                        Member Since
                                    </div>

                                    <div class="col-lg-9 col-md-8">
                                        May 2026
                                    </div>
                                </div>

                                <!-- STUDENT STATS -->
                                <h5 class="card-title mt-4">
                                    Student Statistics
                                </h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">
                                        Enrolled Courses
                                    </div>

                                    <div class="col-lg-9 col-md-8">
                                        8
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">
                                        Completed Courses
                                    </div>

                                    <div class="col-lg-9 col-md-8">
                                        5
                                    </div>
                                </div>

                            </div>

                            <!-- EDIT PROFILE -->
                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                <form action="{{ route('profile.update') }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <!-- PROFILE IMAGE -->
                                    <div class="row mb-3">

                                        <label class="col-md-4 col-lg-3 col-form-label">
                                            Profile Image
                                        </label>

                                        <div class="col-md-8 col-lg-9">


                                            <img src="{{ asset('storage/' . $user->image) }}" alt="Profile">
                                            <input type="file" class="form-control mt-3" name="image"
                                                accept=".jpg,.png">

                                            <small class="text-muted">
                                                Allowed: JPG, PNG | Max Size: 2MB
                                            </small>

                                        </div>

                                    </div>

                                    <!-- FULL NAME -->
                                    <div class="row mb-3">

                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">
                                            Full Name
                                        </label>

                                        <div class="col-md-8 col-lg-9">

                                            <input name="name" type="text" class="form-control" id="name"
                                                value="{{ old('name', $user->name) }}">

                                        </div>

                                    </div>

                                    <!-- BIO -->
                                    <div class="row mb-3">

                                        <label for="about" class="col-md-4 col-lg-3 col-form-label">
                                            Bio
                                        </label>

                                        <div class="col-md-8 col-lg-9">

                                            <textarea name="bio" class="form-control" id="about" style="height: 100px" maxlength="500">{{ old('bio', $user->bio) }}</textarea>

                                        </div>

                                    </div>

                                    <!-- PHONE -->
                                    <div class="row mb-3">

                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">
                                            Phone
                                        </label>

                                        <div class="col-md-8 col-lg-9">

                                            <input name="phone" type="text" class="form-control" id="Phone"
                                                value="{{ old('phone', $user->phone) }}">

                                        </div>

                                    </div>

                                    <!-- BUTTON -->
                                    <div class="text-center">

                                        <button type="submit" class="btn btn-primary">
                                            Save Changes
                                        </button>

                                    </div>

                                </form>

                            </div>

                            <!-- CHANGE PASSWORD -->
                            <div class="tab-pane fade pt-3" id="profile-change-password">

                                <form action="{{ route('profile.password') }}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <!-- CURRENT PASSWORD -->
                                    <div class="row mb-3">

                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">
                                            Current Password
                                        </label>

                                        <div class="col-md-8 col-lg-9">

                                            <input name="current_password" type="password" class="form-control"
                                                id="currentPassword">

                                        </div>

                                    </div>

                                    <!-- NEW PASSWORD -->
                                    <div class="row mb-3">

                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">
                                            New Password
                                        </label>

                                        <div class="col-md-8 col-lg-9">

                                            <input name="new_password" type="password" class="form-control"
                                                id="newPassword">

                                        </div>

                                    </div>

                                    <!-- CONFIRM PASSWORD -->
                                    <div class="row mb-3">

                                        <label for="new_password_confirmation" class="col-md-4 col-lg-3 col-form-label">
                                            Confirm Password
                                        </label>

                                        <div class="col-md-8 col-lg-9">

                                            <input name="new_password_confirmation" type="password" class="form-control"
                                                id="renewPassword">

                                        </div>

                                    </div>

                                    <!-- BUTTON -->
                                    <div class="text-center">

                                        <button type="submit" class="btn btn-primary">
                                            Change Password
                                        </button>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

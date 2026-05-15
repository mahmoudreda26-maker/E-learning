@extends('layouts.admin')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profile</h1>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">

        <li class="breadcrumb-item">
            <a href="{{ auth()->user()->role == 'admin'
                ? route('dashboard.admin')
                : (auth()->user()->role == 'instractor'
                    ? route('dashboard.instractor')
                    : route('dashboard.student')) }}">
                Home
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Profile
        </li>

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

    <div class="card border-0 shadow-sm rounded-4">

        <div class="card-header bg-white border-0 py-4">
            <h4 class="fw-bold mb-1">Edit Profile</h4>
            <p class="text-muted mb-0">
                Update your personal information and profile picture
            </p>
        </div>

        <div class="card-body p-4">

            <form action="{{ route('profile.update') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                {{-- PROFILE IMAGE --}}
                <div class="text-center mb-4">

                    <div class="position-relative d-inline-block">

                        <img src="{{ $user->image ? asset('storage/'.$user->image) : asset('default.png')}}"
                             class="rounded-circle shadow"
                             width="120"
                             height="120"
                             style="object-fit: cover;">

                    </div>

                    <div class="mt-3">

                        <input type="file"
                               name="image"
                               class="form-control">

                        @error('image')
                            <div class="text-danger small mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                </div>

                <div class="row">

                    {{-- NAME --}}
                    <div class="col-md-6 mb-4">

                        <label class="form-label fw-semibold">
                            Full Name
                        </label>

                        <input type="text"
                               name="name"
                               class="form-control form-control-lg"
                               placeholder="Enter your name"
                               value="{{ old('name',$user->name) }}">

                        @error('name')
                            <div class="text-danger small mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    {{-- PHONE --}}
                    <div class="col-md-6 mb-4">

                        <label class="form-label fw-semibold">
                            Phone Number
                        </label>

                        <input type="text"
                               name="phone"
                               class="form-control form-control-lg"
                               placeholder="Enter phone number"
                               value="{{ old('phone',$user->phone) }}">

                        @error('phone')
                            <div class="text-danger small mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                </div>

                {{-- BIO --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Bio
                    </label>

                    <textarea name="bio"
                              rows="5"
                              class="form-control"
                              placeholder="Tell something about yourself...">{{ old('bio',$user->bio) }}</textarea>

                    @error('bio')
                        <div class="text-danger small mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                {{-- BUTTONS --}}
                <div class="d-flex justify-content-end gap-2">

                    <button type="reset"
                            class="btn btn-light px-4">
                        Cancel
                    </button>

                    <button type="submit"
                            class="btn btn-primary px-5">
                        Save Changes
                    </button>

                </div>

            </form>

        </div>

    </div>

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EduNova | Login</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Poppins:300,400,500,600,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">

                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <!-- Logo -->
                            <div class="d-flex justify-content-center py-4">
                                <a href="#" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">EduNova</span>
                                </a>
                            </div>

                            <!-- Card -->
                            <div class="card mb-3 shadow-sm border-0 rounded-4">

                                <div class="card-body p-4">

                                    <div class="pt-3 pb-2 text-center">
                                        <h5 class="card-title fs-4 fw-bold">Login to EduNova</h5>
                                        <p class="text-muted small">Enter your email & password to continue</p>
                                    </div>

                                    <form action="{{ route('auth.submit.login') }}" method="POST" class="row g-3">
                                        @csrf

                                        <!-- Email -->
                                        <div class="col-12">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" required>
                                            @error('email')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Password -->
                                        <div class="col-12">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                            @error('password')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <label class="switch">
                                            <input type="checkbox" name="rememberToken" id="rememberToken">
                                            <span class="slider"></span>
                                            <span class="ms-2">Remember me</span>
                                        </label>


                                        <!-- Button -->
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 rounded-pill">
                                                Login
                                            </button>
                                        </div>

                                        <!-- Register -->
                                        <div class="col-12 text-center">
                                            <p class="small mb-0">
                                                Don't have an account?
                                                <a href="{{ route('register') }}">Create account</a>
                                            </p>
                                        </div>

                                    </form>

                                </div>

                            </div>

                            <!-- Footer -->
                            <div class="text-center text-muted small mt-3">
                                © {{ date('Y') }} <strong>EduNova</strong>. All Rights Reserved
                            </div>

                        </div>

                    </div>
                </div>

            </section>

        </div>
    </main>

    <!-- JS -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>

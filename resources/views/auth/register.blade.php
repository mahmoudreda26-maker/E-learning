<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EduNova | Register</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Main CSS -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">

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
            <div class="card shadow-sm border-0 rounded-4">

              <div class="card-body p-4">

                <div class="pt-3 pb-2 text-center">
                  <h5 class="card-title fs-4 fw-bold">Create Account</h5>
                  <p class="text-muted small">Join EduNova and start learning today</p>
                </div>

                <form action="{{ route('auth.submit.register') }}" method="POST" class="row g-3">
                  @csrf

                  <!-- Name -->
                  <div class="col-12">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" required>
                  </div>

                  <!-- Email -->
                  <div class="col-12">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                  </div>

                  <!-- Password -->
                  <div class="col-12">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                  </div>

                  <!-- Confirm -->
                  <div class="col-12">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                  </div>

                  <!-- Terms -->
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" required>
                      <label class="form-check-label">
                        I agree to the terms & conditions
                      </label>
                    </div>
                  </div>

                  <!-- Button -->
                  <div class="col-12">
                    <button class="btn btn-primary w-100 rounded-pill">
                      Create Account
                    </button>
                  </div>

                  <!-- Login -->
                  <div class="col-12 text-center">
                    <p class="small mb-0">
                      Already have an account?
                      <a href="{{ route('login') }}">Login</a>
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

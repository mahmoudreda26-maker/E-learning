<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center">

            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">

            <span class="d-none d-lg-block">EduNova</span>
        </a>

        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <!-- Search -->
    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            @csrf
            <input type="text" name="query" placeholder="Search">
            <button type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div>

    <!-- Icons -->
    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <!-- Notifications -->
            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-primary badge-number">4</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                        You have 4 new notifications
                    </li>
                </ul>

            </li>

            <!-- Messages -->
            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-chat-left-text"></i>
                    <span class="badge bg-success badge-number">3</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                    <li class="dropdown-header">
                        You have 3 new messages
                    </li>
                </ul>

            </li>

            <!-- Profile -->
            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

                    <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="Profile" class="rounded-circle">

                    <span class="d-none d-md-block dropdown-toggle ps-2">
                        {{ auth()->user()->name }}

                    </span>

                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

                    <li class="dropdown-header">
                        <h6>{{ auth()->user()->name }}</h6>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('profile') }}">
                            <i class="bi bi-person"></i> My Profile
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('profile') }}">
                            <i class="bi bi-gear"></i> Settings
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </a>
                    </li>

                </ul>

            </li>

        </ul>
    </nav>

</header>

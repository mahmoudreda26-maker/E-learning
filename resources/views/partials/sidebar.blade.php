<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- ================= MAIN ================= -->
        <li class="nav-heading">MAIN</li>

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.admin') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- ================= LEARNING ================= -->
        <li class="nav-heading">LEARNING MANAGEMENT</li>

        <!-- Courses -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/courses') }}">
                <i class="bi bi-book"></i>
                <span>Courses</span>
            </a>
        </li>

        <!-- Lessons -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/lessons') }}">
                <i class="bi bi-play-circle"></i>
                <span>Lessons</span>
            </a>
        </li>

        <!-- Exams -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/exams') }}">
                <i class="bi bi-patch-question"></i>
                <span>Exams</span>
            </a>
        </li>

        <!-- Certificates -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/certificates') }}">
                <i class="bi bi-award"></i>
                <span>Certificates</span>
            </a>
        </li>

        <!-- ================= USERS ================= -->
        <li class="nav-heading">USER MANAGEMENT</li>

        <!-- User Management -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('user-management.index') }}">
                <i class="bi bi-person-gear"></i>
                <span>User Management</span>
            </a>
        </li>

        <!-- Students -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/students') }}">
                <i class="bi bi-mortarboard"></i>
                <span>Students</span>
            </a>
        </li>

        <!-- Instructors -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/instructors') }}">
                <i class="bi bi-person-video3"></i>
                <span>Instructors</span>
            </a>
        </li>

        <!-- ================= FINANCE ================= -->
        <li class="nav-heading">FINANCE</li>

        <!-- Payments -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/payments') }}">
                <i class="bi bi-credit-card"></i>
                <span>Payments</span>
            </a>
        </li>

        <!-- ================= ACCOUNT ================= -->
        <li class="nav-heading">ACCOUNT</li>

        <!-- Profile -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('profile') }}">
                <i class="bi bi-person-circle"></i>
                <span>Profile</span>
            </a>
        </li>

        <!-- ================= SYSTEM ================= -->
        <li class="nav-heading">SYSTEM</li>

        <!-- Settings -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/settings') }}">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
            </a>
        </li>

    </ul>

</aside>

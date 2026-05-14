<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- ================= MAIN ================= -->
        <li class="nav-heading">MAIN</li>

<li class="nav-item">
    <a class="nav-link"
       href="{{
            auth()->user()->role == 'admin'
                ? route('dashboard.admin')
                : (auth()->user()->role == 'instractor'
                    ? route('dashboard.instractor')
                    : (auth()->user()->role == 'student'
                        ? route('dashboard.student')
                        : '#'))
       }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
    </a>
</li>

        <!--  Category -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('categories.index') }}">
                <i class="bi bi-tags"></i>
                <span>Categories</span>
            </a>
        </li>
        <!--courses -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('course.index') }}">
                <i class="bi bi-book"></i>
                <span>My Courses</span>
            </a>
        </li>

        <!-- User Management -->
        @if (auth()->user()->role == 'admin')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('user-management.index') }}">
                    <i class="bi bi-person-gear"></i>
                    <span>User Management</span>
                </a>
            </li>
        @endif
        <!-- Profile -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('profile') }}">
                <i class="bi bi-person-circle"></i>
                <span>Profile</span>
            </a>
        </li>

    </ul>

</aside>

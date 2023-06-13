<ul class="navbar-nav bg-gradient-primary-side sidebar sidebar-dark accordion" id="accordionSidebar">

    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/auth/login/admin/template/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <hr class="sidebar-divider d-none d-md-block">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('adminManager') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Manager</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('adminHistoryIndex') }}">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span>History</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('adminBookIndex') }}">
            <i class="fa-solid fa-bookmark"></i>
            <span>Bookmarks</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('adminLesson') }}">
            <i class="fa-solid fa-book"></i>
            <span>Lessons</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>

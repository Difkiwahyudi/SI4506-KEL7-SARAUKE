<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-login sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-text mx-3">
            Sarauke Admin
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Setting -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting"
            aria-expanded="true" aria-controls="collapseSetting">
            <i class="fas fa-fw fa-cog"></i>
            <span>Setting</span>
        </a>
        <div id="collapseSetting" class="collapse" aria-labelledby="headingSetting" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Setting:</h6>
                <a class="collapse-item" href="{{ route('admin_setting') }}">Setting</a>
                <a class="collapse-item" href="{{ route('admin_setting') }}">Setting</a>
            </div>
        </div>
    </li> --}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin_setting') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin_users') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>List User</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin_slide_view') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Recommendation Travel</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('travel-journey.index') }}">
            <i class="fas fa-fw fa-sliders-h"></i>
            <span>Travel Journey</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('travel-package.index') }}">
            <i class="fas fa-fw fa-hotel"></i>
            <span>Paket Travel</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('gallery.index') }}">
            <i class="fas fa-fw fa-images"></i>
            <span>Galeri Travel</span></a>
    </li>

    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('transaction.index') }}">
            <i class="fas fa-fw fa-cash-register"></i>
            <span>Manajemen Transaksi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin_report') }}">
            <i class="fas fa-fw fa-cash-register"></i>
            <span>Report</span></a>
    </li>

    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

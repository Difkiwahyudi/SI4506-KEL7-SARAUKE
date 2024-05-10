<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-login sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-text mx-3">
            SARAUKE ADMIN
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>1</span></a>
    </li>

    <!-- Setting -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting"
            aria-expanded="true" aria-controls="collapseSetting">
            <i class="fas fa-fw fa-cog"></i>
            <span>2</span>
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
            <span>3</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin_users') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>4</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin_slide_view') }}">
            <i class="fas fa-fw fa-sliders-h"></i>
            <span>5</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('travel-package.index') }}">
            <i class="fas fa-fw fa-hotel"></i>
            <span>6</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('gallery.index') }}">
            <i class="fas fa-fw fa-images"></i>
            <span>7</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('transaction.index') }}">
            <i class="fas fa-fw fa-cash-register"></i>
            <span>8</span></a>
    </li>

    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

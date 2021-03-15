<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard')}}">
    <div class="sidebar-brand-text mx-3">ADMIN PWK UIR</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{ route('dashboard')}}">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Statistik -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('statistic.index')}}">
    <i class="fas fa-chart-line"></i>
    <span>Statistik</span>
    </a>
</li>

<!-- Berita -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('newses.index')}}">
    <i class="far fa-newspaper"></i>
    <span>Berita</span>
    </a>
</li>


<!-- Galeri -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('galleries.index')}}">
    <i class="fas fa-images"></i>
    <span>Galeri</span>
    </a>
</li>


<!-- Video -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('videos.index')}}">
    <i class="fas fa-video"></i>
    <span>Video</span>
    </a>
</li>

<!-- Dosen -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('teachers.index')}}">
    <i class="fas fa-chalkboard-teacher"></i>
    <span>Daftar Dosen</span>
    </a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
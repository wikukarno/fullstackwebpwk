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

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseslider" aria-expanded="true" aria-controls="collapseslider">
      <i class="fas fa-fw fa-chart-bar"></i>
      <span>Sliders</span>
    </a>
    <div id="collapseslider" class="collapse" aria-labelledby="headingslider" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Components:</h6>
        <a class="collapse-item" href="{{ route('sliders.index')}}">Daftar Slider</a>
        {{-- <a class="collapse-item" href="cards.html">Cards</a> --}}
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-school"></i>
      <span>Akademik</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Components:</h6>
        <a class="collapse-item" href="{{ route('kurikulums.index')}}">Kurikulum</a>
        <a class="collapse-item" href="#">SAP</a>
        <a class="collapse-item" href="">RPS</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNews" aria-expanded="true" aria-controls="collapseNews">
      <i class="fas fa-fw fa-newspaper"></i>
      <span>Berita</span>
    </a>
    <div id="collapseNews" class="collapse" aria-labelledby="headingNews" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Components:</h6>
        <a class="collapse-item" href="{{ route('newses.index')}}">Daftar Berita</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMedia" aria-expanded="true" aria-controls="collapseMedia">
      <i class="fas fa-fw fa-images"></i>
      <span>Media</span>
    </a>
    <div id="collapseMedia" class="collapse" aria-labelledby="headingMedia" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Components:</h6>
        <a class="collapse-item" href="{{ route('galleries.index')}}">Daftar Galeri</a>
        <a class="collapse-item" href="{{ route('videos.index')}}">Daftar Video</a>
        {{-- <a class="collapse-item" href="{{ route('sliders.index')}}">Slider</a> --}}
      </div>
    </div>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">


  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLecturer" aria-expanded="true" aria-controls="collapseLecturer">
      <i class="fas fa-fw fa-chalkboard-teacher"></i>
      <span>Dosen</span>
    </a>
    <div id="collapseLecturer" class="collapse" aria-labelledby="headingLecturer" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Components:</h6>
        <a class="collapse-item" href="{{ route('teachers.index')}}">Daftar Dosen</a>
        <a class="collapse-item" href="{{ route('strukturs.index')}}">Struktur Organisasi</a>
      </div>
    </div>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">


  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGraduation" aria-expanded="true" aria-controls="collapseGraduation">
      <i class="fas fa-fw fa-user-graduate"></i>
      <span>Alumni</span>
    </a>
    <div id="collapseGraduation" class="collapse" aria-labelledby="headingGraduation" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Components:</h6>
        <a class="collapse-item" href="{{ route('graduations.index')}}">Daftar Alumni</a>
      </div>
    </div>
  </li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
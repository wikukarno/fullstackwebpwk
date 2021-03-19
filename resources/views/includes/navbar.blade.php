{{-- header --}}
<header class="header-section d-none d-md-block" id="header">
    <div class="container">
        <div class="row">
            <div class="mail-services mt-3 ml-lg-3">
                <a href="#"><i class="fas fa-envelope"></i> pwk@uir.ac.id
                </a>
            </div>
            <span class="border mx-3"></span>
            {{-- <div class="phone-services mt-3">
                <a href="#">
                    <i class="fas fa-phone-alt"></i> +62.761.72126
                </a>
            </div> --}}
        </div>
    </div>
    <hr>
</header>
{{-- End Header --}}
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="#" id="home">
            <img src="{{ url('frontend/images/logo/Logo.png')}}" id="light-mode" class="light-mode" alt="">
            <img src="{{ url('frontend/images/logo/Logo_Uir_Dark.png')}}" id="dark-mode" class="dark-mode d-none" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navb" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link active" href="#">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tentang
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('sejarah.index') }}">Sejarah</a>
                        <a class="dropdown-item" href="{{ route('visimisi.index') }}">Visi & Misi</a>
                        <a class="dropdown-item" href="{{ route('kajian.index') }}">Kajian Unggulan</a>
                        <a class="dropdown-item" href="{{ route('tujuan.index') }}">Tujuan & Sasaran</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Akademik
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('kurikulum.index') }}">Kurikulum</a>
                        <a class="dropdown-item" href="{{ route('sap.index') }}">Satuan Acara Pengajaran</a>
                        <a class="dropdown-item" href="{{ route('rps.index') }}">Rencana Pembelajaran Studi</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Penelitian & Inovasi
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('jurnal.index') }}">Jurnal</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dosen
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('dosen.index') }}">Biodata Dosen</a>
                        <a class="dropdown-item" href="{{ route('struktur.index') }}">Struktur Organisasi</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Alumni
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Data alumni</a>
                        <a class="dropdown-item" href="{{ route('photo.index') }}">Foto Alumni</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kegiatan Mahasiswa
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('himpunan.index') }}">Himpunan Mahasiswa</a>
                        <a class="dropdown-item" href="{{ route('mahasiswa.index') }}">Mahasiswa Aktif</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://pmb.uir.ac.id/" target="_blank">
                    Daftar
                </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
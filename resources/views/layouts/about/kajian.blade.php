<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('includes.style')
</head>

<body>
    <!-- Header -->
    <header class="header-section d-none d-md-block">
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
    <!-- End Header -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ ('/') }}">
                <img src="{{ url('frontend/images/logo/Logo.png')}}" alt="">
            </a>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb mt-5 bg-white">
                <li class="breadcrumb-item"><a href="{{ ('/') }}">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kajian</li>
            </ol>
        </div>
    </nav>
    <!-- End Breadcrumb -->
    @yield('kajian')

    @include('includes.footer')

    <a href="#" class="to-top">
        <i class="fas fa-chevron-up "></i>
    </a>

    @include('includes.about.script')
</body>

</html>
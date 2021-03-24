@extends('layouts.app')

@section('title')
PWK-Universitas-Islam-Riau
@endsection

@section('content')
    <!-- Hero -->
    <section class="section-hero-content d-none d-lg-block">
        <div id="carouselExampleSlidesOnly" class="carousel" data-ride="carousel">
            <div class="carousel-inner hero-items owl-carousel">
                @foreach ($sliders as $key =>$slider)
                    <div class="single-hero-items {{$key == 0 ? 'active' : '' }}">
                        <img class="d-block w-100" src="{{ Storage::url($slider->photo) }}" alt="First slide">
                    </div>
                @endforeach
            </div>
          </div>
    </section>
    <!-- End Hero -->

    {{-- Hero Mobile --}}
    <section class="section-hero-mobile d-lg-none">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5>Selamat Datang <br> di Program Studi</h5>
                    <h1>Perencanaan Wilayah & Kota</h1>
                    <a href="#" class="btn btn-daftar mt-3">Daftar</a>
                </div>
            </div>
        </div>
    </section>
    {{-- End Hero Mobile --}}

    <!-- News -->
    <section class="section-news-content" id="berita">
        <div class="container">
            <div class="row">
                <div class="col-12 title">
                    <h3>Berita</h3>
                </div>
                @foreach ($newses as $news)
                <div class="col-12 col-sm-3 col-md-6 col-lg-4 mt-3">
                    <figure class="figure">
                        <div class="feature-img-hover">
                            <div class="img-content-news">
                                <img src="{{ Storage::url($news->photo) }}" class="figure-img img-fluid align-self-center w-100 rounded">
                                {{-- <img src="{{ Storage::url($news->photo) }}" class="figure-img img-fluid align-self-center w-100 rounded"> --}}
                            </div>
                            <a href="{{ route('news', $news->slug) }}" class="d-flex justify-content-center">
                                <img src="{{ url('frontend/images/news/eye.png')}}" class="img-fluid align-self-center" alt="">
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <i class="fas fa-calendar-alt news-date-post"></i> &nbsp; {{ $news->date }}
                            <a href="{{ route('news', $news->slug) }}" class="news-title">
                                <h4>{{ $news->title }}</h4>
                            </a>
                            <div class="news-content text-truncate">
                                <p class="text-truncate d-block">
                                    {!! $news->thumbnail !!}
                                </p>
                            </div>
                            <a href="{{ route('news', $news->slug)}}" class="btn btn-next">Selengkapnya</a>
                        </figcaption>
                    </figure>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End News -->

    <!-- Galery -->
    <section class="section-galeri-content" id="galeri">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">Galeri</h3>
                </div>
                @php
                $incrementProduct = 0
                @endphp
                @foreach ($galleries as $gallery)
                <div class="col-12 col-sm-6 col-lg-4">
                    <figure class="figure" data-aos="fade-down" data-aos-delay="{{ $incrementProduct+=300 }}">
                        <div class="gallery-feature d-flex justify-content-center">
                            <a href="{{ Storage::url($gallery->photo) }}" data-fancybox="gallery">
                                <img src="{{ Storage::url($gallery->photo) }}" class="figure-img img-fluid rounded align-self-center" alt="">
                            </a>
                        </div>
                        <h5 class="text-center">{{ $gallery->title }}</h5>
                    </figure>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Galery -->

    <!-- Video -->
    <section class="section-video-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Video</h3>
                </div>
                @foreach ($videos as $video)
                <div class="col-12 col-sm-6 col-lg-6 mb-5">
                    <figure class="figure d-flex justify-content-center">
                        <div class="feature-video embed-responsive embed-responsive-16by9">
                            <iframe class="rounded align-self-center" src="{{ $video->url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </figure>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Video -->

    {{-- Scrool top --}}
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up "></i>
    </a>
    {{-- End Scrool top --}}

@endsection
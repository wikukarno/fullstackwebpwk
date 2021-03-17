@extends('layouts.app')

@section('title')
PWK-Universitas-Islam-Riau
@endsection

@section('content')
    <!-- Hero -->
    <section class="section-hero-content">
        {{-- @foreach ($sliders as $slider) --}}
        <div class="hero-items owl-carousel">
            {{-- <div class="single-hero-items set-bg img-fluid" data-setbg="{{ $slider->photo }}">
            </div> --}}
            <div class="single-hero-items set-bg img-fluid" data-setbg="{{ url('frontend/images/hero/hero_1.jpg')}}">
            </div>
            <div class="single-hero-items set-bg img-fluid" data-setbg="{{ url('frontend/images/hero/hero_2.jpg')}}">
            </div>
        </div>
        {{-- @endforeach --}}
    </section>
    <!-- End Hero -->

    <!-- Statistik -->
    <section class="section-statistic-content">
        <div class="container">
            <div class="row">
                @foreach ($items as $item)
                <div class="col-sm-4 col-md-2 text-center" data-aos="fade-down" data-aos-delay="100">
                    <i class="fas fa-user-graduate"></i>
                    <p>{{ $item->alumni }} Lulusan</p>
                </div>
                <div class="col-sm-4 col-md-2 text-center" data-aos="fade-down" data-aos-delay="300">
                    <i class="fas fa-user-alt"></i>
                    <p>{{ $item->mahasiswa }}+ Mahasiswa</p>
                </div>
                <div class="col-sm-4 col-md-2 text-center" data-aos="fade-down" data-aos-delay="500">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <p>{{ $item->dosen }} Dosen</p>
                </div>
                <div class="col-sm-4 col-md-2 text-center" data-aos="fade-down" data-aos-delay="700">
                    <i class="fas fa-building"></i>
                    <p>{{ $item->gedung }} Gedung</p>
                </div>
                <div class="col-sm-4 col-md-2 text-center" data-aos="fade-down" data-aos-delay="900">
                    <i class="fas fa-medal"></i>
                    <p>{{ $item->prestasi }} Prestasi</p>
                </div>
                <div class="col-sm-4 col-md-2 text-center" data-aos="fade-down" data-aos-delay="1100">
                    <i class="fas fa-desktop"></i>
                    <p>{{ $item->labor }} Labor</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Statistik -->

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
                            </div>
                            <a href="#" class="d-flex justify-content-center">
                                <img src="{{ url('frontend/images/news/eye.png')}}" class="img-fluid align-self-center" alt="">
                            </a>
                        </div>
                        <figcaption class="figure-caption">
                            <i class="fas fa-calendar-alt news-date-post"></i> &nbsp; {{ $news->date }}
                            <a href="#" class="news-title">
                                <h4>{{ $news->title }}</h4>
                            </a>
                            <div class="news-content text-truncate">
                                <p class="text-truncate d-block">
                                    {!! $news->content !!}
                                </p>
                            </div>
                            <a href="{{ route('news', $news->id)}}" class="btn btn-next">Selengkapnya</a>
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
                @foreach ($galleries as $gallery)
                <div class="col-12 col-sm-6 col-lg-4">
                    <figure class="figure" data-aos="fade-down" data-aos-delay="300" data-aos-duration="1500">
                        <div class="gallery-feature d-flex justify-content-center">
                            <a href="{{ Storage::url($gallery->photo) }}" data-fancybox="gallery">
                                <img src="{{ Storage::url($gallery->photo) }}" class="figure-img img-fluid rounded align-self-center w-100" alt="">
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
@extends('layouts.news')

@section('title')
    Berita
@endsection

@section('news')
    <!-- News -->
    <section class="section-news-content">
        <div class="container">
            <div class="row">
                @foreach ($newses as $news)
                <div class="col-12 col-sm-3 col-md-6 col-lg-8 mt-3">
                    <h3 class="mb-3">{{ $news->title }}</h3>
                    <figure class="figure">
                        <label><i class="fas fa-calendar-alt news-date-post ml-1"></i> &nbsp; {{ $news->date }}</label>
                        <div class="feature-img-hover">
                            <div class="img-content-news">
                                <img src="{{ Storage::url($news->photo) }}" class="figure-img img-fluid align-self-center w-100">
                            </div>
                        </div>
                    </figure>
                    <div class="news-content">
                        {!! $news->content !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End News -->
@endsection
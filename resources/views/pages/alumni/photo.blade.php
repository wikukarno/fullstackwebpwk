@extends('layouts.alumni.photo')

@section('title')
    Foto-Alumni
@endsection

@section('Alumni')
    <!-- Organisasi -->
    <section class="section-curriculum-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h3 class="text-center">Foto Alumni Program Studi PWK</h3>
                </div>
                <div class="col-6 col-lg-2 d-flex justify-content-center">
                    @foreach ($graduations as $graduation)
                    <figure class="figure">
                        <img src="{{ Storage::url($graduation->photo)}}" class="figure-img img-fluid rounded" alt="">
                        <figcaption class="figure-caption text-center">{{ $graduation->year }}</figcaption>
                        <p class="text-center">{{ $graduation->name }}</p>
                    </figure>
                    @endforeach
                </div>        
            </div>
        </div>
    </section>
    <!-- End Organisasi -->
@endsection
@extends('layouts.academy.structure')

@section('title')
    Struktur-Organisasi
@endsection

@section('structure')
    <!-- Organisasi -->
    <section class="section-curriculum-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 text-center">
                    <h3>Struktur Organisasi Program Studi PWK</h3>
                    @foreach ($strukturs as $struktur)
                    <img src="{{ Storage::url($struktur->photo) }}" class="figure-img img-fluid align-self-center w-100">
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Organisasi -->
@endsection
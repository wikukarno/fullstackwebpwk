@extends('layouts.admin.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Galeri</strong>
            <small>{{ $gallery->title }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="photo" class="form-control-label">Gambar</label>
                    <input type="file"
                        name="photo"
                        required 
                        value="{{ old('photo') ? old('photo') : $gallery->photo }}"
                        class="form-control @error('photo') is-invalid @enderror"/>
                    @error('photo') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="date" class="form-control-label">Tanggal Upload</label>
                    <input type="date"
                        name="date"
                        required 
                        value="{{ old('date') ? old('date') : $gallery->date }}"
                        class="form-control @error('date') is-invalid @enderror"/>
                    @error('date') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="title" class="form-control-label">Judul Galeri</label>
                    <input type="text"
                        name="title"
                        required 
                        value="{{ old('title') ? old('title') : $gallery->title }}"
                        class="form-control @error('title') is-invalid @enderror"/>
                    @error('title') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah Galeri
                    </button>
                    <a href="{{ route('galleries.index') }}" class="btn btn-danger btn-block">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
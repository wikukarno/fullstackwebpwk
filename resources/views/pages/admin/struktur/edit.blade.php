@extends('layouts.admin.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Sturktur Organisasi</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('strukturs.update', $struktur->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="photo" class="form-control-label">Gambar</label>
                    <span class="ml-5">Max:255kb (.jpg)</span>
                    <input type="file"
                        name="photo"
                        required 
                        value="{{ old('photo') ? old('photo') : $gallery->photo }}"
                        class="form-control @error('photo') is-invalid @enderror"/>
                    @error('photo') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah Organisasi
                    </button>
                    <a href="{{ route('strukturs.index') }}" class="btn btn-danger btn-block">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
@extends('layouts.admin.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Video</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('videos.update', $videos->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title" class="form-control-label">Judul Video</label>
                    <input type="text"
                        name="title" 
                        value="{{ old('title') ? old('title') : $videos->title }}"
                        class="form-control @error('title') is-invalid @enderror"/>
                    @error('title') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="url" class="form-control-label">Url Embed Video</label>
                    <input type="url"
                        name="url"
                        value="{{ old('url') ? old('url') : $videos->url }}"
                        class="form-control @error('url') is-invalid @enderror"/>
                    @error('url') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah Video
                    </button>
                    <a href="{{ route('videos.index') }}" class="btn btn-danger btn-block">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
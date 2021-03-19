@extends('layouts.admin.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Berita</strong>
            <small>{{ $news->title }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('newses.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="photo" class="form-control-label">Gambar</label>
                    <span class="ml-5">Max:255kb (.jpg)</span>
                    <input type="file"
                        name="photo"
                                required 
                        value="{{ old('photo') ? old('photo') : $news->photo }}"
                        class="form-control @error('photo') is-invalid @enderror"/>
                    @error('photo') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="date" class="form-control-label">Tanggal Upload</label>
                    <input type="date"
                        name="date"
                        required 
                        value="{{ old('date') ? old('date') : $news->date }}"
                        class="form-control @error('date') is-invalid @enderror"/>
                    @error('date') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="title" class="form-control-label">Judul Berita</label>
                    <input type="text"
                        name="title"
                        required 
                        value="{{ old('title') ? old('title') : $news->title }}"
                        class="form-control @error('title') is-invalid @enderror"/>
                    @error('title') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="thumbnail" class="form-control-label">Cuplikan Berita</label>
                    <textarea name="thumbnail"
                            required
                            class="form-control @error('thumbnail') is-invalid @enderror">{{ old('thumbnail') ? old('thumbnail') : $news->thumbnail }}</textarea>
                    @error('thumbnail') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="content" class="form-control-label">Isi</label>
                    <textarea name="content"
                            required
                            class="ckeditor form-control @error('content') is-invalid @enderror">{{ old('content') ? old('content') : $news->content }}</textarea>
                    @error('content') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah Berita
                    </button>
                    <a href="{{ route('newses.index') }}" class="btn btn-danger btn-block">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
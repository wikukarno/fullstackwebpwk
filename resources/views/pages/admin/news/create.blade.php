@extends('layouts.admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Berita</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($$errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('newses.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="photo" class="form-control-label">Foto</label>
                    <span class="ml-5">Max:255kb (.jpg)</span>
                    <input  type="file"
                            name="photo" 
                            value="{{ old('photo') }}" 
                            accept="image/*"
                            required
                            class="form-control @error('photo') is-invalid @enderror"/>
                    @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
                  </div>
                <div class="form-group">
                    <label for="date" class="form-control-label">Tanggal Upload Berita</label>
                    <input type="date"
                           name="date"
                           required 
                           value="{{ old('date') }}"
                           class="form-control @error('date') is-invalid @enderror"/>
                    @error('date') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="title" class="form-control-label">Judul Berita</label>
                    <input type="text"
                           name="title"
                           required 
                           value="{{ old('title') }}"
                           class="form-control @error('title') is-invalid @enderror"/>
                    @error('title') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="thumbnail" class="form-control-label">Cuplikan Berita</label>
                    <textarea name="thumbnail"
                              class="form-control @error('thumbnail') is-invalid @enderror">{{ old('thumbnail') }}</textarea>
                    @error('thumbnail') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="content" class="form-control-label">Isi Berita</label>
                    <textarea name="content"
                              class="ckeditor form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                    @error('content') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

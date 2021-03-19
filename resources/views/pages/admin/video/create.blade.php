@extends('layouts.admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Video</h1>
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
            <form action="{{ route('videos.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title" class="form-control-label">Judul Galery</label>
                    <input type="text"
                           name="title" 
                           value="{{ old('title') }}"
                           placeholder="PKKMB"
                           required
                           class="form-control @error('title') is-invalid @enderror"/>
                    @error('title') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="url" class="form-control-label">Url Embed Video</label>
                    <input type="url"
                           name="url"
                           value="{{ old('url') }}"
                           required
                           placeholder="https://www.youtube.com/embed/abcdefgh" 
                           class="form-control @error('url') is-invalid @enderror"/>
                    @error('url') <div class="text-muted">{{ $message }}</div>@enderror
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
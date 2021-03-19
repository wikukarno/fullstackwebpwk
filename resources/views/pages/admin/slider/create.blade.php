@extends('layouts.admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Galeri</h1>
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
            <form action="{{ route('sliders.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="photo" class="form-control-label">Foto</label>
                    <input  type="file"
                            name="photo" 
                            value="{{ old('photo') }}" 
                            accept="image/*"
                            required
                            class="form-control @error('photo') is-invalid @enderror"/>
                    @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
                <a href="{{ route('sliders.index') }}" class="btn btn-danger btn-block">
                    Batal
                </a>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
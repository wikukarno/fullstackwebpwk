@extends('layouts.admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kurikulum</h1>
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
            <form action="{{ route('kurikulums.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="information" class="form-control-label">Informasi Kurikulum</label>
                    <textarea name="information"
                              class="ckeditor form-control @error('information') is-invalid @enderror">{{ old('information') }}</textarea>
                    @error('information') <div class="text-muted">{{ $message }}</div>@enderror
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
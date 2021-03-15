@extends('layouts.admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Statistik</h1>
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
            <form action="{{ route('statistic.update', $item->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="alumni">Alumni</label>
                    <input type="text" class="form-control" name="alumni" placeholder="Alumni" value="{{ $item->alumni }}" required>
                </div>
                <div class="form-group">
                    <label for="mahasiswa">Mahasiswa</label>
                    <input type="text" class="form-control" name="mahasiswa" placeholder="Mahasiswa" value="{{ $item->mahasiswa }}" required>
                </div>
                <div class="form-group">
                    <label for="dosen">Dosen</label>
                    <input type="text" class="form-control" name="dosen" placeholder="Dosen" value="{{ $item->dosen }}" required>
                </div>
                <div class="form-group">
                    <label for="gedung">Gedung</label>
                    <input type="text" class="form-control" name="gedung" placeholder="Gedung" value="{{ $item->gedung }}" required>
                </div>
                <div class="form-group">
                    <label for="prestasi">Prestasi</label>
                    <input type="text" class="form-control" name="prestasi" placeholder="Prestasi" value="{{ $item->prestasi }}" required>
                </div>
                <div class="form-group">
                    <label for="labor">Labor</label>
                    <input type="text" class="form-control" name="labor" placeholder="Labor" value="{{ $item->labor }}" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
                <a href="{{ route('statistic.index') }}" class="btn btn-danger btn-block">
                    Batal
                </a>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
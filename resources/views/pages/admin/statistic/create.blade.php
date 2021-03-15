@extends('layouts.admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Statistik</h1>
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
            <form action="{{ route('statistic.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="alumni" class="form-control-label">Jumlah Lulusan</label>
                    <input type="number"
                           name="alumni" 
                           placeholder="0"
                           required
                           value="{{ old('alumni') }}"
                           class="form-control @error('alumni') is-invalid @enderror"/>
                    @error('alumni') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="mahasiswa" class="form-control-label">Jumlah Mahasiswa</label>
                    <input type="number"
                           name="mahasiswa" 
                           placeholder="0"
                           required
                           value="{{ old('mahasiswa') }}"
                           class="form-control @error('mahasiswa') is-invalid @enderror"/>
                    @error('mahasiswa') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="dosen" class="form-control-label">Jumlah Dosen</label>
                    <input type="number"
                           name="dosen" 
                           placeholder="0"
                           required
                           value="{{ old('dosen') }}"
                           class="form-control @error('dosen') is-invalid @enderror"/>
                    @error('dosen') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="gedung" class="form-control-label">Jumlah Gedung</label>
                    <input type="number"
                           name="gedung" 
                           placeholder="0"
                           required
                           value="{{ old('gedung') }}"
                           class="form-control @error('gedung') is-invalid @enderror"/>
                    @error('gedung') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="prestasi" class="form-control-label">Jumlah Prestasi</label>
                    <input type="number"
                           name="prestasi" 
                           placeholder="0"
                           required
                           value="{{ old('prestasi') }}"
                           class="form-control @error('prestasi') is-invalid @enderror"/>
                    @error('prestasi') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="labor" class="form-control-label">Jumlah Labor</label>
                    <input type="number"
                           name="labor" 
                           placeholder="0"
                           required
                           value="{{ old('labor') }}"
                           class="form-control @error('labor') is-invalid @enderror"/>
                    @error('labor') <div class="text-muted">{{ $message }}</div>@enderror
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
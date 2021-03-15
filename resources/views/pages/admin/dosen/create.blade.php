@extends('layouts.admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Dosen</h1>
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
            <form action="{{ route('teachers.store')}}" method="POST" enctype="multipart/form-data">
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
                  <div class="form-group">
                    <label for="name" class="form-control-label">Nama</label>
                    <input type="text"
                        name="name" 
                        required
                        value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror"/>
                    @error('name') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nidn" class="form-control-label">NIDN</label>
                    <input type="number"
                        name="nidn" 
                        required
                        value="{{ old('nidn')}}"
                        class="form-control @error('nidn') is-invalid @enderror"/>
                    @error('nidn') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="position" class="form-control-label">Jabatan</label>
                    <input type="text"
                        name="position" 
                        required
                        value="{{ old('position') }}"
                        class="form-control @error('position') is-invalid @enderror"/>
                    @error('position') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="education" class="form-control-label">Pendidikan</label>
                    <input type="text"
                        name="education" 
                        required
                        value="{{ old('education') }}"
                        class="form-control @error('education') is-invalid @enderror"/>
                    @error('education') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="university" class="form-control-label">Universitas</label>
                    <input type="text"
                        name="university"
                        required 
                        value="{{ old('university') }}"
                        class="form-control @error('university') is-invalid @enderror"/>
                    @error('university') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="expertise" class="form-control-label">Bidang</label>
                    <input type="text"
                        name="expertise"
                        required 
                        value="{{ old('expertise') }}"
                        class="form-control @error('expertise') is-invalid @enderror"/>
                    @error('expertise') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input type="email"
                        name="email"
                        required 
                        value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror"/>
                    @error('email') <div class="text-muted">{{ $message }}</div>@enderror
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
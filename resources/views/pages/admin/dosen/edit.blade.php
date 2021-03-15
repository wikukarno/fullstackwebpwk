@extends('layouts.admin.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Data Dosen</strong>
            <small>{{ $teacher->name }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="photo" class="form-control-label">Gambar</label>
                    <input type="file"
                        name="photo" 
                        value="{{ old('photo') ? old('photo') : $teacher->photo }}"
                        class="form-control @error('photo') is-invalid @enderror"/>
                    @error('photo') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama</label>
                    <input type="text"
                        name="name" 
                        value="{{ old('name') ? old('name') : $teacher->name }}"
                        class="form-control @error('name') is-invalid @enderror"/>
                    @error('name') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nidn" class="form-control-label">NIDN</label>
                    <input type="number"
                        name="nidn" 
                        value="{{ old('nidn') ? old('nidn') : $teacher->nidn }}"
                        class="form-control @error('nidn') is-invalid @enderror"/>
                    @error('nidn') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="position" class="form-control-label">Jabatan</label>
                    <input type="text"
                        name="position" 
                        value="{{ old('position') ? old('position') : $teacher->position }}"
                        class="form-control @error('position') is-invalid @enderror"/>
                    @error('position') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="education" class="form-control-label">Pendidikan</label>
                    <input type="text"
                        name="education" 
                        value="{{ old('education') ? old('education') : $teacher->education }}"
                        class="form-control @error('education') is-invalid @enderror"/>
                    @error('education') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="university" class="form-control-label">Universitas</label>
                    <input type="text"
                        name="university" 
                        value="{{ old('university') ? old('university') : $teacher->university }}"
                        class="form-control @error('university') is-invalid @enderror"/>
                    @error('university') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="expertise" class="form-control-label">Bidang</label>
                    <input type="text"
                        name="expertise" 
                        value="{{ old('expertise') ? old('expertise') : $teacher->expertise }}"
                        class="form-control @error('expertise') is-invalid @enderror"/>
                    @error('expertise') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input type="email"
                        name="email" 
                        value="{{ old('email') ? old('email') : $teacher->email }}"
                        class="form-control @error('email') is-invalid @enderror"/>
                    @error('email') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah Berita
                    </button>
                    <a href="{{ route('teachers.index') }}" class="btn btn-danger btn-block">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
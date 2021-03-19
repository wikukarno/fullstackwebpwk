@extends('layouts.admin.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Data Alumni</strong>
            <small>{{ $graduation->name }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('graduations.update', $graduation->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="photo" class="form-control-label">Gambar</label>
                    <span class="ml-5">Max:255kb (.jpg)</span>
                    <input type="file"
                        name="photo" 
                        value="{{ old('photo') ? old('photo') : $graduation->photo }}"
                        class="form-control @error('photo') is-invalid @enderror"/>
                    @error('photo') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="npm" class="form-control-label">Npm</label>
                    <input type="number"
                        name="npm" 
                        value="{{ old('npm') ? old('npm') : $graduation->npm }}"
                        class="form-control @error('npm') is-invalid @enderror"/>
                    @error('npm') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input type="email"
                        name="email" 
                        value="{{ old('email') ? old('email') : $graduation->email }}"
                        class="form-control @error('email') is-invalid @enderror"/>
                    @error('email') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama</label>
                    <input type="text"
                        name="name" 
                        value="{{ old('name') ? old('name') : $graduation->name }}"
                        class="form-control @error('name') is-invalid @enderror"/>
                    @error('name') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="jenis-kelamin">
                    <div class="form-group ml-4">
                        <input class="form-check-input" type="radio" name="gender" value="{{ old('gender') ? old('gender') : $graduation->gender  }}" checked>
                        <label class="form-check-label" for="gender">
                          Laki-Laki
                        </label>
                        @error('gender') <div class="text-muted">{{ $message }}</div> @enderror
                      </div>
                      <div class="form-group ml-4">
                        <input class="form-check-input" type="radio" name="gender" value="{{ old('gender') ? old('gender') : $graduation->gender  }}" checked>
                        <label class="form-check-label" for="gender">
                          Perempuan
                        </label>
                        @error('gender') <div class="text-muted">{{ $message }}</div> @enderror
                      </div>
                  </div>
                <div class="form-group">
                    <label for="year" class="form-control-label">Tahun Lulus</label>
                    <input type="number"
                        name="year" 
                        value="{{ old('year') ? old('year') : $graduation->year }}"
                        class="form-control @error('year') is-invalid @enderror"/>
                    @error('year') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="address" class="form-control-label">Alamat</label>
                    <textarea name="address"
                            required
                            class="form-control @error('address') is-invalid @enderror">{{ old('address') ? old('address') : $graduation->address }}</textarea>
                    @error('address') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah Data
                    </button>
                    <a href="{{ route('graduations.index') }}" class="btn btn-danger btn-block">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
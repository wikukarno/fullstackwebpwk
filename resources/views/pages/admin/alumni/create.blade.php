@extends('layouts.admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Alumni</h1>
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
            <form action="{{ route('graduations.store')}}" method="POST" enctype="multipart/form-data">
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
                    <label for="npm" class="form-control-label">NPM</label>
                    <input type="number"
                        name="npm" 
                        required
                        value="{{ old('npm') }}"
                        class="form-control @error('npm') is-invalid @enderror"/>
                    @error('npm') <div class="text-muted">{{ $message }}</div>@enderror
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
                  <div class="form-group">
                    <label for="name" class="form-control-label">Nama</label>
                    <input type="text"
                        name="name" 
                        required
                        value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror"/>
                    @error('name') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                  <div class="jenis-kelamin">
                    <div class="form-group ml-4">
                        <input class="form-check-input" type="radio" name="gender" value="pria">
                        <label class="form-check-label" for="gender">
                          Laki-Laki
                        </label>
                        @error('gender') <div class="text-muted">{{ $message }}</div> @enderror
                      </div>
                      <div class="form-group ml-4">
                        <input class="form-check-input" type="radio" name="gender" value="wanita">
                        <label class="form-check-label" for="gender">
                          Perempuan
                        </label>
                        @error('gender') <div class="text-muted">{{ $message }}</div> @enderror
                      </div>
                  </div>



                <div class="form-group mt-2">
                    <label for="year" class="form-control-label">Tahun Lulus</label>
                    <input type="number"
                        name="year" 
                        required
                        value="{{ old('year')}}"
                        class="form-control @error('year') is-invalid @enderror"/>
                    @error('year') <div class="text-muted">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="address" class="form-control-label">Alamat</label>
                    <textarea name="address"
                              class="form-control @error('address') is-invalid @enderror">{{ old('content') }}</textarea>
                    @error('address') <div class="text-muted">{{ $message }}</div>@enderror
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
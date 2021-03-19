@extends('layouts.admin.app')
@section('title')
    Admin
@endsection

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Daftar Alumni</h1>
      <a href="{{ route('graduations.create')}}" class="btn btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i>
        Tambah Data Alumni
      </a>
    </div>


    <div class="row">
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>ID</th>
                          {{-- <th>Gambar</th> --}}
                          <th>Npm</th>
                          <th>Email</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Tahun Lulus</th>
                          <th>Alamat</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @forelse ($graduations as $graduation )
                      <tr>
                          <td>{{ $graduation->id }}</td>
                          {{-- <td>
                            <img src="{{ Storage::url($graduation->photo) }}" alt="" style="width: 150px" class="img-thumbnail" />
                          </td> --}}
                          <td>{{ $graduation->npm }}</td>
                          <td>{{ $graduation->email }}</td>
                          <td>{{ $graduation->name }}</td>
                          <td>{{ $graduation->gender }}</td>
                          <td>{{ $graduation->year }}</td>
                          <td>{{ $graduation->address }}</td>
                          <td>
                              <a href="{{ route('graduations.edit', $graduation->id) }}" class="btn btn-info">
                                  <i class="fa fa-pencil-alt"></i>
                              </a>
                              <form action="{{ route('graduations.destroy', $graduation->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                          </td>
                      </tr>
                      @empty
                      <tr>
                          <td colspan="10" class="text-center">
                              Data Kosong
                          </td>
                      </tr>
                       @endforelse
                  </tbody>
              </table>
          </div>
      </div>
  </div>

    

    

  </div>
  <!-- /.container-fluid -->
@endsection
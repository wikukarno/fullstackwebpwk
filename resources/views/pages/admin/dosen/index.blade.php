@extends('layouts.admin.app')
@section('title')
    Admin
@endsection

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Daftar Dosen</h1>
      <a href="{{ route('teachers.create')}}" class="btn btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i>
        Tambah Data Dosen
      </a>
    </div>


    <div class="row">
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Gambar</th>
                          <th>Nama</th>
                          <th>NIDN</th>
                          <th>Jabatan</th>
                          <th>Pendidikan</th>
                          <th>Universitas</th>
                          <th>Bidang</th>
                          <th>Email</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @forelse ($teachers as $teacher )
                      <tr>
                          <td>{{ $teacher->id }}</td>
                          <td>
                            <img src="{{ Storage::url($teacher->photo) }}" alt="" style="width: 150px" class="img-thumbnail" />
                          </td>
                          <td>{{ $teacher->name }}</td>
                          <td>{{ $teacher->nidn }}</td>
                          <td>{{ $teacher->position }}</td>
                          <td>{{ $teacher->education }}</td>
                          <td>{{ $teacher->university }}</td>
                          <td>{{ $teacher->expertise }}</td>
                          <td>{{ $teacher->email }}</td>
                          <td>
                              <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-info">
                                  <i class="fa fa-pencil-alt"></i>
                              </a>
                              <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" class="d-inline">
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
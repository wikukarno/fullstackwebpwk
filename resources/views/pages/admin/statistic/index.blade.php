@extends('layouts.admin.app')
@section('title')
    Admin
@endsection

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Statistik</h1>
      <a href="{{ route('statistic.create')}}" class="btn btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i>
        Tambah Data Statistik
      </a>
    </div>


    <div class="row">
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Alumni</th>
                          <th>Mahasiswa</th>
                          <th>Dosen</th>
                          <th>Gedung</th>
                          <th>Prestasi</th>
                          <th>Labor</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @forelse ($items as $item )
                      <tr>
                          <td>{{ $item->id }}</td>
                          <td>{{ $item->alumni }}</td>
                          <td>{{ $item->mahasiswa }}</td>
                          <td>{{ $item->dosen }}</td>
                          <td>{{ $item->gedung }}</td>
                          <td>{{ $item->prestasi }}</td>
                          <td>{{ $item->labor }}</td>
                          <td>
                              <a href="{{ route('statistic.edit', $item->id) }}" class="btn btn-info">
                                  <i class="fa fa-pencil-alt"></i>
                              </a>
                          </td>
                      </tr>
                      @empty
                      <tr>
                          <td colspan="8" class="text-center">
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
@extends('layouts.admin.app')
@section('title')
    Admin
@endsection

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Kurikulum</h1>
      <a href="{{ route('kurikulums.create')}}" class="btn btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i>
        Tambah Data
      </a>
    </div>


    <div class="row">
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Isi</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @forelse ($kurikulums as $kurikulum )
                      <tr>
                          <td>{{ $kurikulum->id }}</td>
                          <td>{{ $kurikulum->information }}</td>
                          <td>
                              <a href="{{ route('kurikulums.edit', $kurikulum->id) }}" class="btn btn-info">
                                  <i class="fa fa-pencil-alt"></i>
                              </a>
                              <form action="{{ route('kurikulums.destroy', $kurikulum->id) }}" method="POST" class="d-inline hapus">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger swal-hapus">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                          </td>
                      </tr>
                      @empty
                      <tr>
                          <td colspan="7" class="text-center">
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

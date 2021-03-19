@extends('layouts.admin.app')
@section('title')
    Admin
@endsection

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Slider</h1>
      <a href="{{ route('sliders.create')}}" class="btn btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i>
        Tambah Slider
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
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      @forelse ($sliders as $slider )
                      <tr>
                          <td>{{ $slider->id }}</td>
                          <td>
                            <img src="{{ Storage::url($slider->photo) }}" alt="" style="width: 150px" class="img-thumbnail" />
                          </td>
                          <td>
                              <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-info">
                                  <i class="fa fa-pencil-alt"></i>
                              </a>
                              <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" class="d-inline">
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
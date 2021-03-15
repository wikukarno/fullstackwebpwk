@extends('layouts.academy.lecturer')

@section('title')
    Daftar-Dosen
@endsection

@section('lecturer')
    <!-- Daftar Dosen -->
    <section class="section-dosen-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h3 class="text-center">Table Daftar Dosen Program Studi PWK</h3>
                    <div class="attendee">
                        <table class="table table-responsive-sm text-center mt-5">
                            <thead>
                                <tr>
                                    <td scope="col">Foto</td>
                                    <td scope="col">Nama</td>
                                    <td scope="col">NIDN</td>
                                    <td scope="col">Jabatan</td>
                                    <td scope="col">Pendidikan</td>
                                    <td scope="col">Universitas</td>
                                    <td scope="col">Bidang</td>
                                    <td scope="col">Email</td>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)
                                    <tr>
                                        <td>
                                            <img src="{{ Storage::url($teacher->photo) }}" alt="" height="100" />
                                        </td>
                                        <td class="align-middle">{{ $teacher->name }}</td>
                                        <td class="align-middle">{{ $teacher->nidn }}</td>
                                        <td class="align-middle">{{ $teacher->position }}</td>
                                        <td class="align-middle">{{ $teacher->education }}</td>
                                        <td class="align-middle">{{ $teacher->university }}</td>
                                        <td class="align-middle">{{ $teacher->expertise }}</td>
                                        <td class="align-middle">{{ $teacher->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Daftar Dosen -->
@endsection
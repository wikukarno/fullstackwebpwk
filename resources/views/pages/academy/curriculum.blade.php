@extends('layouts.academy.curriculum')

@section('title')
    Kurikulum
@endsection

@section('kurikulum')
    <!-- Kurikulum -->
    <section class="section-curriculum-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <h3>Kurikulum Program Studi PWK</h3>
                    <p>Jumlah SKS minimum yang harus ditempuh sebagai syarat kelulusan di Prodi PWK adalah sebanyak 148 sks, yang tersusun sebagai berikut:</p>
                    <div class="attendee">
                        <table class="table table-responsive-sm">
                            <thead class="thead">
                                <tr>
                                    <th scope="col">Jenis Mata Kuliah</th>
                                    <th scope="col">SKS</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mata Kuliah Wajib</td>
                                    <td>139</td>
                                    <td>Mata Kuliah Utama</td>
                                </tr>
                                <tr>
                                    <td>Mata Kuliah Pilihan</td>
                                    <td>18 (9)</td>
                                    <td>Mata Kuliah ditawarkan 18 SKS tetapi wajib di ambil sebanyak 9 SKS</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th scope="col">Jumlah Total</th>
                                    <th scope="col">148</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-10">
                    <div class="keterangan mt-5">
                        <h5>Keterangan</h5>
                        <p>Tabel diatas merupakan informasi jumlah SKS yang diterapkan saat ini.</p>
                        <p>Berdasarkan SK Rektor UIR : 17/UIR/KPTS/2014 Tentang Kurikulum Prodi PWK FT UIR, Jumlah mata kuliah yang ditawarkan sebanyak 64 mata kuliah dengan total jumlah sks sebesar 157 sks, sedangkan rincian sks mata kuliah wajib sebanyak
                            139 sks dan mata kuliah pilihan sebanyak 18 sks, dari jumlah total mata kuliah pilihan yang disajikan mahasiswa wajib mengambil minimal 9 sks untuk memenuhi syarat kelulusan sebesar 148 sks. Mata kuliah pilihan yang ditawarkan
                            sebanyak 7 mata kuliah dengan distribusi mata kuliah berada di 3 (tiga) semester dengan rincian semester V sebanyak 2 (dua) mata kuliah, semester VI sebanyak 2 (dua) mata kuliah dan semester VII sebanyak 3 (tiga) mata kuliah.
                        </p>
                        <p>
                            Tabel Mata Kuliah yang disajikan bagi Mahasiswa selama menempuh perkuliahan pada Jenjang S1 di Prodi PWK FT UIR dapat diunduh di bawah ini
                        </p>
                        <div class="button-download mt-5">
                            <a href="#" class="btn btn-download">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Kurikulum -->
@endsection
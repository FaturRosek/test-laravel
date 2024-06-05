@extends('layout.main')

@section('konten')
    <!-- Contact Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Buku</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="container">
                <div class="mb-3">
                    <a href="{{ url('/create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Nama Penerbit</th>
                            <th scope="col">Tahun Buku</th>
                            <th scope="col">Jumlah Buku</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku as $b)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $b->judul_buku }}</td>
                                <td>{{ $b->penerbit->nama_penerbit }}</td>
                                <td>{{ $b->tahun_buku }}</td>
                                <td>{{ $b->jumlah_buku }}</td>
                                <td>
                                    <button class="btn btn-primary">Ubah</button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

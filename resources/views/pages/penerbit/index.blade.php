@extends('layout.main')

@section('konten')
    <!-- Contact Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Penerbit</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="container">
                <div class="mb-3">
                    @if (Auth::user()->level == 'superadmin')
                        <a href="{{ url('/create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                    @endif
                    @session('sukses')
                        <div class="alert alert-success mb-3" role="alert">
                            {{ $value }}
                        </div>
                    @endsession
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Penerbit</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penerbit as $p)
                            <tr>
                                <th class="align-middle">{{ $loop->iteration }}</th>
                                <td class="align-middle">
                                    <a href="{{ url('/buku/' . $p->id) }}">{{ $p->nama_penerbit }}</a>
                                </td>
                                <td class="align-middle">{{ $p->alamat }}</td>
                                <td class="align-middle">{{ $p->no_telepon }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-secondary btn-sm">Detail</a>
                                        @if (Auth::user()->level == 'admin')
                                            <a href="{{ url('/edit/' . $p->id) }}" class="btn btn-info btn-sm">Edit</a>
                                            <a href="{{ url('/destroy/' . $p->id) }}"
                                                class="btn btn-danger btn-sm">Hapus</a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

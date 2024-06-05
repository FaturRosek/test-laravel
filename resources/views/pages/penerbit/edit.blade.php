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
                <form action="{{ url('/update') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="hidden" name="id" value="{{ $penerbit->id }}">
                        <label for="exampleFormControlInput1" class="form-label">Nama Penerbit</label>
                        <input type="text" name="nama_penerbit" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nama Penerbit" value="{{ $penerbit->nama_penerbit }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3">{{ $penerbit->alamat }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nomer Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nomer Telepon" value="{{ $penerbit->no_telepon }}">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

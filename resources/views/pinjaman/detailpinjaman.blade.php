@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="col-md-6 mx-auto">
            <h2>Detail Pinjaman</h2>
            <div class="form">
                <div class="form-group">
                    <label for="">Tanggal di Pinjam</label>
                    <input type="text" class="form-control" name="umur" value="{{$peminjamen->tanggal_dipinjam}}" disabled>
                </div>

                <div class="form-group">
                    <label for="">Nama Buku</label>
                    <input type="text" class="form-control" name="tanggal_lahir" value="{{$peminjamen->nama_buku}}" disabled>
                </div>

                <div class="form-group">
                    <label for="">Deskripsi Buku</label>
                    <input type="text" class="form-control" name="jenis_kelamin" value="{{$peminjamen->deskripsi_buku}}" disabled>
                </div>
            </div>
        </div>
    </div>
@endsection

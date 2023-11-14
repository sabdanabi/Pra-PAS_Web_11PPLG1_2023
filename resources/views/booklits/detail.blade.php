@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="col-md-6 mx-auto">
            <h2>Detail Buku</h2>
            <div class="form">
                <div class="form-group">
                    <label for="">Nama Pencipta</label>
                    <input type="text" class="form-control" name="nama_pencipta" value="{{$booklist->nama_pencipta}}" disabled>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Rilis</label>
                    <input type="text" class="form-control" name="tanggal_rilis" value="{{$booklist->tanggal_rilis}}" disabled>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="4" disabled>{{$booklist->deskripsi}}</textarea>
                </div>
            </div>
        </div>
    </div>
@endsection

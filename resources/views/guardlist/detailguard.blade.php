@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="col-md-6 mx-auto">
            <h2>Detail Penjaga</h2>
            <div class="form">
                <div class="form-group">
                    <label for="">Umur Penjaga</label>
                    <input type="text" class="form-control" name="umur" value="{{$guardlits->umur}}" disabled>
                </div>

                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="text" class="form-control" name="tanggal_lahir" value="{{$guardlits->tanggal_lahir}}" disabled>
                </div>

                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin" value="{{$guardlits->jenis_kelamin}}" disabled>
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="4" disabled>{{$guardlits->alamat}}</textarea>
                </div>
            </div>
        </div>
    </div>
@endsection

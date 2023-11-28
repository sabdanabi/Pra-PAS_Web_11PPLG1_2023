@extends('layouts.main')

@section('content')
    <div class="container">
        <table class="table table-striped table-hover">
            <thead class="table-dark"> 
                <th>No</th>
                <th>No Rak Buku</th>
                <th>Nama Peminjam</th>
                <th>Actions</th>
            </thead>
            <tbody>
            @php
                    $no = 1;
                @endphp

                @foreach ($peminjamen as $pinjam)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{ $pinjam['id_rak'] }}</td>
                        <td>{{ $pinjam['nama_peminjam'] }}</td>
                        <td>
                            <a href="/pinjaman/detailpinjaman/{{ $pinjam->id }}" class="btn btn-info"><i class="bi bi-info-circle"></i> Info</a>
                            <button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
                            <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button>
                        </td>
                    </tr>

                    @php
                    $no++
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

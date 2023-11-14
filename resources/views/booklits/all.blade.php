@extends('layouts.main')

@section('content')
    <div class="container">
        <table class="table table-striped table-sm mx-auto">
            <thead class="table-dark"> 
                <th>No</th>
                <th>No Rak Buku</th>
                <th>Nama Buku</th>
                <th>Jumlah Buku</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp

                @foreach ($booklits as $booklist)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{ $booklist['no_rak_buku'] }}</td>
                        <td>{{ $booklist['nama_buku'] }}</td>
                        <td>{{ $booklist['jumlah_buku'] }}</td>
                        <td>
                            <a href="/booklits/detail/{{ $booklist->id }}" class="btn btn-info"><i class="fa-solid fa-circle-info"></i> Info</a>
                            <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</button>
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

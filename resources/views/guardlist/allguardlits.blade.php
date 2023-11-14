@extends('layouts.main')

@section('content')
    <div class="container">
        <table class="table table-striped table-hover">
            <thead class="table-dark"> 
                <th>No</th>
                <th>ID Penjaga</th>
                <th>Nama Penjaga</th>
                <th>Shift</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp

                @foreach ($guardlits as $guard)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{ $guard['id_penjaga'] }}</td>
                        <td>{{ $guard['nama_penjaga'] }}</td>
                        <td>{{ $guard['shift'] }}</td>
                        <td>
                            <a href="/guardlist/detailguard/{{ $guard->id }}" class="btn btn-info"><i class="bi bi-info-circle"></i> Info</a>
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

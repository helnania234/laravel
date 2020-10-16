@extends('layouts.head')


@section('content')
<div class="site-section">
    <div class="container">
        @if (session('pesan'))
        <div class="alert alert-primary">
            {{ session('pesan') }}
        </div>
        @endif
        <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $id = 1
                            @endphp
                            @foreach ($orang as $item)
                            <tr>
                                <td>{{ $id++ }} </td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->umur }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td><a href="#" class="btn btn-primary height-auto btn-sm">update</a>
                                    <a href="{{ route('delete', ['id'=>$item->id]) }}"
                                        class="btn btn-primary height-auto btn-sm">delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <td><a href="{{ route('tambah') }}" class="btn btn-primary height-auto btn-sm">kembali</a>
            </form>
        </div>
        @endsection
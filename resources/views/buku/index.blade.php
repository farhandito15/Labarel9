@extends('layout.master')

@section('content')
<div class="container">
    <h1>Data Data Buku</h1>
    <a href="/buku/create" class="btn btn-primary">Tambah Data Buku</a>

    <table class="table table-hover">
        <tr>
            <th>No.</th>
            <th>Judul Buku</th>
            <th>No.Seri</th>
            <th>Tanggal Terbit</th>
            <th>Penerbit</th>
            <th>Kategori</th>
            <th>Action</th>
        </tr>

        @foreach ($buku as $b)
        <tr>
            <td>{{$b->id}}</td>
            <td>{{$b->judul}}</td>
            <td>{{$b->no_seri}}</td>
            <td>{{$b->tgl_terbit}}</td>
            <td>{{$b->penerbit}}</td>
            <td>{{$b->kategori}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/buku/{{$b->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/buku/{{$b->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Hapus" class="btn btn-danger">
                    </form>
                </div>
            </td>
        </tr>
        @endforeach

    </table>
</div>
@endsection
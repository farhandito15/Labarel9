@extends('layout.master')

@section('content')

<div class="container">
    <h1>Buat data</h1>
    <form action="/buku/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
            <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No. Seri</label>
            <input type="number" name="no_seri" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Terbit</label>
            <input type="date" name="tgl_terbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary">


    </form>
</div>

@endsection
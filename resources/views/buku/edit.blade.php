@extends('layout.master')
@section('content')
<h1>Edit dataa Buku</h1>
<div class="container">

    <form action="/buku/{{$buku->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
            <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$buku->judul}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No. Seri</label>
            <input type="number" name="no_seri" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$buku->no_seri}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Terbit</label>
            <input type="date" name="tgl_terbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$buku->tgl_terbit}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">penerbit</label>
            <input type="text" name="penerbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$buku->penerbit}}">
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$buku->kategori}}">
        </div>


        <input type="submit" name="submit" value="Update Data" class="btn btn-primary">


    </form>
</div>
@endsection
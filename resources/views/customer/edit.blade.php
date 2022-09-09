@extends('layout.master')
@section('content')
<h1>Edit dataa</h1>
<div class="container">

    <form action="/customer/{{$customer->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$customer->nama}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No. KTP</label>
            <input type="number" name="no_ktp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$customer->no_ktp}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No. HP</label>
            <input type="number" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$customer->no_hp}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <select class="form-select" aria-label="Default select example" name="gender">
                <option selected>~ Pilih Jenis Kelamin</option>
                <option value="Pria" @if($customer-> gender == "Pria") selected @endif >Pria</option>
                <option value="Wanita" @if($customer-> gender == "Wanita") selected @endif >Wanita</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <textarea name="alamat" rows="8" class="form-control">{{$customer->alamat}}</textarea><br>
        </div>

        <input type="submit" name="submit" value="Update Data" class="btn btn-primary">


    </form>
</div>
@endsection
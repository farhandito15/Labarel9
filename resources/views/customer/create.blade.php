@extends('layout.master')

@section('content')

<div class="container">
    <a href="{{ route('customer.index') }}">
        Kembali
    </a>

    <h1>Buat data</h1>

    <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('nama') }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No. KTP</label>
            <input type="number" name="no_ktp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('no_ktp') }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No. HP</label>
            <input type="number" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('no_hp') }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <select class="form-select" aria-label="Default select example" name="gender">
                <option selected>~ Pilih Jenis Kelamin</option>
                <option value="Pria" {{ old('gender') == "Pria" ? "selected" : "" }}>Pria</option>
                <option value="Wanita" {{ old('gender') == "Wanita" ? "selected" : "" }}>Wanita</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <textarea name="alamat" rows="8" class="form-control" placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea><br>
        </div>

        <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary">

    </form>
</div>

@endsection
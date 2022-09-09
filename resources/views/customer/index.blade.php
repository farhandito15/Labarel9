@extends('layout.master')

@section('content')
<div class="container">
    <h1>Data Data Customer</h1>
    <a href="/customer/create" class="btn btn-primary">Tambah Data Customer</a>

    <table class="table table-hover">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>No.KTP</th>
            <th>No.HP</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>

        @foreach ($customer as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->nama}}</td>
            <td>{{$c->no_ktp}}</td>
            <td>{{$c->no_hp}}</td>
            <td>{{$c->gender}}</td>
            <td>{{$c->alamat}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/customer/{{$c->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/customer/{{$c->id}}" method="POST">
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
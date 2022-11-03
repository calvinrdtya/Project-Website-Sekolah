@extends('layouts.main3')
@section('container')

<style>
    h1 {
        text-align: center;
        margin-top: 80px;
        font: 32px Viga;
    }
    .navbar-brand {
        color: #FFFFFF;
        margin-left: 20%;
        font: 32px Viga;
    }
    .navbar-brand:hover {
        color: #FFFFFF;
    }

    .bottom-bar {
        width: 100%;
        padding: 15px 0;
        background: #6495ED;
        margin-bottom: -50px;
    }
</style>

<h1>DATA SISWA RPL</h1>

    <div class="container">
    <div class="card-body">
      <a href="/siswa/tambah" class="btn btn-outline-primary">Input Siswa Baru</a>
 <br/> <br/>

    <table class="table table-bordered table-hover table-striped">
        <thead align="center">
            <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th> 
            <th>Alamat</th>
            <th>Foto Siswa</th>
            <th>Action</th>
        </tr> 
    </thead>
<tbody>
 @foreach ($siswa as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->Nama }}</td>
            <td>{{ $s->kelas }}</td>
            <td>{{ $s->Jenis_kelamin }}</td>
            <td>{{ $s->Alamat }}</td> <td><img src="{{url('img/'.$s->Foto)}}" width="100px"></td>
        <td>
    <a href="/siswa/edit/{{ $s->id }}" class="btn btn-warning">Edit</a>
    <a href="/siswa/hapus/{{$s->id}}" class="btn btn-danger">Hapus</a>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
</div>
</div>
  @endsection
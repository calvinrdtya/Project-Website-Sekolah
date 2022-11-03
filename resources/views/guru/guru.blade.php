@extends('layouts.main')
@section('container')

<style>
    h1 {
        text-align: center;
        margin-top: 50px;
        font-size: 30px;
    }
</style>

<h1>DATA SISWA RPL</h1>
    <div class="card-body">
      <a href="/guru/tambah" class="btn btn-primary">Input Guru Baru</a>
 <br/> <br/>

    <table class="table table-bordered table-hover table-striped">
        <thead align="center">
            <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th> 
            <th>Alamat</th>
            <th>Foto Guru</th>
            <th>Action</th>
        </tr> 
    </thead>
<tbody>
 @foreach ($guru as $g)
        <tr>
            <td>{{ $g->id }}</td>
            <td>{{ $g->Nama }}</td>
            <td>{{ $g->Kelas }}</td>
            <td>{{ $g->Jenis_kelamin }}</td>
            <td>{{ $g->Alamat }}</td> <td><img src="{{url('img/'.$g->Foto)}}" width="100px"></td>
        <td>
    <a href="/guru/edit/{{ $g->id }}" class="btn btn-warning">Edit</a>
    <a href="/guru/hapus/{{ $g->id}}" class="btn btn-danger">Hapus</a>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
  @endsection
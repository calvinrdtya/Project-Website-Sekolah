@extends('layouts.main-without-navbar-footer')
    @section('container')

    <style>
        body {
            background: #F3F6FF;
        }
        .edit {
            position: relative;
            padding-top: 70px;
            height: 100%;
        }
        
        .edit .edit-inner {
            margin-bottom: 30px;
            padding: 30px;
            background: #FFFFFF;
        }
        .card-header {
            background-color: #FFFFFF;
        }
    </style>
    
    <div class="edit">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card-header py-3">
                        <a href="/siswa" class="btn btn-primary"><i class="fas fa-arrow-left"></i>&nbsp; Back</a>
                    </div>
                    <div class="edit-inner">
                            <form method="put" action="/siswa/">
                                {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> NIS </label>
                                            <input type='text' name='id' class='form-control' value="{{$siswa->id}}" placeholder='masukkan nis siswa'>
                                        @if($errors -> has('id'))
                                            <div class='text-danger'>
                                        {{$errors -> first ('id')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Nama </label>
                                        <input type='text' name='nama' class='form-control'  value="{{$siswa->Nama}}">
                                             @if($errors -> has('nama'))
                                        <div class='text-danger'>
                                            {{$errors -> first ('nama')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Kelas </label>
                                    <input type='text' name='Kelas' class='form-control' value="{{$siswa->Kelas}}">
                                @if($errors -> has('kelas'))
                                    <div class='text-danger'>
                                {{$errors -> first ('kelas')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Jenis Kelamin </label>
                                        <input type='text' name='jenis_kelamin' class='form-control' value="{{$siswa->Jenis_kelamin}}">
                                    @if($errors -> has('jenis_kelammin'))
                                        <div class='text-danger'>
                                    {{$errors -> first ('jenis_kelammin')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Alamat </label>
                                        <input type='text' name='alamat' class='form-control' value="{{$siswa->alamat}}">
                                    @if($errors -> has('alamat'))
                                        <div class='text-danger'>
                                    {{$errors -> first ('alamat')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        <div class="col-md-6">
                                <label>Upload Foto</label><br>
                                <input type="file" name="foto" value="{{$siswa->Foto}}" accept="image/png,image/jpg,image/jpeg">
                            </div>
                                <div class="col-md-6 mt-4">
                                    <input type="submit" class="btn btn-outline-success" value="simpan">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    @endsection
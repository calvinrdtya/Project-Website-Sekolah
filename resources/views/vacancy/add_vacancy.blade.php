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
                        <a href="/vacancy" class="btn btn-primary"><i class="fas fa-arrow-left"></i>&nbsp; Back</a>
                    </div>
                    <div class="edit-inner">
                            <form method="post" action="/vacancy/simpan">
                                {{ csrf_field() }}


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Lowongan </label>
                                            <input type='text' name='lowongan' class='form-control' placeholder='perusahaan'>
                                        @if($errors -> has('lowongan'))
                                            <div class='text-danger'>
                                        {{$errors -> first ('lowongan')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Perusahaan </label>
                                        <input type='text' name='perusahaan' class='form-control' placeholder='perusahaan'>
                                             @if($errors -> has('perusahaan'))
                                        <div class='text-danger'>
                                            {{$errors -> first ('perusahaan')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Pendidikan </label>
                                    <input type='text' name='pendidikan' class='form-control' placeholder='pendidikan'>
                                @if($errors -> has('pendidikan'))
                                    <div class='text-danger'>
                                {{$errors -> first ('pendidikan')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Lokasi </label>
                                        <input type='text' name='lokasi' class='form-control' placeholder='lokasi'>
                                    @if($errors -> has('lokasi'))
                                        <div class='text-danger'>
                                    {{$errors -> first ('lokasi')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Keahlian </label>
                                        <input type='text' name='keahlian' class='form-control' placeholder='keahlian'>
                                    @if($errors -> has('keahlian'))
                                        <div class='text-danger'>
                                    {{$errors -> first ('keahlian')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Kualifikasi </label>
                                        <input type='text' name='kualifikasi' class='form-control' placeholder='kualifikasi'>
                                    @if($errors -> has('kualifikasi'))
                                        <div class='text-danger'>
                                    {{$errors -> first ('kualifikasi')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        <!-- <div class="col-md-6">
                            <label for="textarea">Keahlian</label>
                                @if($errors -> has('keahlian'))
                            <div class='text-danger'>
                                {{$errors -> first ('keahlian')}}
                            </div>
                                @endif
                            <textarea class="form-control" rows="3" id="textarea"></textarea>
                        </div>
                            <div class="col-md-6">
                                <label for="textarea">Kualifikasi</label>
                                    @if($errors -> has('kualifikasi'))
                                <div class='text-danger'>
                                    {{$errors -> first ('kualifikasi')}}
                                </div>
                                    @endif
                                <textarea class="form-control" rows="3" id="textarea"></textarea>
                            </div> -->
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
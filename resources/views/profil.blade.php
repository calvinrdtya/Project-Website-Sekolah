@extends('layouts.main')
@section('container')

<style>
  .header-profile {
    font-weight: bold;
    font-size: 30px;
    position: absolute;
    width: 800px;
    left: 10px;
    top: 70px;
  }
  
  .content-profile {
    font-size: 16px;
    position: absolute;
    width: 580px;
    height: 92px;
    margin-left: -5px;
    top: 90px;
  }

  .img-profile {
    margin-left: 100%;
    position: relative;
    margin: auto;
    animation: bounceTop-1 3s ease infinite;
  }

  .image-4 {
    width: 500px;
    height: 370px;
    margin-left: 265%;
    margin-top: -110px;
    margin-bottom: 50px;
  } 

</style>

<div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-10 align-items-center">
            <h1 class="header-profile">Profile Sekolah</h1>
            <p style="margin-top: 120px; ">Jl. Ronggo Warsito Gg. Sidomukti No.1, Jambangan, Sumbergedong, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66315</p>
                <p class="content-profile"><br>
  
                <br>
                </p> 
            </div> 
        </div>
    </div>
      <div class="col-lg-3 col-md-6">
          <div class="img-profile">
            <img src="img/smk2.jpg" alt="" class="image-4">
          </div>
      </div>

      <div class="conetnt3 mt-3" style="margin-left: 50px">
        <div class="row">
            <div class="col-md-3">
                <p>
                    <i class="fa-solid fa-user-tie"></i> Guru :  <br>
                    <i class="fa-solid fa-user"></i> Siswa Laki-laki : <br>
                    <i class="fa-solid fa-user"></i> Siswa Perempuan : <br>
                    <i class="fa-solid fa-list-check"></i> Rombongan belajar : <br>
                </p>
            </div>
            <div class="col-md-3">
                <p>
                    <i class="fa-solid fa-graduation-cap"></i> Kurikulum : <br>
                    <i class="fa-solid fa-clock"></i> Penyelenggaraan : <br>
                    <i class="fa-solid fa-gear"></i> Management : <br>
                    <i class="fa-solid fa-gear"></i> Semester Data : <br>
                </p>
            </div>
            <div class="col-md-3">
                <p>
                    <i class="fa-solid fa-signal"></i> Akses Internet : <br>
                    <i class="fa-solid fa-bolt-lightning"></i> Sumber listrik : <br>
                    <i class="fa-solid fa-bolt-lightning"></i> Daya listrik : <br>
                    <i class="fa-solid fa-earth-americas"></i> Luas tanah : <br>
                </p>
            </div>
            <div class="col-md-3">
                <p>
                    <i class="fa-solid fa-chalkboard-user"></i> Ruang kelas : <br>
                    <i class="fa-solid fa-flask"></i> Laboratorium : <br>
                    <i class="fa-solid fa-book"></i> Perpustakaan : <br>
                    <i class="fa-regular fa-hand-point-right"></i> Sanitasi siswa : <br>
                </p>
            </div>
        </div>
    </div>
@endsection
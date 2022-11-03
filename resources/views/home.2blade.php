@extends('layouts.main')
@section('container')

<style>
  .display-4 {
    text-align: center;
    font-size: 40px;
    font-weight: bold;
  }
  .lead {
    text-align: center;
  }
</style>

<div class="jumbotron jumbotron-fluid bg-white">
  <div class="container">
    <h1 class="display-4">Visi</h1><br><hr style="margin-bottom: 40px; margin-top: -20px;">
    <p class="lead" style="margin-top: -20px">Visi Terwujudnya sekolah unggul yang peduli dan berbudaya lingkungan</p>
  </div>
</div>
<div class="jumbotron jumbotron-fluid bg-white" style="margin-top: -120px; margin-bottom: -30px">
  <div class="container">
    <h1 class="display-4">Misi</h1><br><hr style="margin-bottom: 40px; margin-top: -20px;">
    <p class="lead" style="margin-top: -20px">Meningkatkan penghayatan dan pengamalan terhadap ajaran agama yang dianut. 
        <br>Menciptakan suasana akademik yang kondusif. 
        <br>Menyiapkan sumber daya pendidikan yang berkualitas dan bermanfaat bagi pengembangan potensi peserta didik. 
        <br>Menyelenggarakan proses pembelajaran.</p>
  </div>
</div>



    <div class="container" id="scrolling">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-10 align-items-center">
            <h1 class="header-cont">Peringatan HUT Republik Indonesia ke-77 di SMKN 2 Trenggalek</h1>
                <p class="header-content2">Upacara 17 Agustus tahun 2022 dilaksanakan di lapangan  SMKN 2 Trenggalek, 
                    yang di ikuti oleh Bapak Ibu Guru dan siswa kelas XI, XII serta kelas XIII, 
                    khusus kelas X melaksanakan upacara secara daring dirumah.....
                    <!-- Pada Upacara 17 Agustus ini Bapak Sumitra Kepala Sekolah selaku Pembina Upacara. 
                    Setelah upacara diadakan lomba voli antar guru dan tenaga kependidkan. -->
                    <br>
                    <button type="button" href="#" class="btn btn-light">Read More <i class="fas fa-angle-double-right"></i></button>
                </p> 
            </div> 
        </div>
    </div>
      <div class="col-lg-3 col-md-6">
          <div class="header-image">
            <img src="img/merdeka.jpeg" alt="" class="image-1">
          </div>
      </div>

    <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-10 align-items-center">
            <h1 class="header-kpl">Sambutan Kepala SMKN 2 Trenggalek</h1>
                <p class="content-kpl2">Bismillahirohmannirrohim<br>
                    Assalamualaikum Wr.Wb<br>
                    Selamat datang di website resmi SMKN 2 Trenggalek.
                    Saya berharap Website ini dapat dijadikan wahana interaksi yang positif 
                    baik antar civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi yang erat disegala unsur.
                    Mari kita bekerja dan berkarya dengan mengharap ridho sang Kuasa dan keikhlasan yang tulus, dijiwai demi anak bangsa.
                    Terima kasih semoga Allah Azza Wa Jalla menyertai doa kita semua........ amin
                <br>
                <button type="button" href="#" class="btn btn-light">Read More <i class="fas fa-angle-double-right"></i></button>
                </p> 
            </div> 
        </div>
    </div>
      <div class="col-lg-3 col-md-6">
          <div class="img-kepsek">
            <img src="img/kepsek.jpg" alt="" class="image-2">
          </div>
      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-10 align-items-center">
            <h1 class="header-cont3">Dies Natalis ke-18 SMKN 2 Trenggalek</h1>
                <p class="header-smk3">Dies Natalis ke 18 SMKN 2 Trenggalek dilaksanakan bersamaan dengan 
                    Memperingati Hari Anak Nasional Tahun 2022. Dies natalis pada tahun ini diselenggarakan pada tanggal 28 Juli 2022 
                    dengan berbagai kegiatan, diantaranya jalan santai, Donor darah dan Gebyar seni siswa......
                    <br>
                    <button type="button" href="#" class="btn btn-light">Read More <i class="fas fa-angle-double-right"></i></button>
                </p> 
            </div> 
        </div>
    </div>
      <div class="col-lg-3 col-md-6">
          <div class="header-smk">
            <img src="img/dies.jpeg" alt="" class="image-3">
          </div>
      </div>

@endsection

@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <p style="color: #31708F; font-weight:600; font-size:22px; margin-top: 20px">
                <i class="fa-solid fa-calendar-days"></i> 
                Agenda Terbaru
            </p>
        </div>
        <!-- <div class="col-md-4">
            <p style="color:#31708F; font-weight: 600; font-size:22px;">Data Guru</p>
        </div> -->
    </div>

    <div class="row mt-3">
            <div class="col-md-8">
                <div class="jumbotron px-2 py-4 mb-4 text-dark" style="background-color: #E9ECEF">
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <img src="img/jalansehat.jpeg" alt="upacara" class="img-fluid">
                            </div>
                            <div class="col-9 my-auto">
                                <p style="font-size: 20px; font-weight:500; color:#31708F;">Upacara pada hari kamis tanggal 17 Agustus Tahun 2022 dalam rangka memperingati HUT Republik Indonesia ke-77</p>
                                <p style="font-size: 17px; font-weight:450;">Kegiatan upacara hari kamis pagi tanggal 17 Agustus Tahun 2022</p>
                            </div>
                            <!-- <a href="#" style="text-decoration: none; font-weight:700; color:red;">lanjutan>></a> -->
                        </div>
                    </div>
                </div>

            <div class="jumbotron px-2 py-4 mb-4 text-dark" style="background-color: #E9ECEF">
                <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <img src="img/iht.jpeg" alt="upacara" class="img-fluid" width="300" height="300">
                            </div>
                            <div class="col-9 my-auto">
                                <p style="font-size: 20px; font-weight:500; color:#31708F;">In House Training (IHT) Impelementasi Kurikulum Merdeka</p>
                                <p style="font-size: 17px; font-weight:450;">Kegiatan upacara hari kamis pagi tanggal 17 Agustus Tahun 2022</p>
                            </div>
                            <!-- <a href="#" style="text-decoration: none; font-weight:700; color:red;">lanjutan>></a> -->
                        </div>
                    </div>
                </div>

            <div class="jumbotron px-2 py-4 mb-4 text-dark" style="background-color: #E9ECEF">
                <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <img src="img/merdeka.jpeg" alt="upacara" class="img-fluid" width="300" height="300">
                            </div>
                            <div class="col-9 my-auto">
                                <p style="font-size: 20px; font-weight:500; color:#31708F;">77 Tahun Indonesia Merdeka</p>
                                <p style="font-size: 17px; font-weight:450;">Kegiatan upacara hari kamis pagi tanggal 17 Agustus Tahun 2022 untuk memperingati kemerdekaan Indonesia</p>
                            </div>
                            <!-- <a href="#" style="text-decoration: none; font-weight:700; color:red;">lanjutan>></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
<!-- <div class="recent-events">
    <h2 style="margin-left: 500px; margin-top: 30px; margin-bottom: 30px; font-weight: bold;">Events</h2>
        <div class="event-post">
            <a href="https://smkn2trenggalek.sch.id/77-2/"><img width="150" height="150" src="https://smkn2trenggalek.sch.id/wp-content/uploads/2022/08/WhatsApp-Image-2022-08-16-at-3.35.27-PM-150x150.jpeg" class="alignleft wp-post-image" alt="" loading="lazy" srcset="https://smkn2trenggalek.sch.id/wp-content/uploads/2022/08/WhatsApp-Image-2022-08-16-at-3.35.27-PM-150x150.jpeg 150w, https://smkn2trenggalek.sch.id/wp-content/uploads/2022/08/WhatsApp-Image-2022-08-16-at-3.35.27-PM-300x300.jpeg 300w, https://smkn2trenggalek.sch.id/wp-content/uploads/2022/08/WhatsApp-Image-2022-08-16-at-3.35.27-PM-1024x1024.jpeg 1024w, https://smkn2trenggalek.sch.id/wp-content/uploads/2022/08/WhatsApp-Image-2022-08-16-at-3.35.27-PM-768x768.jpeg 768w, https://smkn2trenggalek.sch.id/wp-content/uploads/2022/08/WhatsApp-Image-2022-08-16-at-3.35.27-PM-270x270.jpeg 270w, https://smkn2trenggalek.sch.id/wp-content/uploads/2022/08/WhatsApp-Image-2022-08-16-at-3.35.27-PM.jpeg 1080w" sizes="(max-width: 150px) 100vw, 150px" /></a>
    <h3><a href="https://smkn2trenggalek.sch.id/77-2/" style="padding-right: 140px;">77 Tahun Indonesia Merdeka</a></h3>
        <p></p>
    </div> 

    <div class="event-post">
        <a href="https://smkn2trenggalek.sch.id/dies-natalis-ke-18-smkn-2-trenggalek/"><img width="150" height="150" src="https://smkn2trenggalek.sch.id/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-30-at-9.36.27-AM-150x150.jpeg" class="alignleft wp-post-image" alt="" loading="lazy"/></a>
    <h3><a href="https://smkn2trenggalek.sch.id/dies-natalis-ke-18-smkn-2-trenggalek/" style="padding-right: 40px;">Dies Natalis ke-18 SMKN 2 Trenggalek</a></h3>
        <p style="margin-left: 200px; margin-top: -40px"></p>
    </div> 

    <div class="event-post">
        <a href="https://smkn2trenggalek.sch.id/in-house-training-iht-impelemtasi-kurikulum-merdeka/"><img width="150" height="150" src="https://smkn2trenggalek.sch.id/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-12-at-15.16.51-150x150.jpeg" class="alignleft wp-post-image" alt="" loading="lazy" /></a>
    <h3><a href="https://smkn2trenggalek.sch.id/in-house-training-iht-impelemtasi-kurikulum-merdeka/" style="padding-right: 90px;">In House Training (IHT) <br>Impelementasi Kurikulum Merdeka</a></h3>
        <p></p>
    </div> 
</div> -->

@endsection

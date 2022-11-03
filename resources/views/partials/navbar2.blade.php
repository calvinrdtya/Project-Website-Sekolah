    
    <style>
  .jumbotron {
    background: url(../img/smk.jpg);
    background-size: cover;
    height: 540px;
    position: relative;
    z-index: -1;
}
.jumbotron::after {
    content: '';
    display: block;
    position: absolute;
    width: 100%;
    height: 50%;
    background-image: linear-gradient(to top, rgba(0,0,0,1), rgba(0,0,0,0));
    bottom: 0;
}
.jumbotron .container {
    color: white;
    position: relative;
    z-index: 1;
}
.jumbotron .display-4 {
    font-weight: 200;
    font-size: 2.6em;
    margin-top: 100px;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
    margin-bottom: 50px;
}
.jumbotron .display-4 span {
    font-weight: 500;
}
.info-panel {
    height: 130px;
    background-color: white;
    padding: 30px;
    margin-top: -100px;
    border-radius: 12px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.6);
}
.info-panel img {
    margin-top: -10px;
    width: 90px; 
    height: 90px; 
    border-radius: 70px;
}
.info-panel h4 {
    font-size: 16px;
    font-weight: bold;
    margin-top: 10px;
    text-transform: uppercase;
}
.info-panel p {
    font-size: 14px;
    font-weight: lighter;
    color: #acacac;
}
    </style>
    
    <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a class="navbar-brand" href="#">HealthTIFY</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="shop.html">Shop</a>
                    <a class="nav-item nav-link" href="login.html">Login</a>
                    <a class="nav-item nav-link" href="registrasi.html">Registration</a>
                  </div>
                </div>
              </div>
            </nav>

          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Di Dalam <span>Tubuh</span> yang<span> Sehat</span><br>Terdapat<span> Jiwa </span>yang <span>Kuat</span></h1>
            </div>
          </div>


          <!-- <div class="container">
              <div class="row justify-content-center">
                <div class="col-10 info-panel">
                  <div class="row">
                    <div class="col-sm">
                      <img src="img/blog.webp" alt="Employee" class="img-fluid float-left">
                        <a class="navbar-brand1" href="#">Artikel</a>
                        <p>Klik untuk informasi lebih lanjut</p>
                    </div>
                  <div class="col-sm">
                    <img src="img/toko2.webp" alt="HiRes" class="img-fluid float-left">
                      <a class="navbar-brand1" href="shop.html">Toko Kesehatan</a>
                      <p>Klik untuk informasi lebih lanjut</p>
                    </div>
                  <div class="col-sm">
                    <img src="img/event.webp" alt="Security" class="img-fluid float-left">
                      <a class="navbar-brand1" href="#">Event</a>
                      <p>Klik untuk informasi lebih lanjut</p>
                    </div>
                  </div>
                </div>
              </div> -->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="<?= base_url("assets/img/sbrlogo.png") ?>" rel="icon">
  <link href="<?= base_url("assets/img/sbrlogo.png") ?>" rel="apple-touch-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="<?php echo base_url("assets/css/main.css") ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/css/carousel.css") ?>" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>
h1, p a {font-family: 'Poppins';}
</style>

  <title>Sabar Tali - Beranda</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light"><br><br><br>
    <div class="container">
      <a class="navbar-brand" href="<?= base_url("Home/Beranda") ?>">
        <img src="<?= base_url("assets/img/sbrlogo.png") ?>" width="50" height="30" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" style="font-family: Poppins" href="<?= base_url("Home/Beranda") ?>">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-family: Poppins" href="<?= base_url("Home/TentangKami") ?>">Tentang Kami</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="font-family: Poppins" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Produk
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= base_url("Home/Rafia") ?>" style="font-family: Poppins">Tali Rafia</a>
              <a class="dropdown-item" href="<?= base_url("Home/DN") ?>" style="font-family: Poppins">Tali DN & Tali RIS</a>
              <a class="dropdown-item" href="<?= base_url("Home/Tikar") ?>" style="font-family: Poppins">Tikar</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron5 jumbotron-fluid">
    <div class="container">
      <div class="content-holder">
        <h1 class="display-4" style="font-family: Helmet">SABAR TALI</h1>
      </div>
    </div>
  </div>

  <!-- Tentang Kami -->
  <div class="section-4-container section-container jumbotron6">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-lg-6 section-4 section-description wow fadeInLeftBig">
          <img class="card-img-top" src="<?= base_url("assets/img/bg3.png") ?>" alt="Card image cap">
        </div>
        <div class="col-sm-8 col-lg-6 section-4 section-description wow fadeInLeftBig">
          <h1 style="text-align: center">Tentang Kami</h1>
          <p style="text-align: justify">
            Sabar Tali merupakan perusahaan supplier tangan pertama yang bergerak di bidang industri tali.
            Telah berdiri sejak tahun 1990, Sabar Tali telah membantu puluhan UMKM untuk mengembangkan usahanya.
            Kami siap membantu usahamu untuk mendapatkan kualitas dan harga tali terbaik!
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- row produk -->
  
<div style="background-image: url('<?= base_url("assets/img/bg4.png") ?>');">
  <div class="container">
    <br>
  <h3 style="text-align:center">PRODUK</h3>
    <div class="row">
      <div class="col-sm-3 col-lg-3 d-flex flex-column">
        <div class="card">
          <img class="card-img-top" src="<?= base_url("assets/img/tikar/birutkr.png") ?>" alt="Card image cap">
          <div class="card-body d-flex flex-column">
            <h4>TIKAR</h4>
            <p>Tikar lipat tenun produksi sabar subur memiliki ukuran 2m x 3m</p>
            <a class="btn btn-outline-dark" href="<?= base_url("Home/Tikar") ?>" style="font-family: Poppins">Selengkapnya</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3 col-lg-3 d-flex flex-column">
        <div class="card">
          <img class="card-img-top" src="<?= base_url("assets/img/rafia/rafia_merah.png") ?>" alt="Card image cap">
          <div class="card-body d-flex flex-column">
            <h4>RAFIA</h4>
            <p>Produk rafia yang diproduksi oleh sabar subur memiliki berat 20kg - 30kg</p>
            <a class="btn btn-outline-dark" href="<?= base_url("Home/Rafia") ?>" style="font-family: Poppins">Selengkapnya</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3 col-lg-3 d-flex flex-column">
        <div class="card">
          <img class="card-img-top" src="<?= base_url("assets/img/dn/b2.png") ?>" alt="Card image cap">
          <div class="card-body d-flex flex-column">
            <h4>TALI DN</h4>
            <p>Tali tampar produksi Sabar Subur bahan tali rafia dengan ukuran 2mm-30mm</p>
            <a class="btn btn-outline-dark" href="<?= base_url("Home/DN") ?>" style="font-family: Poppins">Selengkapnya</a>
          </div>
        </div>
      </div>

      <div class="col-sm-3 col-lg-3 d-flex flex-column">
        <div class="card">
          <img class="card-img-top" src="<?= base_url("assets/img/ris.png") ?>" alt="Card image cap">
          <div class="card-body d-flex flex-column">
            <h4>TALI RIS</h4>
            <p>Tali Ris produksi Sabar Subur bahan polytiline ukuran 1mm - 2.5mm</p>
            <a class="btn btn-outline-dark " href="<?= base_url("Home/DN") ?>" style="font-family: Poppins">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- Carousel Slide

<div style="background-image: url('<?= base_url("assets/img/bg4.png") ?>');">
  <div class="top-content">
      <div id="carousel-example" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
          <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
            <div class="card shadow p-3 mb-5 bg-white rounded mx-auto" style="margin-top: 10px;">
              <img class="card-img-top"
                  src="<?= base_url("assets/img/tikar/birutkr.png") ?>" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Tikar</h4>
                <p class="card-text">Tikar lipat tenun produksi sabar subur memiliki ukuran 2m x 3m</p>
                <a class="btn btn-outline-dark">Selengkapnya</a>
              </div>
            </div>
					</div>
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card shadow p-3 mb-5 bg-white rounded mx-auto" style="margin-top: 10px;">
                <img class="card-img-top"
                    src="<?= base_url("assets/img/rafia/rafia_merah.png") ?>" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Rafia</h4>
                  <p class="card-text">Produk rafia yang diproduksi oleh sabar subur memiliki berat 20kg - 30kg</p>
                  <a class="btn btn-outline-dark">Selengkapnya</a>
                </div>
              </div>
					</div>
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card shadow p-3 mb-5 bg-white rounded mx-auto" style="margin-top: 10px;">
                <img class="card-img-top"
                    src="<?= base_url("assets/img/dn/2.png") ?>" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Tali DN</h4>
                  <p class="card-text">Tali tampar produksi Sabar Subur bahan tali rafia  dengan ukuran 2mm-30mm</p>
                  <a class="btn btn-outline-dark">Selengkapnya</a>
                </div>
              </div>
					</div>
					<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card shadow p-3 mb-5 bg-white rounded mx-auto" style="margin-top: 10px;">
                <img class="card-img-top"
                    src="<?= base_url("assets/img/ris.png") ?>" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Tali Ris</h4>
                  <p class="card-text">Tali Ris produksi Sabar Subur bahan polytiline ukuran 1mm - 2.5mm</p>
                  <a class="btn btn-outline-dark">Selengkapnua</a>
                </div>
              </div>
					</div>
        </div>
        <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
      </div>
  </div>
</div>-->
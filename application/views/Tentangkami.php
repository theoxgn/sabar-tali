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

  <title>Sabar Tali - Tentang Kami</title>
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
            <a class="nav-link" style="font-family: poppins" href="<?= base_url("Home/Beranda") ?>">Beranda </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" style="font-family: poppins" href="<?= base_url("Home/TentangKami") ?>">Tentang Kami <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="font-family: poppins" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Produk
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= base_url("Home/Rafia") ?>" style="font-family: poppins">Tali Rafia</a>
              <a class="dropdown-item" href="<?= base_url("Home/DN") ?>" style="font-family: poppins">Tali DN & Tali RIS</a>
              <a class="dropdown-item" href="<?= base_url("Home/Tikar") ?>" style="font-family: poppins">Tikar</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
      <li data-target="#carousel" data-slide-to="3"></li>
      <li data-target="#carousel" data-slide-to="4"></li>
      <li data-target="#carousel" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?= base_url("assets/img/tentangkami/slide1.png") ?>" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url("assets/img/tentangkami/slide2.png") ?>" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url("assets/img/tentangkami/slide3.png") ?>" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url("assets/img/tentangkami/slide4.png") ?>" alt="fourd slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url("assets/img/tentangkami/slide5.png") ?>" alt="five slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev" style="margin-top: 30px">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <br>
  <div class="container mt-3">
    <div class="row">
      <div class="col-lg">
        <p style="font-weight: bold;">Lokasi</p>
        <div class="map-responsive">
          <iframe src="https://maps.google.com/maps?q=Jl.Bungurasih%20Barat%20No.1&t=&z=13&ie=UTF8&iwloc=&output=embed" width="350" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-lg">
        <p style="font-weight: bold;">Company</p>
        <div class="container">
          <div class="row">
            <a class="font-weight-light" href="<?= base_url("Home/Beranda") ?>" style="color:black">Beranda</a>
          </div>
          <div class="row mt-2">
            <a class="font-weight-light" href="<?= base_url("Home/TentangKami") ?>" style="color:black">Tentang Kami</a>
          </div>
        </div>
      </div> <br>
        <div class="col-lg">
          <p style="font-weight: bold;">Social Media</p>
          <div class="container">
            <div class="row">
              <a class="font-weight-light" href="https://api.whatsapp.com/send?phone=6287754005337" style="color:black">Whatsapp</a>
            </div>
            <div class="row mt-2">
              <a class="font-weight-light" href="mailto:sabarsuburtali@gmail.com" style="color:black">Email</a>
            </div>
            <div class="row mt-2">
              <a class="font-weight-light" href="https://www.instagram.com/sabartali/" style="color:black">Instagram</a>
            </div>
          </div>
        </div>
      <div class="col-lg">
        <p style="font-weight: bold;">Contact Us</p>
        <div class="container">
          <div class="row">
            <a href="mailto:sabarsuburtali@gmail.com" style="color:black"><img src="<?= base_url("assets/img/mail.png") ?>" style="width:30px;height:30px;" alt="" srcset="">  Email</a> 
          </div>
          <div class="row mt-2">
            <a href="https://api.whatsapp.com/send?phone=6287754005337" style="color:black"><img src="<?= base_url("assets/img/whatsapp.png") ?>" style="width:30px;height:30px;" alt="" srcset="" href="">  Whatsapp</a> 
          </div>
          <div class="row mt-2">
            <a href="https://www.instagram.com/sabartali/" style="color:black"><img src="<?= base_url("assets/img/instagram.png") ?>" style="width:30px;height:30px;" alt="" srcset="" href="#">  Instagram</a> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="container mt-3">
    <footer>
      <h4>Sabar Tali</h4>
    </footer>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="<?= base_url("assets/js/mains.js") ?>"></script>
  <script src="<?= base_url("assets/js/scripts.js") ?>"></script>
</body>

</html>
<html>
    <head>
        <title>USM Universitas Pembangunan Jsys</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url('asset/css-usm.css')?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/yourcode.js"></script>
        <script src="https://kit.fontawesome.com/9fa27ba088.js" crossorigin="anonymous"></script>
        <style>
        .carousel-inner img {
    width: 60%;
    height: 40%;
    margin-left : 100px;
        }
        .footer {
            
            left: 0;
            bottom: 0;
            width: 100%;
            height:10%;
            background-color:green;
            color: white;
            text-align: center;
        }
   
        </style>
        
    </head>
<body>

<div class="jumbotron bg-success" style= margin-left:-17%>
  <div class="container">
     <div> <img src="<?= base_url('asset/gambar/1.png')?> " class="rounded float-left"   > </div>
    <h1 class="text-light text-center" class="">Universitas Pembangunan Jaya</h1>      
    <p class="text-light text-center">Selamat datang calon mahasiswa baru.</p>
  </div>
</div>

<nav class="navbar navbar-expand-sm bg-light" style=margin-top:-2%>

<!-- Links -->
<ul class="navbar-nav ">
  <li class="nav-item">
    <a class="nav-link" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Prodi</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">About</a>
  </li>
</ul>

</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="gambar/corusel1.jpg"  width="" height="3000">
    </div>

    <div class="carousel-item">
      <img src="gambar/burung.jpg" alt="Chicago" width="" height="500">
    </div>

    <div class="carousel-item">
      <img src="1.png" alt="New York" width="1100" height="500"> 
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br><br><br>
<h2>Informasi Prodi</h2>
<br>
<br>

<div class="container">
  <div class="row">

      <div class="col">
          <div class="card" style="width:200px">
            <img class="card-img-top1" src="<?= base_url('asset/gambar/inf.jpg')?>" alt="Card image" style="width:100%">
            <div class="card-body text-center" >
              <h4 class="card-title">Informatika</h4>
              <p class="card-text">FAKULTAS TEKNOLOGI DAN DESAIN</p>
              <a href="<?= base_url('infoprodi/inf');?> " class="btn btn-primary">See Profile</a>
          

            </div>
          </div>
        </div>

        <div class="col">
          <div class="card" style="width:200px">
            <img class="card-img-top" src="<?= base_url('asset/gambar/psii.png')?>" alt="Card image" style="width:100%">
            <div class="card-body text-center">
              <h4 class="card-title">Psikologi</h4>
              <p class="card-text">FAKULTAS HUMANIORA DAN BISNIS</p>
              <a href="<?= base_url('infoprodi/psi')?>" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

      <div class="col">
        <div class="card" style="width:200px">
            <img class="card-img-top" src="<?= base_url('asset/gambar/mjn.png')?>" alt="Card image" style="width:100%">
           <div class="card-body text-center">
              <h4 class="card-title">Management</h4>
              <p class="card-text">FAKULTAS HUMANIORA DAN BISNIS</p>
              <a href="<?= base_url('infoprodi/mnj')?>" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

        <div class="col">
        <div class="card" style="width:200px">
            <img class="card-img-top" src="<?= base_url('asset/gambar/sif.png')?>" alt="Card image" style="width:100%">
           <div class="card-body text-center">
              <h4 class="card-title">Sif </h4>
              <p class="card-text">FAKULTAS TEKNOLOGI DAN DESAIN</p>
              <a href="<?= base_url('infoprodi/sif')?>" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
  <div>
            <br><br>

  <div class="row">

  <div class="col">
          <div class="card" style="width:200px">
            <img class="card-img-top1" src="<?= base_url('asset/gambar/akt.png')?>" alt="Card image" style="width:100%">
            <div class="card-body text-center" >
              <h4 class="card-title">Akuntansi</h4>
              <p class="card-text">FAKULTAS HUMANIORA DAN BISNIS</p>
              <a href="<?= base_url('infoprodi/akt')?>" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card" style="width:200px">
            <img class="card-img-top" src="<?= base_url('asset/gambar/ars.png')?>" alt="Card image" style="width:100%">
            <div class="card-body text-center">
              <h4 class="card-title">Arsitektur</h4>
              <p class="card-text">FAKULTAS TEKNOLOGI DAN DESAIN</p>
              <a href="<?= base_url('infoprodi/arsi')?>" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

      <div class="col">
        <div class="card" style="width:200px">
            <img class="card-img-top" src="<?= base_url('asset/gambar/dkv1.png')?>" alt="Card image" style="width:100%">
           <div class="card-body text-center">
              <h4 class="card-title">DKV</h4>
              <p class="card-text">FAKULTAS TEKNOLOGI DAN DESAIN</p>
              <a href="<?= base_url('infoprodi/dkv')?>" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

        <div class="col">
        <div class="card" style="width:200px">
            <img class="card-img-top" src="<?= base_url('asset/gambar/dp1.jpg')?>" alt="Card image" style="width:100%">
           <div class="card-body text-center">
              <h4 class="card-title">Desain Produk</h4>
              <p class="card-text">FAKULTAS TEKNOLOGI DAN DESAIN</p>
              <a href="<?= base_url('infoprodi/dp')?>" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>

  <div>
  <br><br>
 

  <div class="row">
    <div class="col">
          <div class="card" style="width:200px">
            <img class="card-img-top1" src="<?= base_url('asset/gambar/kom.png')?>" alt="Card image" style="width:100%">
            <div class="card-body text-center" >
              <h4 class="card-title">Komunikasi</h4>
              <p class="card-text">FAKULTAS HUMANIORA DAN BISNIS</p>
              <a href="<?= base_url('infoprodi/ilkom')?>" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        

        <div class="col">
          <div class="card" style="width:200px">
            <img class="card-img-top" src="<?= base_url('asset/gambar/tsp.png')?>" alt="Card image" style="width:100%">
            <div class="card-body text-center">
              <h4 class="card-title">Teknik Sipil</h4>
              <p class="card-text">FAKULTAS TEKNOLOGI DAN DESAIN</p>
              <a href="<?= base_url('infoprodi/teksip')?>" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
  <div>
  <br><br>
  
             
</div>
</div>
<br><br>

<div class="jumbotron">
<div class="row" style="text-align: center">
        <div class="col">
  <a href="<?= base_url('/mahasiswa/daf_user')?>" class='btn btn-outline-info btn-lg center-block'>Mulai Ujian</a>
  </div>
  </div>
  </div>



    <!-- Footer -->
<footer class="page-footer font-small blue pt-3">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase">USM Universitas Pembangunan Jaya</h5>
      <p>Here you can use rows and columns to organize your footer content.</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Contact US</h5>

      <ul class="list-unstyled">
        <li>
        <i class="fas fa-search-location"></i>
          <a>Jl Cendrawasih Raya Blok/P Bintaro Jaya, Sawah Baru, Ciputat, Tangerang Selatan 15413</a>
        </li>
        <li>
        <i class="fas fa-phone-volume"></i>
          <a >(021) 7455555- (021) 29045405</a>
        </li>
        <li>
        <i class="fas fa-camera"></i> 
          <a>(021) 29861525</a>
        </li>
      
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Sosial Media</h5>

      <ul class="list-unstyled">
        <li>
        <i class="fab fa-facebook-square"></i>
          <a href="https://www.facebook.com/universitas.pembangunan.jaya">Facebook</a>
        </li>
        <li>
        <i class="fab fa-twitter-square"></i>
          <a href="https://twitter.com/upj_bintaro!">Twitter </a>
        </li>
        <li>
        <i class="fab fa-instagram-square"></i>
          <a href="https://www.instagram.com/upj_bintaro/">Instagram</a>
        </li>
        <li>
        <i class="fab fa-youtube-square"></i>
          <a href="https://www.youtube.com/user/UPJBIntaro">Youtube </a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/"> Universitas Pembangunan Jaya</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->


</body>
</html>
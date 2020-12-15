<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatika</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    
</head>
<body>
  
    
    <div class="jumbotron bg-success" style= margin-left:-17%>
  <div class="container">
     <div> <img src="<?= base_url('asset/gambar/1.png')?>" class="rounded float-left"   > </div>
    <h1 class="text-light text-center" class="">Universitas Pembangunan Jaya</h1>      
    <p class="text-light text-center">Selamat datang calon mahasiswa baru.</p>
  </div>
</div>

<nav class="navbar navbar-expand-sm bg-light" style=margin-top:-2%>

<!-- Links -->
<ul class="navbar-nav ">
  <li class="nav-item">
    <a class="nav-link" href="/infoprodi/">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Prodi</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">About</a>
  </li>
</ul>

</nav>

<div class="jumbotron">
<div class="container">

<div> <img src="<?= base_url('asset/gambar/kom.png')?>" class="rounded float-left" style= margin-top:-5.5%   > </div>
<br><br>
<h1 class="text-black text-center">Komunikasi</h1> 
</div>
</div>

<?php ?>

<div class="container">
<h5><?= $informasi['isi']; ?> </h5>


</div>


</body>

  
     <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </body>
</html>



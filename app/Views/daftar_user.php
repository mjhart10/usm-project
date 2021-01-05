<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Website Example</title>
    <link rel="stylesheet" href="mycss.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body>


    <div class="jumbotron bg-success" style=margin-left:-17%>
        <div class="container">
            <div> <img src="<?= base_url('asset/gambar/1.png')?>" class="rounded float-left"> </div>
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

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="about.php">About ME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="education.php">Pendidikan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gallery.php">Gallery</a>
            </li>

        </ul>




    </div>

    </nav>
    <br><br>


    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="img3"> <img src=> </div>
            <div class="text-center">
                <div class="text2">
                    <h1 class="display-4">Pendaftaran Online</h1>
                </div>
            </div>

        </div>

    </div>
    </div>





    <div class="container" style="margin-top:30px">
            
                <div class="jumbotron">

                    <h2 class="font-weight-bold">Pendaftaran Online </h2>

                    <div class="row">

                    <div class="col">
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width:100%"></div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="progress">
                        <div class="progress-bar bg-info" style="width:100%"></div>
                    </div>
                    </div>
                    
                    <div class="col">
                    <div class="progress">
                        <div class="progress-bar bg-danger" style="width:100%"></div>
                    </div>
                    </div>
                    
                    </div>
                    <br>


                    <form action="<?= base_url('/mahasiswa/createmhs'); ?>" method="POST">

                        <div class="form-group">
                            <label for="email">Nama Calon Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" placeholder="" id="">
                        </div>

                        <p>Pilih Prodi</p>
                        <h4><select name="pilih_prodi">
                        <option value="Informatika">Informatika</option>
                        <option value="Komunikasi">Komunikasi</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Desain Produk">Desain Produk</option>
                        <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                        <option value="Psikologi">Psikologi</option>
                        <option value="Manajemen">Manajemen</option>
                        <option value="Akuntansi">Akuntansi</option>
                        <option value="Arsitektur">Arsitektur</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        </select>
                        <br>
                        <br>

                        <div class="form-group">
                            <label for="text">Tempat & Tanggal Lahir</label>
                            <input type="text" name="ttl" class="form-control" placeholder="" id="">
                        </div>

                        <div class="form-group">
                            <label for="text">NIK (Nomor Induk Kependudukan)</label>
                            <input type="text" name="nik" class="form-control" placeholder="" id="">
                        </div>

                        <div class="form-group">
                            <label for="text">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" placeholder="" id="">
                        </div>

                        <div class="form-group">
                            <label for="text">Kode Pos</label>
                            <input type="text" name="kode_pos" class="form-control" placeholder="" id="">
                        </div>

                        <div class="form-group">
                            <label for="text">No Handphone</label>
                            <input type="text" name="nohp" class="form-control" placeholder="" id="">
                        </div>

                        <div class="form-group">
                            <label for="text">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="" id="">
                        </div>

                        <div class="form-group">
                            <label for="text">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" class="form-control" placeholder="" id="">
                        </div>

                        <div class="form-group">
                            <label for="comment">Alamat</label>
                            <textarea class="form-control" name="alamat" rows="5" id="comment"></textarea>
                        </div> 

                       


                        <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Simpan">
                        <!--<a href="<?= base_url('/mahasiswa/rule') ?>" class="btn btn-danger">Mulai Ujian</a>-->
                    </form>


                </div><br>

    </div>

    


    <div class="jumbotron text-center bg-success" style="margin-bottom:0">
        <p style="color:white">Ujian Saringan Masuk (USM) | Universitas Pembangunan Jaya 2020</p>
    </div>
    </div>
</body>

</html>
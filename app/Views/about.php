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
                    <h1 class="display-4">About USM</h1>
                </div>
            </div>

        </div>

    </div>
    </div>

    <div class="container" style="margin-top:30px">
            
                <div class="jumbotron">

                    <h2 class="font-weight-bold" style="text-align: center">About USM </h2>


                  

                    <br>
                    <br>

                   
                    <dd style="">Proses USM adalah sebuah proses yang penting saat calon mahasiswa baru masuk kampus. Namun, di UPJ proses USM masih dilakukan secara manual, sehingga proses USM dirasa membuang banyak waktu, khususnya bagi calon mahasiswa yang berada di luar kota Tangerang. Oleh sebab itu, diperlukan sebuah sistem yang dapat memfasilitasi mahasiswa baru dalam melakukan proses Ujian Saringan Masuk, yaitu sebuah aplikasi berbasis website. Dengan adanya aplikasi berbasis web ini, proses Ujian Saringan Masuk bisa mempermudah calon mahasiswa baru untuk mendaftar ke UPJ, karena proses USM menjadi lebih mudah, dan efisien.</dd>
                  

                   
                  

                </div><br>

    </div>
    

    


    <div class="jumbotron text-center bg-success" style="margin-bottom:0">
        <p style="color:white">Ujian Saringan Masuk (USM) | Universitas Pembangunan Jaya 2020</p>
    </div>
    </div>

</body>

</html>
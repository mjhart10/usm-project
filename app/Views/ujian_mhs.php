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
                    <h1 class="display-4">Selamat Mengerjakan Ujian :)</h1>
                </div>
            </div>

        </div>

    </div>
    </div>

    <div class="container" style="margin-top:30px">

    <?php if($bank_soal): ?>
        <?php foreach ($bank_soal as $soal): ?>
        <div class="jumbotron">
        

            <tr>
                  <td width="17"><font color="#000000"><?= $soal['no_soal']; ?>.</font></td>
                  <td width="430"><font color="#000000"><?= $soal['isi_soal']; ?></font></td>
                  <br>

            </tr>
            
            <br>
            <form action="<?= base_url('hasilujian/store'); ?>" method="POST">
                <div class="radio">
                    <label>
                        <input type="radio" name="jawaban[<?= $soal['no_soal']; ?>]" id="optionsRadios2" value="A"
                            required /><b> </b><?= $soal['option_a']; ?>
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="jawaban[<?= $soal['no_soal']; ?>]" id="optionsRadios2" value="B"
                            required /><b> </b><?= $soal['option_b']; ?>
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="jawaban[<?= $soal['no_soal']; ?>]" id="optionsRadios2" value="C"
                         required /><b> </b><?=$soal['option_c']; ?>
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="jawaban[<?= $soal['no_soal']; ?>]" id="optionsRadios2" value="D"
                             required /><b> </b><?=$soal['option_d']; ?>
                    </label>
                </div>
               
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
                <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Simpan">
                <br>
            </form>
            <br>
            </div>




            <div class="jumbotron text-center bg-success" style="margin-bottom:0">
        <p style="color:white">Ujian Saringan Masuk (USM) | Universitas Pembangunan Jaya 2020</p>
    </div>
    </div>

</body>

</html>
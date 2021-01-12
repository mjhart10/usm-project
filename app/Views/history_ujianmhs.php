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
                    <h1 class="display-4">History Ujian</h1>
                </div>
            </div>

        </div>

    </div>
    </div>
		
			<div class="container mt-5">

                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <table class="table table-striped" id="tableuser">
                                <thead>
                                <tr>
                                    <th>Jawaban 1</th>
                                    <th>Jawaban 2</th>
                                    <th>Jawaban 3</th>
                                    <th>Jawaban 4</th>
                                    <th>Jawaban 5</th>
                                    <th>Jawaban 6</th>
                                    <th>Jawaban 7</th>
                                    <th>Jawaban 8</th>
                                    <th>Jawaban 9</th>
                                    <th>Jawaban 10</th>
                                    <th>Jawaban 11</th>
                                    <th>Jawaban 12</th>
                                    <th>Jawaban 13</th>
                                    <th>Jawaban 14</th>
                                    <th>Jawaban 16</th>
                                    <th>Jawaban 17</th>
                                    <th>Jawaban 18</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($hasil) : ?>
                                    <?php foreach ($hasil as $jwb) : ?>
                                        <tr>
                                            <td><?= $jwb['jawaban1']; ?></td>
                                            <td><?= $jwb['jawaban2']; ?></td>
                                            <td><?= $jwb['jawaban3']; ?></td>
                                            <td><?= $jwb['jawaban4']; ?></td>
                                            <td><?= $jwb['jawaban5']; ?></td>
                                            <td><?= $jwb['jawaban6']; ?></td>
                                            <td><?= $jwb['jawaban7']; ?></td>
                                            <td><?= $jwb['jawaban8']; ?></td>
                                            <td><?= $jwb['jawaban9']; ?></td>
                                            <td><?= $jwb['jawaban10']; ?></td>
                                            <td><?= $jwb['jawaban11']; ?></td>
                                            <td><?= $jwb['jawaban12']; ?></td>
                                            <td><?= $jwb['jawaban13']; ?></td>
                                            <td><?= $jwb['jawaban14']; ?></td>
                                            <td><?= $jwb['jawaban16']; ?></td>
                                            <td><?= $jwb['jawaban17']; ?></td>
                                            <td><?= $jwb['jawaban18']; ?></td>
                                          
                                        </tr>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
		
		</div>

	</div>

	
    <div class="jumbotron text-center bg-success" style="margin-bottom:0">
        <p style="color:white">Ujian Saringan Masuk (USM) | Universitas Pembangunan Jaya 2020</p>
    </div>
    </div>

</body>

</html>
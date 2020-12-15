<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard - DWAdmin</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url('asset/vendors/bootstrap/css/bootstrap.css')?>">
    <!-- Style CSS (White)-->
    <link rel="stylesheet" href="<?= base_url('asset/css/White.css')?>">
    <!-- Style CSS (Dark)-->
    <link rel="stylesheet" href="<?= base_url('asset/css/Dark.css')?>">
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="<?= base_url('asset/vendors/fontawesome/css/all.css')?>">
    <!-- Icon LineAwesome CSS-->
    <link rel="stylesheet" href="<?= base_url('asset/vendors/lineawesome/css/line-awesome.min.css')?>">

</head>

<body>

    <!--Topbar -->
    <div class="topbar transition">
        <div class="bars">
            <button type="button" class="btn transition" id="sidebar-toggle">
                <i class="las la-bars"></i>
            </button>
        </div>
        <div class="menu">

            <ul>

                <li>
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" title="Dark Or White" />
                            <div class="slider round"></div>
                        </label>
                    </div>
                </li>

                <li>
                    <a href="notifications.html" class="transition">
                        <i class="las la-bell"></i>
                        <span class="badge badge-danger notif">5</span>
                    </a>
                </li>

                <li>
                    <div class="dropdown">
                        <div class="dropdown-toggle" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img src="assets/images/avatar/avatar-2.png" alt="Profile">
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownProfile">

                            <a class="dropdown-item" href="profile.html">
                                <i class="las la-user mr-2"></i> My Profile
                            </a>

                            <a class="dropdown-item" href="activity-log.html">
                                <i class="las la-list-alt mr-2"></i> Activity Log
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="signin.html">
                                <i class="las la-sign-out-alt mr-2"></i> Sign Out
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--Sidebar-->
    <div class="sidebar transition overlay-scrollbars">
        <div class="logo">
            <h2 style="font-weight: 700;" class="mb-0">DW<span style="font-weight: 500;">Admin</span></h2>
        </div>

        <div class="sidebar-items">
            <div class="accordion" id="sidebar-items">
                <ul>

                    <p class="menu">Apps</p>

                    <li>
                        <a href="index.html" class="items">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>Dashoard</span>
                        </a>
                    </li>


                    <p class="menu">Pengaturan Master</p>

                    <li id="headingOne">
                        <a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas la-meh-blank"></i>
                            <span>Components</span>
                            <i class="fas la-angle-right"></i>
                        </a>
                    </li>
                    <div id="collapseOne" class="collapse submenu" aria-labelledby="headingOne"
                        data-parent="#sidebar-items">
                        <ul>

                            <li>
                                <a href="components-alerts.html">Master Mahasiswa</a>
                            </li>

                            <li>
                                <a href="components-badge.html">Master Marketing</a>
                            </li>

                            <li>
                                <a href="components-breadcrumb.html">Bank Soal</a>
                            </li>

                            <li>
                                <a href="components-buttons.html">Edit Admin</a>
                            </li>


                        </ul>
                    </div>


                    <p class="menu">Pages</p>

                    <li id="headingThree">
                        <a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#collapsefour"
                            aria-expanded="true" aria-controls="collapsefour">
                            <i class="fas la-folder"></i>
                            <span>Auth</span>
                            <i class="fas la-angle-right"></i>
                        </a>
                    </li>
                    <div id="collapsefour" class="collapse submenu" aria-labelledby="headingThree"
                        data-parent="#sidebar-items">
                        <ul>

                            <li>
                                <a href="signin.html">Login</a>
                            </li>

                            <li>
                                <a href="signup.html">Register</a>
                            </li>

                            <li>
                                <a href="forgot.html">Forgot Password</a>
                            </li>

                        </ul>
                    </div>

                    <li id="headingThree">
                        <a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#errros"
                            aria-expanded="true" aria-controls="errros">
                            <i class="las la-exclamation-circle"></i>
                            <span>Errors</span>
                            <i class="fas la-angle-right"></i>
                        </a>
                    </li>
                    <div id="errros" class="collapse submenu" aria-labelledby="headingThree"
                        data-parent="#sidebar-items">
                        <ul>

                            <li>
                                <a href="errors-405.html">405</a>
                            </li>

                            <li>
                                <a href="errors-404.html">404</a>
                            </li>

                            <li>
                                <a href="errors-403.html">403</a>
                            </li>

                        </ul>
                    </div>

                    <li>
                        <a href="Plugins.html" class="items">
                            <i class="fas la-pencil-ruler"></i>
                            <span>Plugins</span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </div>

    <div class="sidebar-overlay"></div>


    <!--Content Start-->
    <div class="content transition">
        <div class="container-fluid dashboard">
            <h3>Dashboard</h3>

            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <h2>Edit Marketing</h2>
                        <form action="<?= base_url('admin/mastermkt/store'); ?>" method="POST">
                            <input type="hidden" name="id_mhs" value="">
                            <div class="form-grup">
                                <label for="name">Nama Pengguna</label>
                                <br>
                                <input type="text" name="nama_pengguna" class="form-control" id="name"
                                    placeholder="Masukkan Nama" value="">
                                <br>
                            </div>
                            <div class="form-grup">
                                <label for="email">Username</label>
                                <br>
                                <input type="text" name="username" class="form-control" id="email"
                                    placeholder="Masukkan Username" value="">
                                <br>
                            </div>
                            <div class="form-grup">
                                <label for="email">Password</label>
                                <br>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Masukkan Password">
                                <br>
                            </div>

                            <div class="form-grup">
                                <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                                <a href="<?= base_url('admin/mastermhs/index')?>"
                                    class="btn btn-danger">Close</a>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Footer -->
    <div class="footer transition">
        <hr>
        <p>
            &copy; 2020 All Right Reserved by <a href="#" target="_blank">DWAdmin</a>
        </p>
    </div>

    <!-- Loader -->
    <div class="loader">
        <div class="spinner-border text-light" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="loader-overlay"></div>

    <!-- Library Javascipt-->
    <script src="<?= base_url('asset/vendors/bootstrap/js/jquery.min.js')?>"></script>
    <script src="<?= base_url('asset/vendors/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?= base_url('asset/vendors/bootstrap/js/popper.min.js')?>"></script>
    <script src="<?= base_url('asset/js/script.js')?>"></script>
</body>

</html>
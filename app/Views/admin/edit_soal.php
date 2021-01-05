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
							<input type="checkbox" id="checkbox"  title="Dark Or White"/>
							<div class="slider round"></div>
					  </label>
					</div>
				</li>

				

			<li>
				<div class="dropdown">
					<div class="dropdown-toggle" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">
						<img src="<?= base_url();?>/asset/images/avatar/avatar-2.png" alt="Profile">
					</div>
					<div class="dropdown-menu" aria-labelledby="dropdownProfile">
						
						<a class="dropdown-item" href="profile.html">
							<i class="las la-user mr-2"></i> My Profile
						</a>

						<a class="dropdown-item" href="activity-log.html">
							<i class="las la-list-alt mr-2"></i> Activity Log
						</a>
					 
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?= base_url('logout'); ?>">
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
			<h2 style="font-weight: 700;" class="mb-0">Usm<span style="font-weight: 500;">Admin</span></h2>
		</div>

		<div class="sidebar-items">
			<div class="accordion" id="sidebar-items">
				<ul>

					<p class="menu">Apps</p>

					<li>
						<a href="<?= base_url('admin/masteradmin/index')?>" class="items">
							<i class="fa fa-tachometer-alt"></i>
							<span>Dashoard</span>
						</a>
					</li>

					<?php if (in_groups('marketing')) :?>
					<p class="menu">Pengaturan Master</p>

					<li id="headingOne">
						<a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#collapseOne"
							aria-expanded="true" aria-controls="collapseOne">
							<i class="fas fa-users-cog"></i>
							<span>Components</span>
						
						</a>
					</li>
					<div id="collapseOne" class="collapse submenu" aria-labelledby="headingOne" data-parent="#sidebar-items">
						<ul>

							
							<li>
								<a href="<?= base_url('admin/mastermhs/index')?>" >Master Mahasiswa</a>
							</li>
							

							
						 </ul>
					</div>
					<?php endif; ?>

					<?php if (in_groups('admin')) :?>
					<p class="menu">Pengaturan Master</p>

					<li id="headingOne">
						<a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#collapseOne"
							aria-expanded="true" aria-controls="collapseOne">
							<i class="fas fa-users-cog"></i>
							<span>Components</span>
							
						</a>
					</li>
					<div id="collapseOne" class="collapse submenu" aria-labelledby="headingOne" data-parent="#sidebar-items">
						<ul>

							
							<li>
								<a href="<?= base_url('admin/mastermhs/index')?>" >Master Mahasiswa</a>
							</li>
							

							<li>
								<a href="<?= base_url('admin/mastermkt/index')?>" >Master Marketing</a>
							</li>

							<li>
								<a href="<?= base_url('admin/mastersoal/index')?>" >Bank Soal</a>
							</li>

							<li>
								<a href="<?= base_url('admin/masteradmin/view')?>" >Edit Admin</a>
							</li>

							
						 </ul>
					</div>
					<?php endif; ?>


					
					
					
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
                            <h2>Edit Mahasiwa</h2>
                            <form action="<?= base_url('Admin/MasterSoal/update'); ?>" method="POST">
                                <input type="hidden" name="no_soal" value="<?= $bank_soal['id_mhs'] ?>">
                                <div class="form-grup">
                                    <label for="name">isi soal</label>
                                    <br>
                                    <input type="text" name="isi_soal" class="form-control" id="name" placeholder="Masukkan Nama"
                                    value="<?= $bank_soal['isi_soal'] ?>">
                                    <br>
                                </div>
                                <div class="form-grup">
                                    <label for="name">Opsi a</label>
                                    <br>
                                    <input type="text" name="option_a" class="form-control" id="email" placeholder="Masukkan Email"
                                    value="<?= $bank_soal['option_a'] ?>">
                                    <br>
                                </div>
                                 <div class="form-grup">
                                    <label for="name">Opsi B</label>
                                    <br>
                                    <input type="text" name="option_b" class="form-control" id="contact_no" placeholder="Masukkan Nomor Contact"
                                    value="<?= $bank_soal['option_b'] ?>">
                                    <br>
                                </div>
                                <div class="form-grup">
                                    <label for="contact">Opsi C</label>
                                    <br>
                                    <input type="text" name="option_c" class="form-control" id="contact_no" placeholder="Masukkan Nomor Contact"
                                    value="<?= $bank_soal['option_c'] ?>">
                                    <br>
                                </div>
                                <div class="form-grup">
                                    <label for="name">Opsi D</label>
                                    <br>
                                    <input type="text" name="option_d" class="form-control" id="contact_no" placeholder="Masukkan Nomor Contact"
                                    value="<?= $bank_soal['option_d'] ?>">
                                    <br>
                                </div>
                                <div class="form-grup">
                                    <label for="name">Jawaban</label>
                                    <br>
                                    <input type="text" name="jawaban" class="form-control" id="contact_no" placeholder="Masukkan Nomor Contact"
                                    value="<?= $bank_soal['jawaban'] ?>">
                                    <br>
                                </div>
                                
                
                                <div class="form-grup">
                                    <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                                    <a href="<?= base_url('Admin/MasterMhs/index')?>" class="btn btn-danger">Close</a>
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
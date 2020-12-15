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
			<h2 style="font-weight: 700;" class="mb-0">DW<span style="font-weight: 500;">Admin</span></h2>
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
							<i class="fas la-meh-blank"></i>
							<span>Components</span>
							<i class="fas la-angle-right"></i>
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
							<i class="fas la-meh-blank"></i>
							<span>Components</span>
							<i class="fas la-angle-right"></i>
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
		
			<div class="row">

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-user-graduate icon-home bg-primary text-light"></i>
								</div>
								<div class="col-8">
									<h5>Mahasiswa</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-id-card  icon-home bg-success text-light"></i>
								</div>
								<div class="col-8">
									<p>Orders</p>
									<h5>3000</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-id-card   icon-home bg-info text-light"></i>
								</div>
								<div class="col-8">
									<p>Sales</p>
									<h5>5500</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-id-card  icon-home bg-danger text-light"></i>
								</div>
								<div class="col-8">
									<p>Employes</p>
									<h5>256</h5>
								</div>
							</div>
						</div>
					</div>

				</div>
		
				<div class="col-md-6">
					<div class="card">
						<h5 class="card-header">Projects</h5>
						<div class="card-body">
							<div class="row mb-1">
								<div class="col-6 mt-4">
									Server Migration
								</div>
								<div class="col-6 mt-4 text-right">
									20%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row mt-4 mb-1">
								<div class="col-6">
									Sales Tracking
								</div>
								<div class="col-6 text-right">
									40%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row mt-4 mb-1">
								<div class="col-6">
									Customer Database
								</div>
								<div class="col-6 text-right">
									60%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row mt-4 mb-1">
								<div class="col-6">
									Payout Details
								</div>
								<div class="col-6 text-right">
									80%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row mt-4 mb-1">
								<div class="col-6">
									Account Setup
								</div>
								<div class="col-6 text-right">
									Complete!
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
		
					<div class="row">
						<div class="col-6">
							<div class="card bg-primary">
								<div class="card-body">
									<p>Primary</p>
									<p class="mb-0">#3B82F6</p>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card bg-success">
								<div class="card-body">
									<p>Success</p>
									<p class="mb-0">#10B981</p>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card bg-info">
								<div class="card-body">
									<p>Info</p>
									<p class="mb-0">#36B9CC</p>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card bg-warning">
								<div class="card-body">
									<p class="text-light">Warning</p>
									<p class="text-light mb-0">#F59E0B</p>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card bg-danger">
								<div class="card-body">
									<p>Danger</p>
									<p class="mb-0">#EF4444</p>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card bg-secondary">
								<div class="card-body">
									<p>Secondary</p>
									<p class="mb-0">#858796</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card">
						<h5 class="card-header">Illustrations</h5>
						<div class="card-body">
							<img src="<?= base_url('asset/gambar/1.png')?>" class="img-fluid p-5">
							<p class="mb-4">Add some quality, svg illustrations to your project courtesy of <a
									href="https://undraw.co" target="_blank">unDraw</a>, a constantly updated collection of beautiful
								svg images that you can use completely free and without attribution!</p>
		
							<a href="https://undraw.co" target="_blank">Browse Illustrations on unDraw →</a>
						</div>
					</div>
		
					<div class="card">
						<h5 class="card-header">
							Development Approach
						</h5>
						<div class="card-body">
							<p class="mb-3 mt-4">DWAdmin makes extensive use of Bootstrap 4 utility classes in order to reduce CSS
								bloat and poor page performance. Custom CSS classes are used to create custom components and custom
								utility classes.</p>
							<p>Before working with this theme, you should become familiar with the Bootstrap framework, especially
								the utility classes.</p>
						</div>
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
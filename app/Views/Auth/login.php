<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Dashboard - DWAdmin</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href=" <?= base_url('') ; ?>/asset/vendors/bootstrap/css/bootstrap.css">
	<!-- Style CSS (White)-->
	<link rel="stylesheet" href=" <?= base_url('') ; ?>/asset/css/White.css">
	<!-- Style CSS (Dark)-->
	<link rel="stylesheet" href=" <?= base_url('') ; ?>/asset/css/Dark.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href=" <?= base_url('') ; ?>/asset/vendors/fontawesome/css/all.css">
	<!-- Icon LineAwesome CSS-->
	<link rel="stylesheet" href=" <?= base_url('') ; ?>/asset/vendors/lineawesome/css/line-awesome.min.css">

</head>
<body>
  
	<div class="auth-dark">
		<div class="theme-switch-wrapper">
				<label class="theme-switch" for="checkbox">
					<input type="checkbox" id="checkbox"  title="Dark Or White"/>
					<div class="slider round"></div>
			  </label>
		</div>
	</div>

	<div class="container">
		<div class="row vh-100 d-flex justify-content-center align-items-center auth">
			<div class="col-md-7 col-lg-5">
				<div class="card">
					<div class="card-body">
						<h3 class="mb-5">SIGN IN</h3>
                        
						<form method="POST" action="<?= base_url('public/login/login_action'); ?>">
               <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
               </div>
               <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password">
               </div>
               <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
               </div>
               <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <p>
               <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                  <div class="alert alert-warning">
                     <?php echo session()->getFlashdata('gagal') ?>
                  </div>
               <?php } ?>
            </p>
     

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Library Javascipt-->
	<script src=" <?= base_url('') ; ?>/asset/vendors/bootstrap/js/jquery.min.js"></script>
	<script src=" <?= base_url('') ; ?>/asset/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src=" <?= base_url('') ; ?>/asset/vendors/bootstrap/js/popper.min.js"></script>
	<script src=" <?= base_url('') ; ?>/asset/js/script.js"></script>
 </body>
</html>
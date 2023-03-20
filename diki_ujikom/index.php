<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laundry jaya</title>

    <!-- Custom fonts for this template-->
    <link href="template/im/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
									<div class="card-body">
										<?php
										$txt_pesan = '';
										$par_pesan = @$_REQUEST['pesan'];
										if ($par_pesan == 'error') {
											$txt_pesan = 'Login Gagal. ada kesalahan di username atau password';
										} elseif ($par_pesan == 'logout') {
											$txt_pesan = 'Anda sudah keluar dari Aplikasi';
										} elseif ($par_pesan == 'forbidden') {
											$txt_pesan = 'Silahkan login terlebih dahulu';
										} else {
											$txt_pesan = FALSE;
										}

										?>

										<?php if (@$txt_pesan) { ?>
											<div class="alert alert-danger"><?php echo $txt_pesan; ?></div>
										<?php } ?>
										<form action="fungsi/login.php" method="POST">
											<div class="form-floating mb-3">
												<input name="username" class="form-control" id="inputUsername" type="text" placeholder="Username" />
												<label for="inputEmail">Username</label>
											</div>
											<div class="form-floating mb-3">
												<input name="password" class="form-control" id="inputPassword" type="password" placeholder="Password" />
												<label for="inputPassword">Password</label>
											</div>

											<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
												<button type="submit" class="btn btn-primary btn-lg w-100">Login</button>
											</div>
										</form>
									</div>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
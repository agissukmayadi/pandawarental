<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Go Drive</title>
	<link href="<?= base_url() ?>assets/img/godrive.png" rel="icon" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="<?= base_url("assets/css/login.css") ?>">
</head>

<body>
	<div class="container-fluid">
		<div class="row no-gutter">
			<!-- The image half -->
			<div class="col-md-6 d-none d-md-flex bg-image"></div>


			<!-- The content half -->
			<div class="col-md-6 bg-light">
				<div class="login d-flex align-items-center py-5">

					<!-- Demo content-->
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-10 col-xl-7 mx-auto">
								<h3 class="display-4 mb-4 fw-bold">Login</h3>
								<?= $this->session->flashdata("alert") ?>
								<form class="d-flex flex-column" method="POST" action="<?= base_url("auth") ?>">
									<div class="form-group <?= form_error('email') ? '' : 'mb-3' ?>">
										<input id="email" name="email" type="email" placeholder="Email"
											value="<?= set_value('email') ?>" autofocus=""
											class=" form-control border-0 shadow-sm px-4 py-2">
										<?= form_error("email", "<small class=' text-danger'>"), "</small>" ?>
									</div>
									<div class="form-group <?= form_error('password') ? '' : 'mb-3' ?>">
										<input id="password" name="password" type="password" placeholder="Password"
											class="form-control border-0 shadow-sm px-4 py-2 ">
										<?= form_error("password", "<small class=' text-danger'>"), "</small>" ?>

									</div>
									<div class="custom-control custom-checkbox mb-3">
										<label for="customCheck1" class="custom-control-label">Apakah kamu belum memilki
											akun? <a href="<?= base_url("auth/register") ?>"
												class="">Registrasi</a></label>
									</div>
									<button type="submit"
										class="btn btn-primary btn-block text-uppercase mb-2 shadow-sm">Sign
										in</button>
								</form>
							</div>
						</div>
					</div><!-- End -->

				</div>
			</div><!-- End -->

		</div>
	</div>
	<div class=" position-fixed top-0 end-0 mt-2 me-2">
		<a href="<?= base_url() ?> " type="button" class="btn-close" aria-label="Close"></a>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>
</body>

</html>

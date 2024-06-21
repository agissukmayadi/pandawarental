<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">
			<?= $title ?>
		</h1>
	</div>
	<!-- Content Row -->
	<div class="row gy-5">
		<!-- Earnings (Monthly) Card Example -->
		<div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								Jumlah Sewa Menunggu Verifikasi</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?= $rentPendingCount ?>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-spinner fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								Jumlah Sewa Sedang Berjalan</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?= $rentPickUpCount ?>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-car fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0">
			<div class="card border-left-danger shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
								Jumlah Sewa Invalid</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?= $rentInvalidCount ?>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-times fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								Jumlah Sewa Selesai</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?= $rentSuccessCount ?>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-car fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
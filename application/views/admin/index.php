<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">
			<?= $title ?>
		</h1>
		<div>
			<button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
				data-target="#exampleModal"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</button>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Generate Laporan Penyewaan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?= base_url("admin/generate_report") ?>" method="post">
							<div class="row">
								<div class="form-group col-6">
									<label for="exampleFormControlSelect1">Pilih Bulan</label>
									<select class="form-control" name="month" required>
										<option value="" selected disabled>Pilih Bulan</option>
										<?php
										$months = [
											1 => 'Januari',
											2 => 'Februari',
											3 => 'Maret',
											4 => 'April',
											5 => 'Mei',
											6 => 'Juni',
											7 => 'Juli',
											8 => 'Agustus',
											9 => 'September',
											10 => 'Oktober',
											11 => 'November',
											12 => 'Desember'
										];
										foreach ($months as $num => $name) {
											?>
											<option value="<?= $num ?>"><?= $name ?></option>
											<?php
										}
										?>
									</select>
								</div>
								<div class="form-group col-6">
									<label for="exampleFormControlSelect1">Pilih Tahun</label>
									<select class="form-control" name="year" required>
										<option value="" selected disabled>Pilih Tahun</option>
										<?php
										for ($i = date('Y') - 5; $i <= date('Y'); $i++) {
											?>
											<option value="<?= $i ?>"><?= $i ?></option>
											<?php
										}
										?>
									</select>
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Generate</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Row -->
	<div class="row">

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								Jumlah Pengguna</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?= $userCount ?>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-users fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								Jumlah Mobil</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?= $carCount ?>
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
		<div class="col-4">
			<div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
								Jumlah Transaksi Sewa</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?= $rentCount ?>
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

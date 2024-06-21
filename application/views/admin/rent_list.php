<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">
			<?= $title ?>
		</h1>
		<div>
			<button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
				data-target="#reportModal" id="reportBtnPrint"
				data-action="<?= base_url("admin/generate_report_rent_print") ?>"><i
					class="fas fa-print fa-sm text-white-50"></i> Print</button>
			<button class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm" data-toggle="modal"
				data-target="#reportModal" id="reportBtnPdf"
				data-action="<?= base_url("admin/generate_report_rent_pdf") ?>"><i
					class="fas fa-file-pdf fa-sm text-white-50"></i> PDF</button>
			<button class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal"
				data-target="#reportModal" id="reportBtnExcel"
				data-action="<?= base_url("admin/generate_report_rent_excel") ?>"><i
					class="fas fa-file-excel fa-sm text-white-50"></i> Excel</button>
		</div>

		<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Laporan Penyewaan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" id="reportForm">
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

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<?= $this->session->flashdata("alert") ?>
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Sewa</th>
							<th>Kode Mobil</th>
							<th>Merk Mobil</th>
							<th>Nama Pelanggan</th>
							<th>Tanggal Sewa</th>
							<th>Tanggal Pengembalian</th>
							<th>Total Biaya</th>
							<th>Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($rents as $rent) {
							?>
							<tr>
								<td>
									<?= $no ?>
								</td>
								<td>
									<?= $rent->id ?>
								</td>
								<td>
									<?= $rent->car_id ?>
								</td>
								<td>
									<?= $rent->merk ?>
								</td>
								<td>
									<?= $rent->name ?>
								</td>
								<td>
									<?= $rent->rent_date ?>
								</td>
								<td>
									<?= $rent->return_date ?>
								</td>
								<td>
									<?= format_rupiah($rent->total_cost) ?>
								</td>
								<td>
									<span class="badge <?php
									if ($rent->status == 'PENDING') {
										echo "badge-secondary";
									} elseif ($rent->status == 'PAID' || $rent->status == 'PICKED UP') {
										echo "badge-info";
									} elseif ($rent->status == 'SUCCESS') {
										echo "badge-success";
									} elseif ($rent->status == 'INVALID PAYMENT' || $rent->status == 'INVALID LICENSE') {
										echo "badge-danger";
									} else {
										echo "badge-info";
									}
									?>">
										<?= ucwords(strtolower($rent->status)) ?>
									</span>
								</td>

								<td class=" text-center">
									<a href="<?= base_url("admin/rent_detail/") . $rent->id ?>"
										class="btn btn-sm btn-primary">DETAIL</a>
								</td>
							</tr>
							<?php
							$no++;
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
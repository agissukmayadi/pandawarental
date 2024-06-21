<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">
			<?= $title ?>
		</h1>
	</div>
	<div class="row mb-3 ">
		<div class="col-lg-8 col-12 mb-3 mb-lg-0">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Data Mobil</h6>
				</div>
				<div class="card-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 p-4 col-12">
								<img src="<?= base_url("assets/img/cars/") . $rent->image ?>" alt="" class=" img-fluid">
							</div>
							<div class="col-lg-8 col-12">
								<h3>
									<?= $rent->merk ?>
								</h3>
								<table>
									<tr>
										<td width="180px"><strong>Tipe</strong></td>
										<td>:</td>
										<td>
											<?= $rent->type ?>
										</td>
									</tr>
									<tr>
										<td width="180px"><strong>Transmisi</strong></td>
										<td>:</td>
										<td>
											<?= ucwords(strtolower($rent->transmition)) ?>
										</td>
									</tr>
									<tr>
										<td width="180px"><strong>Jumlah Kursi</strong></td>
										<td>:</td>
										<td>
											<?= $rent->seat ?> Seater
										</td>
									</tr>
									<tr>
										<td width="180px"><strong>Tahun</strong></td>
										<td>:</td>
										<td>
											<?= $rent->year ?>
										</td>
									</tr>
									<tr>
										<td width="180px"><strong>Harga Sewa/hari</strong></td>
										<td>:</td>
										<td>
											<?= format_rupiah($rent->price) ?>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-12 mb-3 mb-lg-0">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Data Sewa</h6>
				</div>
				<div class="card-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<table>
									<tr>
										<td width="200px"><strong>Tanggal Sewa</strong></td>
										<td>:</td>
										<td>
											<?= $rent->rent_date ?>
										</td>
									</tr>
									<tr>
										<td width="200px"><strong>Tanggal Selesai Sewa</strong></td>
										<td>:</td>
										<td>
											<?= $rent->return_date ?>
										</td>
									</tr>
									<tr>
										<td width="200px"><strong>Tanggal Pengembalian</strong></td>
										<td>:</td>
										<td>
											<?= $rent->actual_return_date == null ? "-" : $rent->actual_return_date; ?>
										</td>
									</tr>
									<tr>
										<td width="200px"><strong>Biaya Sewa</strong></td>
										<td>:</td>
										<td>
											<?= format_rupiah($rent->rent_cost) ?>
										</td>
									</tr>
									<tr>
										<td width="200px"><strong>Biaya Keterlambatan</strong></td>
										<td>:</td>
										<td>
											<?= format_rupiah($rent->late_cost) ?>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-12 d-flex justify-content-end">
							<h5>
								<strong>
									Total Biaya :
									<?= format_rupiah($rent->total_cost) ?>
								</strong>
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row mb-3">
		<div class="col-lg-4 col-12 mb-3 mb-lg-0">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
				</div>
				<div class="card-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<table>
									<tr>
										<td width="180px"><strong>Bank Tujuan</strong></td>
										<td>:</td>
										<td>
											<?= $rent->bank . " - " . $rent->bank_number . " ($rent->bank_name)" ?>
										</td>
									</tr>
									<tr>
										<td width="180px"><strong>Nomor Rekening</strong></td>
										<td>:</td>
										<td>
											<?= $rent->payment_number ?>
										</td>
									</tr>
									<tr>
										<td width="180px"><strong>Atas Nama</strong></td>
										<td>:</td>
										<td>
											<?= $rent->payment_name ?>
										</td>
									</tr>
									<tr>
										<td width="180px"><strong>Total Pembayaran</strong></td>
										<td>:</td>
										<td>
											<?= format_rupiah($rent->amount) ?>
										</td>
									</tr>
									<tr>
										<td width="180px"><strong>Bukti Pembayaran</strong></td>
										<td>:</td>
										<td>
											<a href="#" data-toggle="modal" data-target="#payment_attachment">Lihat
												Foto</a>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-12 mb-3 mb-lg-0">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Data Jaminan</h6>
				</div>
				<div class="card-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<table>
									<tr>
										<td width="180px"><strong>Nomor SIM</strong></td>
										<td>:</td>
										<td>
											<?= $rent->license_number ?>
										</td>
									</tr>
									<tr>
										<td width="180px"><strong>Bukti Jaminan (SIM)</strong></td>
										<td>:</td>
										<td>
											<a href="#" data-toggle="modal" data-target="#license_attachment">Lihat
												Foto</a>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-12">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Data Customer</h6>
				</div>
				<div class="card-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<table>
									<tr>
										<td width="180px"><strong>Nama</strong></td>
										<td>:</td>
										<td>
											<?= $rent->user_name ?>
										</td>
									</tr>
									<tr>
										<td width="180px"><strong>Email</strong></td>
										<td>:</td>
										<td>
											<?= $rent->email ?>
										</td>
									</tr>
									<tr>
										<td width="180px"><strong>Nomor Handphone</strong></td>
										<td>:</td>
										<td>
											<?= $rent->phone ?>
										</td>
									</tr>
									<tr>
										<td width="180px"><strong>Alamat</strong></td>
										<td>:</td>
										<td>
											<?= $rent->address ?>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row mb-3">
		<div class="col-12">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Action</h6>
				</div>
				<div class="card-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<form action="<?= current_url() ?>" method="post">
									<input type="hidden" value="PICKED UP" name="status">
									<?= form_error("status", "<small class='text-danger'>", "</small>") ?>
									<button type="submit" class="btn btn-block btn-primary mt-3" type="button">Pick
										Up</button>
								</form>
								<div class="d-grid gap-2 mt-2">
									<a href="<?= base_url("employee/list_rent_paid") ?>"
										class="btn btn-block btn-danger" type="button">Kembali</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="license_attachment" tabindex="-1" aria-labelledby="license_attachmentLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="license_attachmentLabel">Bukti Jaminan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="<?= base_url("assets/img/payments/$rent->payment_attachment") ?>" alt=""
						class="img-fluid">
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="payment_attachment" tabindex="-1" aria-labelledby="payment_attachmentLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="payment_attachmentLabel">Bukti Jaminan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="<?= base_url("assets/img/payments/$rent->payment_attachment") ?>" alt=""
						class="img-fluid">
				</div>
			</div>
		</div>
	</div>

</div>
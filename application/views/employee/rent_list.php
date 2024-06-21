<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">
			<?= $title ?>
		</h1>
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
									<?php if ($rent->status == "PENDING") {
										?>
										<a href="<?= base_url("employee/rent_verification/") . $rent->id ?>"
											class="btn btn-sm btn-primary">VERIFICATION</a>
										<?php
									} elseif ($rent->status == "PAID") {
										?>
										<a href="<?= base_url("employee/rent_pickup/") . $rent->id ?>"
											class="btn btn-sm btn-primary">PICK UP</a>
										<?php
									} elseif ($rent->status == "PICKED UP") {
										?>
										<a href="<?= base_url("employee/rent_return/") . $rent->id ?>"
											class="btn btn-sm btn-primary">RETURN</a>
										<?php
									} else {
										?>
										<a href="<?= base_url("employee/rent_detail/") . $rent->id ?>"
											class="btn btn-sm btn-primary">DETAIL</a>
										<?php
									}
									?>
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
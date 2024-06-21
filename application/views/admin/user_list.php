<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">
			<?= $title ?>
		</h1>
		<div>
			<a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
				href="<?= base_url("admin/generate_report_user_print") ?>"><i
					class="fas fa-print fa-sm text-white-50"></i> Print</a>
			<a class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"
				href="<?= base_url("admin/generate_report_user_pdf") ?>"><i
					class="fas fa-file-pdf fa-sm text-white-50"></i> PDF</a>
			<a class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"
				href="<?= base_url("admin/generate_report_user_excel") ?>"><i
					class="fas fa-file-excel fa-sm text-white-50"></i> Excel</a>
		</div>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data</h6>
		</div>
		<div class="card-body">
			<div class="d-flex justify-content-end mr-1 mb-2">
				<a href="<?= base_url("admin/user_add") ?>" class="btn btn-primary btn-sm">Tambah <i
						class="fas fa-plus pl-3"></i></a>
			</div>
			<?= $this->session->flashdata("alert") ?>
			<div class="table-responsive">

				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pengguna</th>
							<th>Nomor Handphone</th>
							<th>Email</th>
							<th>Alamat</th>
							<th>Role</th>
							<th>Tanggal Terdaftar</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($users as $user) {
							?>
							<tr>
								<td>
									<?= $no ?>
								</td>
								<td>
									<?= $user->name ?>
								</td>
								<td>
									<?= $user->phone ?>
								</td>
								<td>
									<?= $user->email ?>
								</td>
								<td>
									<?= $user->address ?>
								</td>
								<td>
									<?= $user->role ?>
								</td>
								<td>
									<?php
									$date = new DateTime($user->date_created);

									echo date_format($date, 'd-m-Y');
									?>
								</td>
								<td class=" text-center">
									<a href="<?= base_url("admin/user_edit/") . $user->id ?>" class="btn btn-sm btn-info"><i
											class="fas fa-pen"></i></a>
									<a href="<?= base_url("admin/user_delete/") . $user->id ?>"
										class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<style type="text/css">
		.table-data {
			width: 100%;
			border-collapse: collapse;
		}

		.table-data tr th,
		.table-data tr td {
			border: 1px solid black;
			font-size: 11pt;
			font-family: Verdana;
			padding: 10px 10px 10px 10px;
		}

		h3 {
			font-family: Verdana;
		}

		h5 {
			margin: 0;
		}
	</style>
	<h3>
		<center>Laporan Data User Pandawa Rental</center>
	</h3>
	<h5>
		<i>
			<center>
				Dicetak pada :
				<?= date("Y-m-d H:i:s") ?>
			</center>
		</i>
	</h5>
	<br />
	<table class="table-data">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Pengguna</th>
				<th>Nomor Handphone</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Role</th>
				<th>Tanggal Terdaftar</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($users as $user) {
				?>
				<tr>
					<th scope="row">
						<?= $no++; ?>
					</th>
					<td>
						<?= $user->name; ?>
					</td>
					<td>
						<?= $user->phone; ?>
					</td>
					<td>
						<?= $user->email; ?>
					</td>
					<td>
						<?= $user->address; ?>
					</td>
					<td>
						<?= $user->role; ?>
					</td>
					<td>
						<?php
						$date = new DateTime($user->date_created);

						echo date_format($date, 'd-m-Y');
						?>
					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</body>

</html>
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
		<center>Laporan Data Penyewaan Pandawa Rental</center>
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
				<th>Kode Sewa</th>
				<th>Kode Mobil</th>
				<th>Merk Mobil</th>
				<th>Nama Pelanggan</th>
				<th>Tanggal Sewa</th>
				<th>Tanggal Pengembalian</th>
				<th>Total Biaya</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($rents as $rent) {
				?>
				<tr>
					<th scope="row">
						<?= $no++; ?>
					</th>
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
						<?= ucwords(strtolower($rent->status)) ?>
					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</body>

</html>
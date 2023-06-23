<?php

include "../koneksi.php";

$conn = connectToDatabase();

$sql = mysqli_query($conn, "select * from teknisi ORDER BY id DESC LIMIT 1");
?>

<div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<th>Teknisi</th>
			<th>Tanggal</th>
			<th>Mitra</th>
			<th>No Tiket</th>
			<th>No Internet</th>
			<th>Pekerjaan</th>
			<th>WH SO</th>
		</thead>
		<?php
		while ($row = mysqli_fetch_array($sql)) {

			$teknisi = $row['teknisi'];
			$tanggal = $row['tanggal'];
			$mitra = $row['mitra'];
			$notiket = $row['notiket'];
			$nointernet = $row['nointernet'];
			$pekerjaan = $row['pekerjaan'];
			$whso = $row['whso'];
			?>
			<tbody>
				<tr>
					<td>
						<?php echo $teknisi; ?>
					</td>
					<td>
						<?php echo date('d-M-Y'); ?>
					</td>
					<td>
						<?php echo $mitra; ?>
					</td>
					<td>
						<?php echo $notiket; ?>
					</td>
					<td>
						<?php echo $nointernet; ?>
					</td>
					<td>
						<?php echo $pekerjaan; ?>
					</td>
					<td>
						<?php echo $whso; ?>
					</td>
				</tr>
			</tbody>
		<?php } ?>
	</table>

</div>
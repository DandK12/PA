<?php
// header("Content-Type: application/xls");
// header("Content-Disposition: attachment; filename=\"$fileName\""); 
// header("Pragma: no-cache");
// header("Expires: 0");

// $fileName = "REKAP DATA MATERIAL" . date('M YY') . ".xlsx"; 

// Excel file name for download 
$fileName = "REKAP DATA MATERIAL" . date(' M Y') . ".xlsx"; 
 
// Headers for download 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
header("Content-Type: application/vnd.ms-excel"); 

require_once '../koneksi.php';

$conn = connectToDatabase();

$output = "";

$output .= "
		<table>
			<thead>
				<tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Teknisi</th>
                <th>Mitra</th>
                <th>No Tiket</th>
                <th>No Internet</th>
                <th>Pekerjaan</th>
                <th>WH SO</th>
				</tr>
			<tbody>
	";

// $query = $conn->query("SELECT * FROM `teknisi`") or die(mysqli_error());
$query = mysqli_query($conn, "SELECT * FROM `teknisi`") or die (mysqli_error($conn)); 
while ($fetch = $query->fetch_array()) {

    $output .= "
				<tr>
					<td>" . $fetch['id'] . "</td>
					<td>" . $fetch['tanggal'] . "</td>
					<td>" . $fetch['teknisi'] . "</td>
					<td>" . $fetch['mitra'] . "</td>
					<td>" . $fetch['notiket'] . "</td>
					<td>" . $fetch['nointernet'] . "</td>
					<td>" . $fetch['pekerjaan'] . "</td>
					<td>" . $fetch['whso'] . "</td>
				</tr>
	";
}

$output .= "
			</tbody>
 
		</table>
	";

echo $output;


?>
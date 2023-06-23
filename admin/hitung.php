<?php

include "../koneksi.php";

$conn = connectToDatabase();

$sql = mysqli_query($conn, "select * from teknisi");
$sql2 = mysqli_query($conn, "select * from data_admin");
$sql3 = mysqli_query($conn, "select * from teknisi ORDER BY id DESC LIMIT 1");

$data = mysqli_num_rows($sql);
$row_query = mysqli_fetch_array($sql3);
$row_query2 = mysqli_fetch_array($sql2);
 

?>
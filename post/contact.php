<?php

include "../koneksi.php";

$nama = $_POST['Teknisi'];
$mitra = $_POST['Mitra'];
$numbertiket = $_POST['Number Tiket'];
$nointernet = $_POST['No Internet'];
$pekerjaan = $_POST['Pekerjaan'];


mysql_query("INSERT INTO `teknisi` values(`Teknisi`, ``, `Number Tiket`, `No Internet`, ``)")





?>
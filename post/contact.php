<?php

include "../koneksi.php";

$nama = $_POST['teknisi'];
$mitra = $_POST['mitra'];
$notiket = $_POST['notiket'];
$nointernet = $_POST['nointernet'];
$pekerjaan = $_POST['pekerjaan'];



mysqli_query("INSERT INTO `teknisi` values (``, `$teknisi`, `$mitra`, `$notiket`, `$nointernet`, `$pekerjaan`)");
header ("location: ../index.php");




?>
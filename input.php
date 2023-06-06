<?php

include "koneksi.php";

if (isset($_POST['simpan'])) {
    $teknisi = mysqli_real_escape_string($conn, $_POST['teknisi']);
    $mitra = mysqli_real_escape_string($conn, $_POST['mitra']);
    $notiket = mysqli_real_escape_string($conn, $_POST['notiket']);
    $nointernet = mysqli_real_escape_string($conn, $_POST['nointernet']);
    $pekerjaan = mysqli_real_escape_string($conn, $_POST['pekerjaan']);
    
    
    
    mysqli_query($conn, "INSERT INTO `teknisi` values (``, `$teknisi`, `$mitra`, `$notiket`, `$nointernet`, `$pekerjaan`)");
}


?>
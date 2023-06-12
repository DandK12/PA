<?php

    include "../koneksi.php";

    $conn = connectToDatabase();

    $sql  =  mysqli_query ($conn, "select * from teknisi");

    $data  =  mysqli_num_rows ($sql);
    $row_query = mysqli_fetch_array($sql);

?>
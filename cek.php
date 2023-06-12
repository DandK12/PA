<?php
require_once('koneksi.php');

$conn = connectToDatabase();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teknisi = mysqli_real_escape_string($conn, $_POST['teknisi']);
    $mitra = mysqli_real_escape_string($conn, $_POST['mitra']);
    $notiket = mysqli_real_escape_string($conn, $_POST['notiket']);
    $nointernet = mysqli_real_escape_string($conn, $_POST['nointernet']);
    $pekerjaan = mysqli_real_escape_string($conn, $_POST['pekerjaan']);

    // Prepare the SQL statement
    $sql = "INSERT INTO `teknisi`(`teknisi`, `mitra`, `notiket`, `nointernet`, `pekerjaan`) values ('$teknisi', '$mitra', '$notiket', '$nointernet', '$pekerjaan')";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . $conn->error;
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>
<?php
$servername = "localhost";
$database = "test";
$username = "root";
$password = "";
 

function connectToDatabase() {
    global $servername, $username, $password, $database;

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;

}

?>
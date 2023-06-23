<?php 
include '../koneksi.php';
$conn = connectToDatabase();
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$login = mysqli_query($conn, "select * from data_admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin.php");
}else{
	header("location:login.php");	
}
 
?>
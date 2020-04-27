<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include "config/koneksi.php";
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$sql = "SELECT * FROM  `tbl_user` WHERE  `username` =  '" . $username . "' AND  `password` =  '" . $password . "'";
        $result = mysqli_query($con, $sql);

if ($result){
	$numrows = mysqli_num_rows($result);
	if ($numrows == 1) {
		$found_user  = mysqli_fetch_array($result);
 
        //fill the result to session variable
        $_SESSION['username']  = $found_user['username']; 
        $_SESSION['status'] = "login";
        header("location:daftar.php");
	}else{
		header("location:index.php?pesan=gagal");
	}
}else {
	die("Table Query failed: " );
}
?>
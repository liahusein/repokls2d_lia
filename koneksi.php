<?php 

$host   = "localhost";
$user   = "root";
$pass   = "";
$namadb = "mahasiswa";

$db = mysqli_connect($host, $user, $pass, $namadb);

if (!$db) {
	die("koneksi gagal".mysqli_connect_error());
}

 ?>
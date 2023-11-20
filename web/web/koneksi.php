<?php 

$host	=	"localhost";
$user	=	"root";
$pass	=	"";
$namadb	=	"mahasiswa_1a";

$db = mysqli_connect($host, $user, $pass, $namadb);

if (!$db) {
	die("Koneksi gagal".mysqli_connect_error());
}

 ?>
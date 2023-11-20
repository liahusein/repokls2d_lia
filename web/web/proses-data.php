<?php  
include 'koneksi.php';

if (isset($_POST['daftar'])) {
	$nim	=	$_POST['nim'];
	$nama	=	$_POST['nama'];
	$ttl	=	$_POST['ttl'];
	$alamat	=	$_POST['alamat'];
	$asal	=	$_POST['asal_sekolah'];

	$sql	=	"INSERT INTO data_mhs (nim, nama, ttl, alamat, asal_sekolah) VALUES ('$nim', '$nama', '$ttl', '$alamat', '$asal')";

	$query	=	mysqli_query($db, $sql);

	if ($query) {
			header('Location: tampil-data.php?status=sukses');
		}	else {
			header('Location: tambah-data.php?status=gagal');
		}
}

?>
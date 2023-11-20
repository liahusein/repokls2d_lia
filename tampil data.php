<?php 
include 'koneksi.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>tampil data</title>
 </head>
 <body>

 	<h1>tampil data mahasiswa</h1>
 	<table border="1">
 		<tr>
 			<td>NIM</td>
 			<td>nama lengkap</td>
 			<td>TTL</td>
 			<td>alamat</td>
 			<td>asal sekolah</td>
 		</tr>

 		<?php 
 		$sql ="SELECT*FROM data_mhs";
 		$query =mysqli_query($db, $sql);

 		while ($mhs=mysqli_fetch_array($query)) {
 			echo "<tr>";
 				echo "<td>".$mhs['nim']."</td>";
 				echo "<td>".$mhs['nama']."</td>";
 				echo "<td>".$mhs['TTL']."</td>";
 				echo "<td>".$mhs['Alamat']."</td>";
 				echo "<td>".$mhs['asal_sekolah']."</td>";
 				

 			echo "</tr>";
 		}


 		 ?>
 	</table>

	<h1>codingan ini dari pak ardhy coba di kelas</h1>

	<h2>ini codingan dari adelia</h2>
 
 </body>
 </html>
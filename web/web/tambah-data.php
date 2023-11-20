<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulir Pendaftaran</title>
</head>
<body>

	<h2>Formulir Pendaftaran</h2>
	<h4>Silahkan Daftarkan Diri Anda ke Dalam Sistem</h4>

	<fieldset>
		<form action="proses-data.php" method="POST">
			<table>

				<tr>
					<td><label for="nim">NIM</label></td>
					<td>:</td>
					<td>
						<input type="text" name="nim" placeholder="Masukan NIM Anda">
					</td>
				</tr>

				<tr>
					<td><label for="nama">Nama Lengkap</label></td>
					<td>:</td>
					<td>
						<input type="text" name="nama" placeholder="Masukan Nama Anda">
					</td>
				</tr>

				<tr>
					<td><label for="ttl">Tanggal Lahir</label></td>
					<td>:</td>
					<td>
						<input type="date" name="ttl" placeholder="Masukan NIM Anda">
					</td>
				</tr>

				<tr>
					<td><label for="alamat">Alamat</label></td>
					<td>:</td>
					<td>
						<textarea name="alamat" placeholder="Masukan Alamat Anda"></textarea>
					</td>
				</tr>

				<tr>
					<td><label for="asal_sekolah">Asal Sekolah</label></td>
					<td>:</td>
					<td>
						<input type="text" name="asal_sekolah" placeholder="Asal Sekolah Anda">
					</td>
				</tr>

				<tr>
					<td></td>
					<td></td>
					<td>
						<input type="submit" name="daftar" value="SUBMIT DATA">
					</td>
				</tr>

			</table>
		</form>
	</fieldset>

</body>
</html>
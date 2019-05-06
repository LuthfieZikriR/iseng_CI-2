<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<a href="<?php echo base_url('login') ?>">Kembali</a>
	<br><br>
	<form method="post" action="<?= base_url('login/update/').$data['nisn'] ?>">
		<table align="center">
			<tr>
				<td>Nisn</td>
				<td>:</td>
				<td><input type="text" name="nisn" value="<?php echo $data['nisn'] ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat" ><?php echo $data['alamat'] ?></textarea></td>
			</tr>
			<tr>
				<td>Asal Sekolah</td>
				<td>:</td>
				<td><input type="text" name="asal_sekolah" value="<?php echo $data['asal_sekolah'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
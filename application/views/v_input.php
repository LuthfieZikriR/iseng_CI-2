<!DOCTYPE html>
<html>
<head>
	<title>Inputan</title>
</head>
<body>	
	<a href="<?php echo base_url('logout'); ?>">Keluar</a>
	<form method="post" action="<?php echo base_url('login/tambah'); ?>">
		<table align="center">
			
			<tr>
				<td>Nisn</td>
				<td>:</td>
				<td><input type="text" name="nisn" required></td>
			</tr>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>

			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir" required></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat" required></textarea></td>
			</tr>

			<tr>
				<td>Asal Sekolah</td>
				<td>:</td>
				<td><input type="text" name="asal_sekolah" required></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td>
					<button type="submit" name="save">Simpan</button>
				</td>
			</tr>
		</table>
	</form>
	<br>
	<table align="center" border="1">
		<tr>
			<td>No</td>
			<td>Nisn</td>
			<td>Nama</td>
			<td>Tanggal Lahir</td>
			<td>Alamat</td>
			<td>Asal Sekolah</td>
			<td>Aksi</td>
		</tr>
		<?php $i = 1 ?>
		<?php foreach ($data->result() as $field): ?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?= $field->nisn ?></td>
				<td><?= $field->nama ?></td>
				<td><?= $field->tgl_lahir ?></td>
				<td><?= $field->alamat ?></td>
				<td><?= $field->asal_sekolah ?></td>
				<td>
					<a href="<?php echo base_url('login/edit/').$field->nisn ?>">Edit |</a>
					<a href="<?php echo base_url('login/hapus/').$field->nisn ?>">Hapus</a>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>
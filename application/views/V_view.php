<!DOCTYPE html>
<html>
<head>
	<title>CRUD Sekolah</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<table class="table text-center">
		<thead>
			<th>Nama HP</th>
			<th>Jenis HP</th>
			<th>Tanggal Beli</th>
			<th>Opsi</th>
		</thead>
		<?php foreach($data as $d) { ?>
			<tbody>
				<tr>
					<td><?php echo $d['nama_hp'] ?></td>
					<td><?php echo $d['jenis_hp'] ?></td>
					<td><?php echo $d['tanggal_beli'] ?></td>
					<td><a class="btn btn-primary" href="<?php echo site_url('C_control/Edit_data/'.$d['id_hp']) ?>">Edit</a>
						||
						<a class="btn btn-danger" href="<?php echo site_url('C_control/hapus_data/'.$d['id_hp']) ?>" onclick="confirm('Yakin Ingin Menghapus?')">Hapus</a></td>
				</tr>
			</tbody>
		<?php } ?>
	</table>
	<p align="center"><a class="btn btn-primary" href="<?php echo site_url('C_control/Tambah_data') ?>">Tambah Data</a></p>
</body>
</html>
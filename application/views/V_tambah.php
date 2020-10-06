<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data HP</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<?php echo form_open_multipart('C_control/proses_Tambah') ?>
	<input type="text" name="nama_hp" placeholder="Nama HP"><br>
	<label>Jenis HP : </label><br><br>
	<input type="radio" name="jenis_hp" value="sentuh"><label>Layar Sentuh</label><br><br>
	<input type="radio" name="jenis_hp" value="ketik"><label>Ketik</label><br><br>
	<input type="date" name="tanggal_beli"><br><br>

	<button class="btn btn-primary">Tambah</button>

	<?php form_close(); ?>
</body>
</html>
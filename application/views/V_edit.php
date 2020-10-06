<!DOCTYPE html>
<html>
<head>
	<title>Edit Data HP</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<?php echo form_open_multipart('C_control/proses_Edit/'.$data->id_hp) ?>

	<table class="m-3" cellpadding="5">
		<tr>
			<td>
				<input type="text" name="nama_hp" value="<?php echo $data->nama_hp ?>">
			</td>
		</tr>
		<tr>
			<td><input type="radio" name="jenis_hp" value="sentuh"><label>Layar Sentuh</label></td>
			<td><input type="radio" name="jenis_hp" value="ketik"><label>Ketik</label></td>
		</tr>
		<tr>
			<td><input type="date" name="tanggal_beli" value="<?php echo $data->tanggal_beli ?>"></td>
		</tr>
		<tr>
			<td><button class="btn btn-primary">Tambah</button></td>
		</tr>
	</table>

	<?php echo form_close() ?>
</body>
</html>
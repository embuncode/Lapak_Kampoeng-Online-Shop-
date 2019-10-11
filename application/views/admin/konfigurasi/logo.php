<?php

// Notifikasi ketika berhasil
if ($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
}

?>

<?php
// Error Upload
if (isset($error)) {
	echo '<p class="alert alert-warning">';
	echo $error;
	echo '</p>';
}

// Notifikasi error
echo validation_errors('<div class="alert alert-warning">', '</div>');

// Form open
echo form_open_multipart(base_url('admin/konfigurasi/logo'), ' class="form-horizontal"');
?>

<div class="form-group">
	<label class="col-md-2 control-label">Nama Website</label>

	<div class="col-sm-8">
		<input type="text" name="namaweb" class="form-control" placeholder="Nama Website" value="<?= $konfigurasi->namaweb ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Upload Logo Baru</label>

	<div class="col-sm-8">
		<input type="file" name="logo" class="form-control" placeholder="Upload Logo Baru" value="<?= $konfigurasi->logo ?>" required>

		<label class="control-label">Logo Lama :</label>
		<br><img src="<?= base_url('assets/upload/image/'.$konfigurasi->logo) ?>" class="img img-responsive img-thumbnail" width="200">
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label"></label>

	<div class="col-sm-5">
		<button class="btn btn-success btn-sm" name="submit" type="submit">
			<i class="fa fa-save"></i> Simpan
		</button>

		<button class="btn btn-info btn-sm" name="reset" type="reset">
			<i class="fa fa-times"></i> Reset
		</button>
	</div>
</div>

<?php echo form_close(); ?>
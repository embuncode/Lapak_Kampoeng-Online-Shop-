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
echo form_open_multipart(base_url('admin/konfigurasi'), ' class="form-horizontal"');
?>

<div class="form-group">
	<label class="col-md-2 control-label">Nama Website</label>

	<div class="col-sm-8">
		<input type="text" name="namaweb" class="form-control" placeholder="Nama Website" value="<?= $konfigurasi->namaweb ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Tagline / Motto</label>

	<div class="col-sm-8">
		<input type="text" name="tagline" class="form-control" placeholder="Tagline / Motto" value="<?= $konfigurasi->tagline ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Email</label>

	<div class="col-sm-8">
		<input type="email" name="email" class="form-control" placeholder="Email" value="<?= $konfigurasi->email ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Website</label>

	<div class="col-sm-8">
		<input type="text" name="website" class="form-control" placeholder="Website" value="<?= $konfigurasi->website ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Alamat Facebook</label>

	<div class="col-sm-8">
		<input type="text" name="facebook" class="form-control" placeholder="Alamat Facebook" value="<?= $konfigurasi->facebook ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Alamat Instagram</label>

	<div class="col-sm-8">
		<input type="text" name="instagram" class="form-control" placeholder="Alamat Instagram" value="<?= $konfigurasi->instagram ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Telepon</label>

	<div class="col-sm-8">
		<input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?= $konfigurasi->telepon ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Alamat Kantor</label>

	<div class="col-sm-8">
		<textarea name="alamat" class="form-control" placeholder="Alamat"><?= $konfigurasi->alamat ?></textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Keywords Produk</label>

	<div class="col-sm-8">
		<textarea name="keywords" class="form-control" placeholder="Keywords (untuk SEO Google)"><?= $konfigurasi->keywords ?></textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Metatext</label>

	<div class="col-sm-8">
		<textarea name="metatext" class="form-control" placeholder="Meta text"><?= $konfigurasi->metatext ?></textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Deskripsi</label>

	<div class="col-sm-8">
		<textarea name="deskripsi" class="form-control" placeholder="Deskripsi Website"><?= $konfigurasi->deskripsi ?></textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Rekening Pembayaran</label>

	<div class="col-sm-8">
		<input type="text" name="rekening_pembayaran" class="form-control" placeholder="Rekening Pembayaran" value="<?= $konfigurasi->rekening_pembayaran ?>" required>
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
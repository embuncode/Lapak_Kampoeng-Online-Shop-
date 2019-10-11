<?php

// Notifikasi error
echo validation_errors('<div class="alert alert-warning">', '</div>');
// Form open
echo form_open_multipart(base_url('admin/produsen/tambahkan'), ' class="form-horizontal"');

?>

<div class="form-group">
	<label class="col-md-2 control-label">Nama Produsen</label>

	<div class="col-sm-8">
		<input type="text" name="nama_produsen" class="form-control" placeholder="Nama Produsen" value="<?= set_value('nama_produsen') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Foto Produsen</label>

	<div class="col-sm-8">
		<input type="file" name="gambar" class="form-control" placeholder="Foto Produsen" value="<?= set_value('gambar') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Alamat</label>

	<div class="col-sm-8">
		<input type="text" name="alamat" class="form-control" placeholder="Alamat Produsen" value="<?= set_value('alamat') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Memproduksi</label>

	<div class="col-sm-8">
		<input type="text" name="produksi" class="form-control" placeholder="Memproduksi" value="<?= set_value('produksi') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Tempat Produksi</label>

	<div class="col-sm-8">
		<input type="text" name="tempat_produksi" class="form-control" placeholder="Tempat Produksi" value="<?= set_value('tempat_produksi') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Latar Belakang</label>

	<div class="col-sm-8">
		<textarea name="latar_belakang" id="editor" class="form-control" placeholder="Latar Belakang"><?= set_value('latar_belakang') ?></textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Whatsapp</label>

	<div class="col-sm-8">
		<input type="text" name="whatsapp" class="form-control" placeholder="No Whatsapp" value="<?= set_value('whatsapp') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Instagram</label>

	<div class="col-sm-8">
		<input type="text" name="instagram" class="form-control" placeholder="Instagram" value="<?= set_value('instagram') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Facebook</label>

	<div class="col-sm-8">
		<input type="text" name="facebook" class="form-control" placeholder="Alamat Facebook" value="<?= set_value('facebook') ?>" required>
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
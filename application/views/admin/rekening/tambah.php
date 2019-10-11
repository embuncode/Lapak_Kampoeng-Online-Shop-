<?php

// Notifikasi error
echo validation_errors('<div class="alert alert-warning">', '</div>');
// Form open
echo form_open(base_url('admin/rekening/tambah'), ' class="form-horizontal"');

?>

<div class="form-group">
	<label class="col-md-2 control-label">Nama Bank</label>

	<div class="col-sm-5">
		<input type="text" name="nama_bank" class="form-control" placeholder="Nama Bank" value="<?= set_value('nama_bank') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Nomor Rekening</label>

	<div class="col-sm-5">
		<input type="number" name="nomor_rekening" class="form-control" placeholder="Nomor Rekening" value="<?= set_value('nomor_rekening') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Pemilik Rekening</label>

	<div class="col-sm-5">
		<input type="text" name="nama_pemilik" class="form-control" placeholder="Pemilik Rekening" value="<?= set_value('nama_pemilik') ?>" required>
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
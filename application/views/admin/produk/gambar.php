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
echo form_open_multipart(base_url('admin/produk/gambar/'.$produk->id_produk), ' class="form-horizontal"');
?>

<div class="form-group">
	<label class="col-md-2 control-label">Judul Gambar</label>

	<div class="col-sm-8">
		<input type="text" name="judul_gambar" class="form-control" placeholder="Judul Gambar" value="<?= set_value('judul_gambar') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Judul Gambar</label>

	<div class="col-sm-5">
		<input type="file" name="gambar" class="form-control" placeholder="Gambar" value="<?= set_value('gambar') ?>" required>
	</div>
	<div class="col-md-4">
		<button class="btn btn-success btn-sm" name="submit" type="submit">
			<i class="fa fa-save"></i> Simpan + Unggah
		</button>

		<button class="btn btn-danger btn-sm" name="reset" type="reset">
			<i class="fa fa-times"></i> Reset
		</button>

		<a href="<?= base_url()?>admin/produk" class="btn btn-info btn-sm">
			<i class="fa fa-chevron-circle-left"></i> Kembali
		</a>
	</div>
</div>
<hr>

<?php echo form_close(); ?>

<?php

// Notifikasi ketika berhasil
if ($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
}

?>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="30px">No</th>
			<th>Gambar</th>
			<th>Judul</th>
			<th width="150px">Action</th>
		</tr>
	</thead>
	<tbody>

		<tr>
			<td>1</td>
			<td>
				<img src="<?= base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" class="img img-responsive img-thumbnail" width="60">
			</td>
			<td><?= $produk->nama_produk ?></td>
			<td>
			</td>
		</tr>

		<?php $no = 2; foreach ($gambar as $gambar) { ?>

		<tr>
			<td><?= $no++; ?></td>
			<td>
				<img src="<?= base_url('assets/upload/image/thumbs/'.$gambar->gambar) ?>" class="img img-responsive img-thumbnail" width="60">
			</td>
			<td><?= $gambar->judul_gambar ?></td>
			<td>
				<a href="<?= base_url('admin/produk/delete_gambar/'.$produk->id_produk.'/'.$gambar->id_gambar) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus gambar ini?')">
					<i class="fa fa-trash"> Hapus</i>
				</a>
			</td>
		</tr>

		<?php } ?>

	</tbody>
</table>
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
echo form_open_multipart(base_url('admin/produk/tambah'), ' class="form-horizontal"');
?>

<div class="form-group">
	<label class="col-md-2 control-label">Nama Produk</label>

	<div class="col-sm-8">
		<input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" value="<?= set_value('nama_produk') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Kode Produk</label>

	<div class="col-sm-8">
		<input type="text" name="kode_produk" class="form-control" placeholder="Kode Produk" value="<?= set_value('kode_produk') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Kategori Produk</label>

	<div class="col-sm-8">
		<select name="id_kategori" class="form-control"> 
			<?php 
				foreach ($kategori as $kategori) { ?>
					<option value="<?= $kategori->id_kategori ?>">
						<?= $kategori->nama_kategori; ?>
					</option>
			<?php } ?>
		</select>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Harga Produk</label>

	<div class="col-sm-8">
		<input type="number" name="harga" class="form-control" placeholder="Harga Produk" value="<?= set_value('harga') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Stok Produk</label>

	<div class="col-sm-8">
		<input type="number" name="stok" class="form-control" placeholder="Stok Produk" value="<?= set_value('stok') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Berat Produk</label>

	<div class="col-sm-8">
		<input type="text" name="berat" class="form-control" placeholder="Berat Produk" value="<?= set_value('berat') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Ukuran Produk</label>

	<div class="col-sm-8">
		<input type="text" name="ukuran" class="form-control" placeholder="Ukuran Produk" value="<?= set_value('ukuran') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Keterangan</label>

	<div class="col-sm-8">
		<textarea name="keterangan" id="editor" class="form-control" placeholder="Keterangan"><?= set_value('keterangan') ?></textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Keywords Produk</label>

	<div class="col-sm-8">
		<textarea name="keywords" class="form-control" placeholder="Keywords (untuk SEO Google)"><?= set_value('keywords') ?></textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Upload Produk</label>

	<div class="col-sm-8">
		<input type="file" name="gambar" class="form-control" required="required">
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Status Produk</label>

	<div class="col-sm-8">
		<select name="status_produk" class="form-control">
			<option value="Publish">Publikasikan</option>
			<option value="Draft">Simpan Ke Draft</option>
		</select>
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
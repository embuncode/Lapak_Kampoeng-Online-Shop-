<p>
	<a href="<?= base_url('admin/produk/tambah') ?>" class="btn btn-success btn-xs">
		<i class="fa fa-plus"> Tambah</i>
	</a>
	<a href="<?php echo base_url('print') ?>" class="btn btn-xs bg-blue">
		<i class="fa fa-print"> Print</i>
	</a>
</p>

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
			<th>Nama</th>
			<th>Stok</th>
			<th width="80px">Kategori</th>
			<th>Harga</th>
			<th width="80px">Status</th>
			<th width="200px">Action</th>
		</tr>
	</thead>
	<tbody>

		<?php $no = 1; foreach ($produk as $produk) { ?>

		<tr>
			<td><?= $no++; ?></td>
			<td>
				<img src="<?= base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" class="img img-responsive img-thumbnail" width="60">
			</td>
			<td><?= $produk->nama_produk ?></td>
			<td><?= $produk->stok ?></td>
			<td><?= $produk->nama_kategori ?></td>
			<td><?= number_format($produk->harga,'0',',','.') ?></td>
			<td><?= $produk->status_produk ?></td>
			<td>
				<a href="<?= base_url('admin/produk/gambar/'.$produk->id_produk) ?>" class="btn btn-success btn-xs">
					<i class="fa fa-image"> Gambar (<?= $produk->total_gambar ?>)</i>
				</a>

				<a href="<?= base_url('admin/produk/edit/'.$produk->id_produk) ?>" class="btn btn-warning btn-xs">
					<i class="fa fa-edit"> Edit</i>
				</a>

				<a href="<?= base_url('admin/produk/delete/'.$produk->id_produk) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?')">
					<i class="fa fa-trash-o"> Hapus</i>
				</a>
			</td>
		</tr>

		<?php } ?>

	</tbody>
</table>
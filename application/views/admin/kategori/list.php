<p>
	<a href="<?= base_url('admin/kategori/tambah') ?>" class="btn btn-success btn-xs">
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
			<th>No</th>
			<th>Nama</th>
			<th>Slug</th>
			<th>Urutan</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		<?php $no = 1; foreach ($kategori as $kategori) { ?>

		<tr>
			<td><?= $no++; ?></td>
			<td><?= $kategori->nama_kategori ?></td>
			<td><?= $kategori->slug_kategori ?></td>
			<td><?= $kategori->urutan ?></td>
			<td>
				<a href="<?= base_url('admin/kategori/edit/'.$kategori->id_kategori) ?>" class="btn btn-warning btn-xs">
					<i class="fa fa-edit"> Edit</i>
				</a>

				<a href="<?= base_url('admin/kategori/delete/'.$kategori->id_kategori) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?')">
					<i class="fa fa-trash-o"> Hapus</i>
				</a>
			</td>
		</tr>

		<?php } ?>

	</tbody>
</table>
<p>
	<a href="<?= base_url('admin/produsen/tambahkan') ?>" class="btn btn-success btn-xs">
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
			<th>Gambar</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Karya</th>
			<th>Deskripsi</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		<?php $no = 1; foreach ($produsen as $produsen) { ?>

		<tr>
			<td><?= $no++; ?></td>
			<td><?= $produsen->gambar ?></td>
			<td><?= $produsen->nama_produsen ?></td>
			<td><?= $produsen->alamat ?></td>
			<td><?= $produsen->produksi ?></td>
			<td><?= $produsen->latar_belakang ?></td>
			<td>
				<a href="<?= base_url('admin/produsen/edit/'.$produsen->id_produsen) ?>" class="btn btn-warning btn-xs">
					<i class="fa fa-edit"> Edit</i>
				</a>

				<a href="<?= base_url('admin/produsen/delete/'.$produsen->id_produsen) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?')">
					<i class="fa fa-trash-o"> Hapus</i>
				</a>
			</td>
		</tr>

		<?php } ?>

	</tbody>
</table>
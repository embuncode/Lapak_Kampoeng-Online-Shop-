<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th width="50%">Komentar</th>
			<th>Tanggal</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		<?php $no = 1; foreach ($komentar as $komentar) { ?>

		<tr>
			<td><?= $no++; ?></td>
			<td><?= $komentar->nama_pelanggan ?></td>
			<td><?= $komentar->komentar ?></td>
			<td><?= $komentar->tanggal_komentar ?></td>
			<td>
				<a href="<?= base_url('admin/komentar/delete/'.$komentar->id) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?')">
					<i class="fa fa-trash-o"> Hapus</i>
				</a>
			</td>
		</tr>

		<?php } ?>

	</tbody>
</table>
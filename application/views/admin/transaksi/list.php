<table class="table table-bordered" id="example1" style="width=100%; padding-left: 10px;"  >
	<thead>
		<tr class="bg-success">
			<th>No</th>
			<th>Pelanggan</th>
			<th>Kode</th>
			<th>Tanggal</th>
			<th>Jumlah Total</th>
			<th>Jumlah Item</th>
			<th>Status Bayar</th>
			<th width="21%">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1; foreach ($header_transaksi as $header_transaksi) { ?>
				
		<tr>
			<td><?= $i ?></td>
			<td><?= $header_transaksi->nama_pelanggan ?>
				<br><small>
					Telepon = <?= $header_transaksi->telepon ?>
					<br>Email = <?= $header_transaksi->email ?>
					<br>Alamat Kirim = <br><?= nl2br($header_transaksi->alamat) ?>
				</small>
			</td>
			<td><?= $header_transaksi->kode_transaksi ?></td>
			<td><?= date('d-m-Y', strtotime($header_transaksi->tanggal_transaksi)) ?></td>
			<td><?= number_format($header_transaksi->jumlah_transaksi) ?></td>
			<td><?= $header_transaksi->total_item ?></td>
			<td><?= $header_transaksi->status_bayar ?></td>
			<td>
				<div class="btn-group">
					<a href="<?= base_url('admin/transaksi/detail/'.$header_transaksi->kode_transaksi) ?>" class="btn btn-success btn-sm" ><i class="fa fa-eye"></i> Detail</a>
					<a href="<?= base_url('admin/transaksi/cetak/'.$header_transaksi->kode_transaksi) ?> " target="_blank" class="btn btn-info btn-sm"><i class="fa fa-upload"></i> Cetak</a>
					<a href="<?= base_url('admin/transaksi/status/'.$header_transaksi->kode_transaksi) ?> " class="btn btn-warning btn-sm"><i class="fa fa-check"></i> Status</a>
				</div>
			</td>
		</tr>

		<?php $i++; } ?>
	</tbody>
</table>
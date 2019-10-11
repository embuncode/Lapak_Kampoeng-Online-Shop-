<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-2 col-lg-3 p-b-50">
				<div class="leftbar p-r-20 p-r-0-sm">
					
					<!-- iNCLUDE MENU PELANGGAN -->
					<?php include('menu.php'); ?>
					
				</div>
			</div>

			<div class="col-sm-6 col-md-10 col-lg-9 p-b-50">

				<!-- RIWAYAT PELANGGAN -->
				<h3><?= $title; ?></h3>
				<br>
				<p>Berikut adalah riwayat belanja Anda</p>

					<?php 
					// Jika ada data transaksi maka tampilkan
					if ($header_transaksi) { ?>

						<table class="table table-bordered">
							<thead>
								<tr>
									<th width="20%">Kode Transaksi</th>
									<th><?= $header_transaksi->kode_transaksi ?></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Tanggal</td>
									<td> : <?= date('d-m-Y', strtotime($header_transaksi->tanggal_transaksi)) ?></td>
								</tr>
								<tr>
									<td>Jumlah Total</td>
									<td> : <?= number_format($header_transaksi->jumlah_transaksi) ?></td>
								</tr>
								<tr>
									<td>Status Bayar</td>
									<td> : <?= $header_transaksi->status_bayar ?></td>
								</tr>
							</tbody>
						</table>
							
						<table class="table table-bordered" style="width=100%; padding-left: 10px;"  >
							<thead>
								<tr class="bg-success">
									<th>No</th>
									<th>Kode</th>
									<th>Nama Produk</th>
									<th>Jumlah</th>
									<th>Harga</th>
									<th>Sub Total</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; foreach ($transaksi as $transaksi) { ?>
										
								<tr>
									<td><?= $i ?></td>
									<td><?= $transaksi->kode_produk ?></td>
									<td><?= $transaksi->nama_produk ?></td>
									<td><?= number_format($transaksi->jumlah) ?></td>
									<td><?= number_format($transaksi->harga) ?></td>
									<td><?= number_format($transaksi->total_harga) ?></td>
								</tr>

								<?php $i++; } ?>
							</tbody>
						</table>

					<?php 
					// Jika tidak ada data transaksi maka ada notifikasi
					} else { ?>

						<p class="alert alert-success">
							<i class="fa fa-warning"></i> Belum ada data transaksi
						</p>

					<?php } ?>
			</div>
		</div>
	</div>
</section>
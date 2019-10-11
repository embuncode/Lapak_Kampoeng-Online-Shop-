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
							
						<table class="table table-bordered" style="width=100%; padding-left: 10px;"  >
							<thead>
								<tr class="bg-success">
									<th>No</th>
									<th>Kode</th>
									<th>Tanggal</th>
									<th>Jumlah Total</th>
									<th>Jumlah Item</th>
									<th>Status Bayar</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; foreach ($header_transaksi as $header_transaksi) { ?>
										
								<tr>
									<td><?= $i ?></td>
									<td><?= $header_transaksi->kode_transaksi ?></td>
									<td><?= date('d-m-Y', strtotime($header_transaksi->tanggal_transaksi)) ?></td>
									<td><?= number_format($header_transaksi->jumlah_transaksi) ?></td>
									<td><?= $header_transaksi->total_item ?></td>
									<td><?= $header_transaksi->status_bayar ?></td>
									<td>
				
										<div class="btn-group" role="group">
    										<button id="group" type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      										Pilih
    										</button>
    										<div class="dropdown-menu" aria-labelledby="group">
    										  <a class="dropdown-item" href="<?= base_url('dashboard/detail/'.$header_transaksi->kode_transaksi) ?>"><i class="fa fa-eye"></i> Detail Belanja</a>
    										  <a class="dropdown-item" href="<?= base_url('dashboard/konfirmasi/'.$header_transaksi->kode_transaksi) ?>"><i class="fa fa-upload"></i> Konfirmasi</a>
    										</div>
  										</div>
									</td>
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
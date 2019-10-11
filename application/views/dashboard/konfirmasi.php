<!-- ========================================================================================== -->
<!-- HALAMAN KONFIRMASI -->
<!-- ========================================================================================== -->
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
								<tr>
									<td>Bukti Bayar</td>
									<td> : <?php if ($header_transaksi->bukti_bayar != "") { ?>
										<img src="<?= base_url('assets/upload/image/'.$header_transaksi->bukti_bayar) ?>" class="img img-thumbnail" width="200">
										<?php } else { echo 'Belum ada bukti bayar'; }?>
									</td>
								</tr>
							</tbody>
						</table>
						
					<?php 
						// Error upload konfirmasi
						if(isset($error)) {
							echo '<p class="alert alert-warning">'.$error.'</p>';
						}
						// Notification errors
						echo validation_errors('<p class="alert alert-warning">','</p>');

						// Form open konfirmasi
						echo form_open_multipart(base_url('dashboard/konfirmasi/'.$header_transaksi->kode_transaksi));
					?>

					<table class="table">
						<tbody>
							<tr>
								<td width="35%"><b>Pembayaran Ke Rekening</b></td>
								<td>
									<select name="id_rekening" class="form-control">
										<?php foreach ($rekening as $rekening) { ?>
											<option value="<?= $rekening->id_rekening ?>" <?php if ($header_transaksi->id_rekening==$rekening->id_rekening) { echo "selected";} ?>>
												<?= $rekening->nama_bank ?> (No. Rekening: <?php $rekening->nomor_rekening; ?> 
												A.N <?= $rekening->nama_pemilik ?>)
											</option>
										<?php } ?>
									</select>
								</td>
							</tr>
							<tr>
								<td>Tanggal Bayar</td>
								<td>
									<input type="text" name="tanggal_bayar" class="form-control" placeholder="dd-mm-yyyy" 
									value="<?php if(isset($_POST['tanggal_bayar'])) {echo set_value('tanggal_bayar'); } elseif ($header_transaksi->tanggal_bayar!="") {echo $header_transaksi->tanggal_bayar;} else { echo date('d-m-Y'); } ?>">
								</td>
							</tr>
							<tr>
								<td>Jumlah Pembayaran</td>
								<td>
									<input type="number" class="form-control" name="jumlah_bayar" placeholder="Jumlah Pembayaran" value="<?php if(isset($_POST['jumlah_bayar'])) { echo set_value('jumlah_bayar'); } elseif ($header_transaksi->jumlah_bayar!="") {echo $header_transaksi->jumlah_bayar; } else { echo $header_transaksi->jumlah_transaksi; } ?>">
								</td>
							</tr>
							<tr>
								<td>Dari Bank</td>
								<td>
									<input type="text" name="nama_bank" class="form-control" value="<?= $header_transaksi->nama_bank; ?>" placeholder="Nama Bank">
									<small><i>Misalkan BANK BRI</i></small>
								</td>
							</tr>
							<tr>
								<td>Dari Nomor Rekening</td>
								<td>
									<input type="text" name="rekening_pembayaran" class="form-control" value="<?= $header_transaksi->rekening_pembayaran; ?>" placeholder="Nomor Rekening">
									<small><i>Misalkan BANK BRI</i></small>
								</td>
							</tr>
							<tr>
								<td>Nama Pemilik Rekening</td>
								<td>
									<input type="text" name="rekening_pelanggan" class="form-control" value="<?= $header_transaksi->rekening_pelanggan; ?>" placeholder="Nama Pemilik Rekening">
									<small><i>Misalkan Sigit wasis subekti</i></small>
								</td>
							</tr>
							<tr>
								<td>Bukti Pembayaran</td>
								<td>
									<input type="file" name="bukti_bayar" class="form-control" placeholder="Upload Bukti Pembayaran">
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<div class="btn-group">
										<button class="btn btn-success btn-sm" type="submit" name="submit"><i class="fa fa-upload"></i> Submit</button>
										<button class="btn btn-info btn-sm" type="reset" name="reset"><i class="fa fa-times"></i> Reset</button>
									</div>
								</td>
							</tr>
						</tbody>
					</table>	

					<?php
						// Tutup form konfirmasi
						echo form_close();
					
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
<!-- ======================================================================================== -->
<!-- DATA CHECKOUT PELANGGAN -->
<!-- ======================================================================================== -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		<!-- Cart item -->
		<div class="container-table-cart pos-relative">
			<div class="wrap-table-shopping-cart bgwhite">
				<h3><?= $title ?></h3><hr>
				<div class="clearfix"></div>

				<?php if ($this->session->flashdata('sukses')) {
					echo '<div class="alert alert-warning">';
					echo $this->session->flashdata('sukses');
					echo '</div>';
				} ?>

				<table class="table-shopping-cart">
					<tr class="table-head">
						<th class="column-1">Gambar</th>
						<th class="column-2">Produk</th>
						<th class="column-3">Harga</th>
						<th class="column-4 p-l-70">Jumlah</th>
						<th class="column-5" width="15%">Sub Total</th>
						<th class="column-6" width="17%">Action</th>
					</tr>

					<?php
						// looping data belanja
						foreach ($keranjang as $keranjang) { 
						// Ambil data belanja
						$id_produk = $keranjang['id'];
						$produk = $this->produk_model->detail($id_produk);

						// Form Update Pada Shopping Cart
						echo form_open(base_url('belanja/update_cart/'.$keranjang['rowid']));
					?>
					<tr class="table-row">
						<td class="column-1">
							<div class="cart-img-product b-rad-4 o-f-hidden">
								<img src="<?= base_url('assets/upload/image/'.$produk->gambar) ?>" alt="<?= $keranjang['name'] ?>">
							</div>
						</td>
						<td class="column-2"><?= $keranjang['name'] ?></td>	
						<td class="column-3">Rp. <?= number_format($keranjang['price'], '0',',','.') ?></td>
						<td class="column-4">
							<div class="flex-w bo5 of-hidden w-size17">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="qty" value="<?= $keranjang['qty'] ?>">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>
						</td>
						<td class="column-5">Rp.
							<?php
								$sub_total = $keranjang['price'] * $keranjang['qty'];
								echo number_format($sub_total, '0',',','.'); 
							?>
						</td>
						<td>
							<button type="submit" class="btn btn-success btn-sm" name="update">
								<i class="fa fa-edit"></i>Update
							</button>
							<a href="<?= base_url('belanja/hapus/'.$keranjang['rowid']) ?>" class="btn btn-warning btn-sm">
								<i class="fa fa-trash-o"></i>Hapus
							</a>
						</td>
					</tr>

					<?php 
					// Form Close Update shooping cart
						echo form_close();
					// End looping keranjang belanja 
						} 
					?>
					<tr class="table-row bg-info" style="font-weight: bold; color: white !important">
						<td colspan="4" class="column-1"><b>Total Belanja</b></td>
						<td colspan="2" class="column-2">Rp. <?= number_format($this->cart->total(), '0',',','.') ?></td>
					</tr>
				</table>
				<br>

				<!-- FORM UNTUK CHECKOUT PELANGGAN -->
				<?php 
					echo form_open(base_url('belanja/checkout')); 
					$kode_transaksi = date('dmY').strtoupper(random_string('alnum', 8));
				?>

				<input type="hidden" name="id_pelanggan" value="<?= $pelanggan->id_pelanggan ?>">
				<input type="hidden" name="jumlah_transaksi" value="<?= $this->cart->total(); ?>">
				<input type="hidden" name="tanggal_transaksi" value="<?= date('Y-m-d'); ?>">

					<table class="table">
						<thead>
							<tr>
								<th>Kode Transaksi</th>
								<th>
									<input type="text" name="kode_transaksi" class="form-control" value="<?= $kode_transaksi ?>" readonly required>
								</th>
							</tr>
							<tr>
								<th>Nama Penerima</th>
								<th>
									<input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Lengkap" value="<?= $pelanggan->nama_pelanggan ?>" required>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Email Penerima</td>
								<td>
									<input type="email" name="email" class="form-control" placeholder="Email" value="<?= $pelanggan->email ?>" required>
								</td>
							</tr>
							<tr>
								<td>Telepon Penerima</td>
								<td>
									<input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?= $pelanggan->telepon ?>" required>
								</td>
							</tr>
							<tr>
								<td>Alamat Pengiriman</td>
								<td>
									<input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?= $pelanggan->alamat ?>" required>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<button class="btn btn-success btn-sm" type="submit">
										<i class="fa fa-save"></i> Check Out Sekarang
									</button>
									<button class="btn btn-default btn-sm" type="reset">
										<i class="fa fa-save"></i> Reset
									</button>
								</td>
							</tr>
						</tbody>
					</table>

				<?php echo form_close(); ?>
					
			</div>
		</div>

		<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
			<!-- div class="flex-w flex-m w-full-sm">
	
			</div>

			<div class="size10 trans-0-4 m-t-10 m-b-10">

			</div> -->
		</div>
	</div>
</div>
</section>
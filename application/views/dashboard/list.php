<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
				<div class="leftbar p-r-20 p-r-0-sm">
					
					<!-- iNCLUDE MENU PELANGGAN -->
					<?php include('menu.php'); ?>

				</div>
			</div>

			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">

				<!-- Product -->
				<div class="alert alert-success">
					<h1>Selamat Datang <i><strong><?= $this->session->userdata('nama_pelanggan'); ?></strong></i></h1>
				</div>

				<i>Jangan lupa berikan Ulasan kepada Kami, Agar kami selalu memperbarui sesuai yang Anda inginkan! </i><br><br>

				<?php echo form_open(base_url('komentar/tambah')); ?>

					<table class="table">
						<thead>
							<tr>
								<th>
									<textarea type="text" name="komentar" class="form-control" rows="8" placeholder="Ulasan Anda" required></textarea>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<button class="btn btn-success btn-sm">
										<i class="fa fa-save"></i> Kirim
									</button>
								</td>
							</tr>
						</tbody>
					</table>

				<?= form_close();?>

			</div>
		</div>
	</div>
</section>
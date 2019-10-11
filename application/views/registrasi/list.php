<!-- ========================================================================================== -->
<!-- REGISTRASI PELANGGAN -->
<!-- ========================================================================================== -->

<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		<!-- Cart item -->
		<div class="pos-relative">
			<div class="bgwhite">
				<h3><?= $title ?></h3><hr>
				<div class="clearfix"></div>

				<?php if ($this->session->flashdata('sukses')) {
					echo '<div class="alert alert-warning">';
					echo $this->session->flashdata('sukses');
					echo '</div>';
				} ?>

				<p class="alert alert-success">Sudah memiliki Akun? Silahkan <a href="<?= base_url('masuk') ?>" class="btn btn-info btn-sm">login</a></p>

				<div class="col-md-12">
					<?php
					// Display Error Registrasi
					echo validation_errors('<div class="alert alert-warning">', '</div>');

					// Form Open
					echo form_open(base_url('registrasi'), 'class="leave-comment"'); ?>

					<table class="table">
						<thead>
							<tr>
								<th>Nama</th>
								<th>
									<input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Lengkap" value="<?= set_value('nama_pelanggan') ?>" required>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Email</td>
								<td>
									<input type="email" name="email" class="form-control" placeholder="Email" value="<?= set_value('email') ?>" required>
								</td>
							</tr>
							<tr>
								<td>Password</td>
								<td>
									<input type="password" name="password" class="form-control" placeholder="Password" value="<?= set_value('password') ?>" required>
								</td>
							</tr>
							<tr>
								<td>Telepon</td>
								<td>
									<input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?= set_value('telepon') ?>" required>
								</td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td>
									<textarea name="alamat" class="form-control" placeholder="Alamat" value="<?= set_value('alamat') ?>" required></textarea>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<button class="btn btn-success btn-sm" type="submit">
										<i class="fa fa-save"></i> Simpan
									</button>
									<button class="btn btn-default btn-sm" type="reset">
										<i class="fa fa-save"></i> Reset
									</button>
								</td>
							</tr>
						</tbody>
					</table>

					<?= form_close(); ?>
				</div>

			</div>
		</div>

		<!-- <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
			<div class="flex-w flex-m w-full-sm">
				
			</div>
			<div class="size10 trans-0-4 m-t-10 m-b-10">
				
			</div>
		</div> -->
	</div>
</div>
</section>
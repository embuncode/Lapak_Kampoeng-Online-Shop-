<!-- ========================================================================================== -->
<!-- BELANJA SUKSES-->
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

				<p class="alert alert-success">
					Terimakasih atas pembelian anda!
					Barang akan segera kami proses.
				</p>


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
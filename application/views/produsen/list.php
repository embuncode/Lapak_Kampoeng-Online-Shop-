<!-- Our product -->
<section class="bgwhite p-t-45 p-b-58">
	<div class="container">
		<div class="sec-title p-b-22">
			<h3 class="m-text5 t-center">
				Profil Produsen
			</h3>
		</div>

		<!-- Tab01 -->
		<div class="tab01">

			<!-- Tab panes -->
			<div class="tab-content p-t-35">
				<!-- - -->
				<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
					<div class="row">

						<?php foreach ($produsen as $produsen) { ?>

						<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
							<!-- block1 -->
							<div class="block1 hov-img-zoom pos-relative m-b-30">
								<img src="<?= base_url('assets/template/images/avatar.jpg') ?>" alt="IMG-BENNER">

								<div class="block1-wrapbtn w-size2">
									<!-- Button -->
									<a href="<?= base_url('produsen/detail/'.$produsen->id_produsen) ?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
									Detail
									</a>
								</div>
							</div>
						</div>

						<?php } ?>

					</div>
				</div>

			</div>
		</div>
	</div>
</section>
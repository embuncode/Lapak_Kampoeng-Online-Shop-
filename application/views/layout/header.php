<!-- Header -->
<header class="header1">
	<!-- Header desktop -->
	<div class="container-menu-header">
		<div class="topbar">
			<div class="topbar-social">
				<a href="<?= $site->facebook ?>" class="topbar-social-item fa fa-facebook" style="color: black;"></a>
				<a href="<?= $site->instagram ?>" class="topbar-social-item fa fa-instagram" style="color: black;"></a>
				<a href="#" class="topbar-social-item fa fa-twitter" style="color: black;"></a>
				<a href="#" class="topbar-social-item fa fa-youtube" style="color: black;"></a>
			</div>

			<span class="topbar-child1" style="color: black;">
				<?= $site->alamat ?>
			</span>

			<div class="topbar-child2">
				<div class="topbar-language rs1-select2">
					<div class="btn-grup">
						<a href="<?= base_url('login') ?>" class="btn btn-warning btn-sm"><i class="fa fa-sign-in"></i> Login</a>
						<a href="<?= base_url('registrasi') ?>" class="btn btn-info btn-sm"><i class="fa fa-user-plus"></i> Registrasi</a>
					</div>
				</div>
			</div>
		</div>
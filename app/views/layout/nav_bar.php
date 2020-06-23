<div class="left-sidebar-pro">
	<nav id="sidebar" class="">
		<div class="sidebar-header">
			<a href="<?php echo base_url('dashboard'); ?>"><img class="main-logo" src="<?php echo base_url('public/assets/'); ?>icon/logogymhome.png" alt="" /></a>
			<strong><a href="<?php echo base_url('dashboard'); ?>"><img src="<?php echo base_url('public/assets/'); ?>icon/logogymmobile.png" alt="" /></a></strong>
		</div>
		<div class="left-custom-menu-adp-wrap comment-scrollbar">
			<nav class="sidebar-nav left-sidebar-menu-pro">
				<ul class="metismenu" id="menu1">
					<?php if ($this->fungsi->user_login()['level'] == 2 || $this->fungsi->user_login()['level'] == 3) : ?>
						<li <?php echo $this->uri->segment(1) == 'user' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
							<a title="User" href="<?php echo base_url('user'); ?>" aria-expanded="false">
								<i class="fa fa-fw fa-home" aria-hidden="true"></i>
								<span class="mini-click-non">Dashboard</span></a>
						</li>
					<?php endif; ?>
					<?php if ($this->fungsi->user_login()['level'] == 1) : ?>
						<li>
							<a title="Dashboard" href="<?php echo base_url('dashboard'); ?>" aria-expanded="false">
								<i class="fa fa-fw fa-home"></i>
								<span class="mini-click-non">Dashboard</span>
							</a>
						</li>
						<li>
							<a class="has-arrow" href="#" aria-expanded="false">
								<i class="fa fa-fw fa-users"></i>
								<span class="mini-click-non">Member</span>
							</a>
							<ul class="submenu-angle" aria-expanded="true">
								<li>
									<a href="<?php echo base_url('admin/add_member'); ?>"><span class="mini-sub-pro">Add Member</span></a>
								</li>
								<li>
									<a href="<?php echo base_url('admin/member'); ?>"><span class="mini-sub-pro">Member</span></a>
								</li>
								<li>
									<a href="<?php echo base_url('admin/peserta_paket'); ?>"><span class="mini-sub-pro">Peserta Paket</span></a>
								</li>
							</ul>
						</li>
					<?php endif; ?>
					<li>
						<a class="has-arrow" href="#" aria-expanded="false">
							<i class="fa fa-fw fa-folder-open" aria-hidden="true"></i>
							<span class="mini-click-non">Produk</span>
						</a>
						<ul class="submenu-angle" aria-expanded="true">
							<?php if ($this->fungsi->user_login()['level'] == 1) : ?>
								<li>
									<a title="Paket" href="<?php echo base_url('admin/paket'); ?>"><span class="mini-sub-pro">Paket</span></a>
								</li>
								<li>
									<a title="Fasilitas" href="<?php echo base_url('admin/fasilitas'); ?>"><span class="mini-sub-pro">Fasilitas</span></a>
								</li>
								<li>
									<a title="Senam" href="<?php echo base_url('admin/senam'); ?>"><span class="mini-sub-pro">Senam</span></a>
								</li>
							<?php else : ?>
								<li>
									<a href="<?php echo base_url('user.paket'); ?>"><span class="mini-sub-pro">Paket</span></a>
								</li>
								<li>
									<a href="<?php echo base_url('user.fasilitas'); ?>"><span class="mini-sub-pro">Fasilitas</span></a>
								</li>
							<?php endif; ?>
						</ul>
					</li>
					<li>
						<a class="has-arrow" href="#" aria-expanded="false">
							<i class="fa fa-fw fa-folder-open" aria-hidden="true"></i>
							<span class="mini-click-non">Transaksi</span>
						</a>
						<ul class="submenu-angle" aria-expanded="true">
							<?php if ($this->fungsi->user_login()['level'] == 1) : ?>
								<li>
									<a href="<?php echo base_url('admin/transaksi'); ?>">
										<span class="mini-sub-pro">Transaksi</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('admin/konfirmasi'); ?>">
										<span class="mini-sub-pro">Konfirmasi</span>
									</a>
								</li>
							<?php else : ?>
								<li>
									<a href="<?php echo base_url('user.transaksi'); ?>">
										<span class="mini-sub-pro">Transaksi</span>
									</a>
								</li>
							<?php endif; ?>
						</ul>
					</li>
					<?php if ($this->fungsi->user_login()['level'] == 2 || $this->fungsi->user_login()['level'] == 3) : ?>
						<li>
							<a title="Info" href="<?php echo base_url('info'); ?>">
								<i class="fa fa-fw fa-info-circle"></i>
								<span class="mini-sub-pro">Info</span>
							</a>
						</li>
					<?php endif; ?>
					<?php if ($this->fungsi->user_login()['level'] == 1) : ?>
						<li>
							<a class="has-arrow" href="#" aria-expanded="false">
								<i class="fa fa-fw fa-money" aria-hidden="true"></i>
								<span class="mini-click-non">Laporan</span>
							</a>
							<ul class="submenu-angle" aria-expanded="true">
								<li>
									<a href="<?php echo base_url('admin/laporan_paket'); ?>"><span class="mini-sub-pro">Lap. Paket</span></a>
								</li>
								<li>
									<a href="<?php echo base_url('admin/laporan_fasilitas'); ?>"><span class="mini-sub-pro">Lap. Fasilitas</span></a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php echo base_url('admin/instruktur'); ?>"><span class="mini-sub-pro"><i class="fa fa-fw fa-users"></i> Instruktur</span></a>
						</li>

						<li>
							<a href="<?php echo base_url('admin/galeri'); ?>">
								<span class="mini-sub-pro">
									<i class="fa fa-fw fa-image"></i> Galeri
								</span>
							</a>
						</li>

						<li>
							<a title="Info" href="<?php echo base_url('info'); ?>">
								<i class="fa fa-fw fa-info-circle" rue"></i>
								<span class="mini-sub-pro">Info</span>
							</a>
						</li>
					<?php endif; ?>
				</ul>
			</nav>
		</div>
	</nav>
</div>
<!-- End Left menu area -->

<!-- Start Welcome area -->
<div class="all-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="logo-pro">
					<a href="<?php echo base_url('dashboard'); ?>"><img class="main-logo" src="<?php echo base_url('public/assets/'); ?>icon/logogymmobile.png" /></a>
				</div>
			</div>
		</div>
	</div>
	<div class="header-advance-area">
		<div class="header-top-area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="header-top-wraper">
							<div class="row">
								<div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
									<div class="menu-switcher-pro">
										<button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
											<i class="educate-icon educate-nav"></i>
										</button>
									</div>
								</div>
								<div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
									<div class="header-top-menu tabl-d-n">
										<ul class="nav navbar-nav mai-top-nav">
											<!-- <?php if ($this->fungsi->user_login()['level'] == 3) : ?>
												<li class="nav-item"><a href="#" class="nav-link">Join Member</a>
												</li>
											<?php endif; ?> -->
										</ul>
									</div>
								</div>
								<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
									<div class="header-right-info">
										<ul class="nav navbar-nav mai-top-nav header-right-menu">
											<li class="nav-item">
												<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
													<img src="<?php echo base_url('public/assets/profile/') . $this->fungsi->user_login()['foto']; ?>" />
													<span class="admin-name"><?php echo $this->fungsi->user_login()['nama']; ?></span>
													<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
												</a>
												<ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
													<li><a href="<?php echo base_url('myprofile'); ?>"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
													</li>
													<li><a href="<?php echo base_url('logout'); ?>"><span class="edu-icon edu-locked author-log-ic"></span>Logout</a>
													</li>
												</ul>
											</li>
											<li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-menu"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Menu start -->
		<div class="mobile-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="mobile-menu">
							<nav id="dropdown">
								<ul class="mobile-menu-nav">
									<li><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
									<li><a data-toggle="collapse" data-target="#Charts" href="#">Member<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
										<ul class="collapse dropdown-header-top">
											<li><a href="add-member.html">Add Member</a></li>
											<li><a href="member.html">List Member</a></li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#Charts" href="#">Peng. Fasilitas<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
										<ul class="collapse dropdown-header-top">
											<li><a href="">Member</a></li>
											<li><a href="">Insidentil</a></li>
										</ul>
									</li>
									<li><a data-toggle="collapse" data-target="#Charts" href="#">Master Data<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
										<ul class="collapse dropdown-header-top">
											<li><a href="">Paket</a></li>
											<li><a href="">Fasilitas</a></li>
											<li><a href="">Jenis Senam</a></li>
											<li><a href="">Instruktur</a></li>
											<li><a href="">Jadwal</a></li>
										</ul>
									</li>
									<li>
										<a data-toggle="collapse" data-target="#Charts" href="#">Laporan<span class="admin-project-icon edu-icon edu-down-arrow"></span>
										</a>
										<ul class="collapse dropdown-header-top">
											<li><a href="">Lap. Paket</a></li>
											<li><a href="">Lap. Insidentil</a></li>
											<li><a href="">Lap. Kartu</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Menu end -->
		<div class="breadcome-area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="breadcome-list">
							<?php if ($this->fungsi->user_login()['level'] == 3) : ?>
								<a href="<?php echo base_url('daftar'); ?>" class="btn btn-custon-three btn-primary">Daftar Sebagai Member</a>
							<?php endif; ?>
							<h5 class="text-center"><?php echo $topik; ?></h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="analytics-sparkle-area">
	<div class="container-fluid">
		<div class="row">
			<?php if ($this->fungsi->user_login()['level'] == 2) : ?>
				<div class="col-md-3">
					<div class="analytics-sparkle-line reso-mg-b-30">
						<div class="analytics-content">
							<h5>My Paket</h5>
							<h2>
								<span class="counter"><?php echo $totalpaket; ?></span>
								<span class="tuition-fees">Jumlah Paket</span>
							</h2>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="analytics-sparkle-line reso-mg-b-30">
						<div class="analytics-content">
							<h5>Fasilitas</h5>
							<h2><span class="counter"><?php echo $totalfasmem; ?></span> <span class="tuition-fees">Jumlah Fasilitas</span></h2>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="white-box analytics-info-cs mg-b-10 res-mg-t-30 table-mg-t-pro-n res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
						<h3 class="box-title">Belum Dibayar</h3>
						<ul class="list-inline two-part-sp">
							<li>
								<div id="sparklinedash">
									<a href="" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;">View</a>
									<!-- <canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas> -->
								</div>
							</li>
							<li class="text-right sp-cn-r">
								<!-- <i class="fa fa-level-down" aria-hidden="true"></i> -->
								<span class="counter text-success">1500</span>
							</li>
						</ul>
					</div>
				<?php elseif ($this->fungsi->user_login()['level'] == 3) : ?>
					<div class="col-md-6">
						<div class="analytics-sparkle-line reso-mg-b-30">
							<div class="analytics-content">
								<h5>Fasilitas</h5>
								<h2><span class="counter"><?php echo $totalfasmem; ?></span> <span class="tuition-fees">Jumlah Fasilitas</span></h2>
							</div>
						</div>
					</div>
					<!-- <div class="col-md-6">
					<div class="analytics-sparkle-line reso-mg-b-30">
						<div class="analytics-content">
							<h5>Jenis Senam</h5>
							<h2><span class="counter">2</span> <span class="tuition-fees">Jumlah Jenis Senam</span></h2>
						</div>
					</div>
				</div> -->
				<?php endif; ?>
				</div>
		</div>
	</div>
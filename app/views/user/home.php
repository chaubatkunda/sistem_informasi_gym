<div class="analytics-sparkle-area">
	<div class="container-fluid">
		<div class="row">
			<?php if ($this->fungsi->user_login()['level'] == 2) : ?>
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<div class="analytics-sparkle-line reso-mg-b-30">
						<div class="analytics-content">
							<h5>Paket</h5>
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
			<?php elseif ($this->fungsi->user_login()['level'] == 3) : ?>
				<div class="col-md-6">
					<div class="analytics-sparkle-line reso-mg-b-30">
						<div class="analytics-content">
							<h5>Fasilitas</h5>
							<h2><span class="counter"><?php echo $totalfasmem; ?></span> <span class="tuition-fees">Jumlah Fasilitas</span></h2>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
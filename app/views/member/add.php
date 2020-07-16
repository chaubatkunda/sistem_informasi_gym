<div class="container-fluid">
	<form action="" method="post" class="form-horizontal">
		<div class="row">
			<div class="col-md-6">
				<div class="card-title">
					<strong>IDENTITAS</strong> MEMBER
				</div>
				<div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
					<div class="form-group">
						<label class="control-label col-sm-3" for="">ID</label>
						<div class="col-sm-9">
							<input type="text" name="idmember" class="form-control" value="<?php echo $this->fungsi->geneRateIdMember(); ?>" readonly>
							<input type="hidden" name="tr_fasilitas" class="form-control" value="<?php echo $this->fungsi->kodeTransFasilitas(); ?>" readonly>
							<input type="hidden" name="tr_paket" class="form-control" value="<?php echo $this->fungsi->kodeTransPaket(); ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="nama">Nama</label>
						<div class="col-sm-9">
							<input type="text" id="nama" name="nama" class="form-control" value="<?php echo set_value('nama'); ?>" placeholder="Nama" autocomplete="off" autofocus>
							<small class="text-danger"><?php echo form_error('nama'); ?></small>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="telp">No Telp</label>
						<div class="col-sm-9">
							<input type="text" name="notelp" id="telp" class="form-control" value="<?php echo set_value('notelp'); ?>" placeholder="No Telp">
							<small class="text-danger"><?php echo form_error('notelp'); ?></small>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="alamat">Alamat</label>
						<div class="col-sm-9">
							<textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"></textarea>
							<small class="text-danger"><?php echo form_error('alamat'); ?></small>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card-title">
					<strong>AKUN</strong> MEMBER
				</div>
				<div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
					<div class="form-group">
						<label class="control-label col-sm-3">Username</label>
						<div class="col-sm-9">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" name="username" class="form-control" value="<?php echo set_value('username'); ?>" placeholder="Username">
							</div>
							<small class="text-danger"><?php echo form_error('username'); ?></small>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Password</label>
						<div class="col-sm-9">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-key"></i></span>
								<input type="password" name="password1" class="form-control" placeholder="Password">
							</div>
							<small class="text-danger"><?php echo form_error('password1'); ?></small>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Konfirmasi Password</label>
						<div class="col-sm-9">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-key"></i></span>
								<input type="password" name="password2" class="form-control" placeholder="Konfirmasi Password">
							</div>
							<small class="text-danger"><?php echo form_error('password2'); ?></small>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col col-md-12 text-center">
				<div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
					<button type="submit" class="btn btn-primary">
						Continue <i class="fa fa-chevron-circle-right"></i>
					</button>
				</div>
			</div>
		</div>
	</form>
</div>
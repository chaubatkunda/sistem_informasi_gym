<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="sparkline12-list">
				<div class="all-form-element-inner">
					<form action="" method="post">
						<div class="form-group-inner">
							<div class="row">
								<div class="col-md-3">
									<label class="login2 pull-right pull-right-pro">ID</label>
								</div>
								<div class="col-md-4">
									<label class="form-control"><?php echo $this->fungsi->idFasilitas(); ?></label>
									<input type="hidden" name="idfasilitas" class="form-control" value="<?php echo $this->fungsi->idFasilitas(); ?>" readonly />
								</div>
							</div>
						</div>
						<div class="form-group-inner">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<label class="login2 pull-right pull-right-pro">Fasilitas</label>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<input type="text" name="fasilitas" class="form-control" placeholder="Fasilitas" autofocus autocomplete="off" value="<?php echo set_value('fasilitas'); ?>" />
									<small class="text-danger"><?php echo form_error('fasilitas'); ?></small>
								</div>
							</div>
						</div>
						<div class="form-group-inner">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<label class="login2 pull-right pull-right-pro">Durasi Pemakaian</label>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<select name="durasi" id="" class="form-control">
										<option value="">--Pilih--</option>
										<?php foreach ($durasi as $d) : ?>
											<option value="<?php echo $d; ?>"><?php echo $d; ?> Jam</option>
										<?php endforeach; ?>
									</select>
									<small class="text-danger"><?php echo form_error('fasilitas'); ?></small>
								</div>
							</div>
						</div>
						<div class="form-group-inner">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<label class="login2 pull-right pull-right-pro">Harga</label>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<input type="text" name="harga" class="form-control" autocomplete="off" placeholder="Harga" value="<?php echo set_value('harga'); ?>" />
									<small class="text-danger"><?php echo form_error('harga'); ?></small>
								</div>
							</div>
						</div>
						<div class="form-group-inner">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<label class="login2 pull-right pull-right-pro">Tanggal Aktif</label>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<input type="text" name="tgl_masuk" data-mask="99-99-9999" class="form-control" placeholder="Contoh : 20-05-2020" />
								</div>
							</div>
						</div>
						<div class="form-group-inner">
							<div class="login-btn-inner">
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-9">
										<div class="login-horizental cancel-wp pull-left form-bc-ele">
											<button class="btn btn-primary" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>
												Simpan</button>
											<a href="<?php echo base_url('admin/fasilitas'); ?>" class="btn btn-danger">
												<i class="fa fa-times edu-danger-error" aria-hidden="true"></i> Batal
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
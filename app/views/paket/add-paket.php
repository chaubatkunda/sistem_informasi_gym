<div class="basic-form-area mg-b-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline12-list">
					<div class="sparkline12-graph">
						<div class="basic-login-form-ad">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="all-form-element-inner">
										<form action="" method="post">
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
														<label class="login2 pull-right pull-right-pro">ID</label>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
														<input type="text" name="idpaket" class="form-control" value="<?php echo $this->fungsi->kodePaket(); ?>" readonly />
													</div>
												</div>
											</div>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
														<label class="login2 pull-right pull-right-pro">Paket</label>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
														<input type="text" name="paket" class="form-control" placeholder="Paket" autofocus autocomplete="off" value="<?php echo set_value('paket'); ?>" />
														<small class="text-danger"><?php echo form_error('paket'); ?></small>
													</div>
												</div>
											</div>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
														<label class="login2 pull-right pull-right-pro">Durasi Paket</label>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
														<select name="durasi" id="" class="form-control">
															<option value="">--Pilih--</option>
															<?php foreach ($durasi as $d) : ?>
																<option value="<?php echo $d; ?>"><?php echo $d; ?> Bulan</option>
															<?php endforeach; ?>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
														<label class="login2 pull-right pull-right-pro">Harga</label>
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
														<input type="number" name="harga" class="form-control" placeholder="Harga" value="<?php echo set_value('harga'); ?>" />
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
														<input type="text" name="tgl_masuk" data-mask="99-99-9999" class="form-control" placeholder="Masukan Tanggal" />
														<!-- <span class="help-block">dd/mm/yyyy</span> -->
													</div>
												</div>
											</div>

											<div class="form-group-inner">
												<div class="login-btn-inner">
													<div class="row">
														<div class="col-lg-3"></div>
														<div class="col-lg-9">
															<div class="login-horizental cancel-wp pull-left form-bc-ele">
																<button class="btn btn-custon-three btn-primary" type="submit">
																	<i class="fa fa-floppy-o"></i> Simpan
																</button>
																<a href="<?php echo base_url('paket'); ?>" class="btn btn-custon-three btn-danger">
																	<i class="fa fa-times edu-danger-error"></i> Batal
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
				</div>
			</div>
		</div>
	</div>
</div>
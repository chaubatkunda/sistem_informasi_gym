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
														<label class="login2 pull-right pull-right-pro">Paket</label>
													</div>
													<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
														<input type="text" name="paket" class="form-control" placeholder="Paket" value="<?php echo $paket->nama_paket; ?>" readonly />
														<input type="hidden" name="id_paket" class="form-control" value="<?php echo $paket->id_paket; ?>" readonly />
													</div>
												</div>
											</div>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
														<label class="login2 pull-right pull-right-pro">Jenis Senam</label>
													</div>
													<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
														<select name="senam" class="chosen-select">
															<option value="">Pilih Senam</option>
															<?php foreach ($senam as $sn) : ?>
																<option value="<?php echo $sn['id_senam']; ?>"><?php echo $sn['jenis_senam']; ?></option>
															<?php endforeach; ?>
														</select>
														<small class="text-danger"><?php echo form_error('senam'); ?></small>
													</div>
												</div>
											</div>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
														<label class="login2 pull-right pull-right-pro">Kuota</label>
													</div>
													<div class="col-md-2 col-sm-4 col-xs-12">
														<!-- <input type="text" name="kuota" class="form-control" id="kuota-det" placeholder="Kuota" value="<?php echo set_value('kuota'); ?>" autocomplete="off" /> -->
														<select name="kuota" id="kuota" class="form-control">
															<option value="">Pilih Kuota</option>
															<?php foreach ($kuota as $kt) : ?>
																<option value="<?php echo $kt; ?>"><?php echo $kt; ?> x</option>
															<?php endforeach; ?>
														</select>
														<small class="text-danger"><?php echo form_error('kuota'); ?></small>
													</div>
												</div>
											</div>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
														<label class="login2 pull-right pull-right-pro">Tanggal Latihan Ke - 1</label>
													</div>
													<div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
														<div class="row">
															<div class="col-md-6">
																<input type="date" name="tgl[]" class="form-control" autocomplete="off">
															</div>
															<div class="col-md-6">
																<div class="row">
																	<div class="col-md-6">
																		<input type="time" name="jam1[]" class="form-control" autocomplete="off">
																	</div>
																	<div class="col-md-6">
																		<input type="time" name="jam2[]" class="form-control" autocomplete="off">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group-inner kuota1" hidden>
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
														<label class="login2 pull-right pull-right-pro">Tanggal Latihan Ke - 2</label>
													</div>
													<div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
														<div class="row">
															<div class="col-md-6">
																<input type="date" name="tgl[]" class="form-control" autocomplete="off">
															</div>
															<div class="col-md-6">
																<div class="row">
																	<div class="col-md-6">
																		<input type="time" name="jam1[]" class="form-control" autocomplete="off">
																	</div>
																	<div class="col-md-6">
																		<input type="time" name="jam2[]" class="form-control" autocomplete="off">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group-inner kuota2" hidden>
												<div class="row">
													<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
														<label class="login2 pull-right pull-right-pro">Tanggal Latihan Ke - 3</label>
													</div>
													<div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
														<div class="row">
															<div class="col-md-6">
																<input type="date" name="tgl[]" class="form-control" autocomplete="off">
															</div>
															<div class="col-md-6">
																<div class="row">
																	<div class="col-md-6">
																		<input type="time" name="jam1[]" class="form-control" autocomplete="off">
																	</div>
																	<div class="col-md-6">
																		<input type="time" name="jam2[]" class="form-control" autocomplete="off">
																	</div>
																</div>
															</div>
														</div>
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
																	<i class="fa fa-floppy-o"></i>Simpan
																</button>
																<a href="<?php echo base_url('detailPaket/') . $paket->id_paket; ?>" class="btn btn-custon-three
																			btn-danger">
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
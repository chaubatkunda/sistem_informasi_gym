	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="sparkline12-list">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h5><?php echo $title; ?></h5>
						</div>
						<form action="" method="post">
							<div class="panel-body">
								<div class="form-group-inner">
									<div class="row">
										<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
											<label class="login2 pull-right pull-right-pro">Paket</label>
										</div>
										<div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
											<input type="text" name="paket" class="form-control" placeholder="Paket" value="<?php echo $paket->nama_paket; ?>" readonly />
											<input type="hidden" name="id_paket" class="form-control" value="<?php echo $paket->id_paket; ?>" readonly />
										</div>
									</div>
								</div>
								<div class="form-group-inner">
									<div class="row">
										<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
											<label class="login2 pull-right pull-right-pro">Jenis Senam</label>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<select name="senam" class="chosen-select">
												<option value="">Pilih Senam</option>
												<?php foreach ($senam as $sn) : ?>
													<option value="<?php echo $sn->id_senam; ?>"><?php echo $sn->jenis_senam; ?></option>
												<?php endforeach; ?>
											</select>
											<?php echo form_error('senam', '<small class="text-danger">', '</small>'); ?>
										</div>
									</div>
								</div>
								<div class="form-group-inner">
									<div class="row">
										<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
											<label class="login2 pull-right pull-right-pro">Kuota</label>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<!-- <input type="text" name="kuota" class="form-control" id="kuota-det" placeholder="Kuota" value="<?php echo set_value('kuota'); ?>" autocomplete="off" /> -->
											<select name="kuota" id="kuota" class="form-control">
												<?php foreach ($kuota as $kt) : ?>
													<option value="<?php echo $kt; ?>"><?php echo $kt; ?> x</option>
												<?php endforeach; ?>
											</select>
											<?php echo form_error('kuota', '<small class="text-danger">', '</small>'); ?>
										</div>
									</div>
								</div>
								<div class="form-group-inner">
									<div class="row">
										<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
											<label class="login2 pull-right pull-right-pro">Tanggal Latihan Ke - 1</label>
										</div>
										<div class="col-lg-8 col-md-4 col-sm-4 col-xs-12">
											<div class="row">
												<div class="col-md-5">
													<input type="date" name="tgl[]" class="form-control" autocomplete="off">
												</div>
												<div class="col-md-7">
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
										<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
											<label class="login2 pull-right pull-right-pro">Tanggal Latihan Ke - 2</label>
										</div>
										<div class="col-lg-8 col-md-4 col-sm-4 col-xs-12">
											<div class="row">
												<div class="col-md-5">
													<input type="date" name="tgl[]" class="form-control" autocomplete="off">
												</div>
												<div class="col-md-7">
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
										<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
											<label class="login2 pull-right pull-right-pro">Tanggal Latihan Ke - 3</label>
										</div>
										<div class="col-lg-8 col-md-4 col-sm-4 col-xs-12">
											<div class="row">
												<div class="col-md-5">
													<input type="date" name="tgl[]" class="form-control" autocomplete="off">
												</div>
												<div class="col-md-7">
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
							</div>
							<div class="panel-footer">
								<button class="btn btn-primary" type="submit">
									<i class="fa fa-floppy-o"></i> Simpan
								</button>
								<a href="<?php echo base_url('admin/detail_paket/') . $paket->id_paket; ?>" class="btn btn-danger">
									<i class="fa fa-times edu-danger-error"></i> Batal
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
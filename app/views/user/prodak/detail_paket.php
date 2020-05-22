<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="sparkline10-list">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h5><?php echo $title; ?></h5>
					</div>
					<form action="<?php echo base_url('user.transaksi.paket'); ?>" method="post">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-5">
											<label for="" class="form-label">Jenis Pembelian</label>
										</div>
										<div class="col-md-5">
											<h5>
												Paket <strong class="badge"><?php echo $paket->nama_paket; ?></strong>
											</h5>
											<input type="hidden" name="nama_paket" value="<?php echo $paket->nama_paket; ?>" readonly>
										</div>
									</div>
									<div class="row">
										<div class="col-md-5">
											<label for="" class="form-label">Harga</label>
										</div>
										<div class="col-md-5">
											<h5>
												<strong class="text-primary"><?php echo Rp($paket->harga); ?></strong>
											</h5>
											<input type="hidden" name="harga_paket" value="<?php echo $paket->harga; ?>" readonly>
										</div>
									</div>

								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-5">
											<label for="" class="form-label">Kode Transaksi</label>
										</div>
										<div class="col-md-5">
											<h5>
												<strong class="">
													<?php echo $this->fungsi->kodeTransFasilitas(); ?>
												</strong>
											</h5>
											<input type="hidden" name="kode_trans" value="<?php echo $this->fungsi->kodeTransFasilitas(); ?>" readonly>
											<input type="hidden" name="id_member" value="<?php echo $this->fungsi->chek_member()->id_member; ?>" readonly>
										</div>
									</div>
									<div class="row">
										<div class="col-md-5">
											<label for="" class="form-label">Tanggal</label>
										</div>
										<div class="col-md-5">
											<h5>
												<strong class=""><?php echo date('d-m-Y'); ?></strong>
											</h5>
											<input type="hidden" name="tgl_trans" value="<?php echo date('Y-m-d'); ?>" readonly>
										</div>
									</div>
								</div>
							</div>
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>No</th>
											<th>Senam</th>
											<th>Kuota</th>
											<th>Tanggal Latihan</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($isipaket as $isi) :
										?>
											<tr>
												<td>
													<?php echo $no++; ?>
												</td>
												<td>
													<?php echo $isi->jenis_senam; ?>
													<input type="hidden" name="jenis_senam[]" value="<?php echo $isi->jenis_senam; ?>" readonly>
													<input type="hidden" name="id_setp[]" value="<?php echo $isi->id_setingpaket; ?>" readonly>
												</td>
												<td>
													<?php echo $isi->kuota; ?> x
													<input type="hidden" name="kuota[]" value="<?php echo $isi->kuota; ?>" readonly>
												</td>
												<td>
													<?php
													$query = $this->db->get_where('t_setpaket_det', ['id_setpaket' => $isi->id_setingpaket])->result();
													?>
													<ul class="list-group">
														<?php foreach ($query as $tglp) : ?>
															<li>
																<?php echo indoDate($tglp->tgl_masuk) . ", " . indoTime($tglp->jam_mulai) . " - " . indoTime($tglp->jam_selesai); ?>
															</li>
															<input type="hidden" name="tgl_masuk[]" value="<?php echo $tglp->tgl_masuk; ?>" readonly>
															<input type="hidden" name="jm_mulai[]" value="<?php echo $tglp->jam_mulai; ?>" readonly>
															<input type="hidden" name="jm_selesai[]" value="<?php echo $tglp->jam_selesai; ?>" readonly>
															<input type="hidden" name="id_setpa[]" value="<?php echo $tglp->id_setpaket; ?>" readonly>
														<?php endforeach; ?>
													</ul>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="panel-footer text-right">
							<a href="<?php echo base_url('user.paket'); ?>" class="btn btn-danger">
								<i class="fa fa-fw fa-undo"></i>
							</a>
							<button type="submit" class="btn btn-primary">
								Continue <i class="fa fa-chevron-circle-right"></i>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="sparkline10-list">

				<br>
				<br>
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
												<strong class=""><?php echo $this->fungsi->kodeTransFasilitas(); ?></strong>
											</h5>
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
												<td><?php echo $no++; ?></td>
												<td><?php echo $isi->jenis_senam; ?></td>
												<td><?php echo $isi->kuota; ?> x</td>
												<td>
													<?php
													$query = $this->db->get_where('t_setpaket_det', ['id_setpaket' => $isi->id_setingpaket])->result();
													?>
													<ul class="list-group">
														<?php foreach ($query as $tglp) : ?>
															<li><?php echo indoDate($tglp->tgl_masuk) . ", " . indoTime($tglp->jam_mulai) . " - " . indoTime($tglp->jam_selesai); ?></li>
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
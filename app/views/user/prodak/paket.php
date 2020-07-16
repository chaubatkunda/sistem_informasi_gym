<div class="container-fluid">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="sparkline13-list">
				<div class="flash-paket" data-flashpaket="<?php echo $this->session->flashdata('paket'); ?>"></div>
				<div class="datatable-dashv1-list custom-datatable-overright">
					<table id="table" class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Paket</th>
								<th>Harga</th>
								<th>Periode</th>
								<th>Keterangan</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($paket as $p) : ?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $p->nama_paket; ?></td>
									<td><?php echo Rp($p->harga); ?></td>
									<td>
										<small>3 Bulan
											<i>
												<strong>
													<?php echo $p->tgl_akhir; ?>
												</strong>
											</i>
										</small>
									</td>
									<td>
										<?php
										$tgl_sekarang = date('Y-m-d');
										$selesai = $p->tgl_akhir;
										if ($tgl_sekarang > $selesai) :
										?>
											<small class="text-danger">Tidak Aktif</small>
										<?php else : ?>
											<small class="text-success">Aktif</small>
										<?php endif; ?>
									</td>
									<td>
										<?php if ($this->fungsi->user_login()['level'] == 2) : ?>
											<?php if (date('Y-m-d') > $p->tgl_akhir) : ?>
												<a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Beli">
													<i class="fa fa-money"></i>
												</a>
											<?php else : ?>
												<a href="<?php echo base_url('beli.paket/') . $p->id_paket; ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Beli">
													<i class="fa fa-money"></i>
												</a>
											<?php endif; ?>
											<a href="<?php echo base_url('user.detai_paket/') . $p->id_paket; ?>" class="btn btn-info btn-sm mr-2" data-toggle="tooltip" data-placement="right" title="Detail">
												<i class="fa fa-info-circle"></i>
											</a>
										<?php else : ?>
											<a href="" class="btn btn-success btn-sm btn-user-beli" data-toggle="tooltip" data-placement="left" title="Beli">
												<i class="fa fa-money"></i>
											</a>
											<a href="<?php echo base_url('user.detai_paket/') . $p->id_paket; ?>" class="btn btn-info btn-sm mr-2" data-toggle="tooltip" data-placement="right" title="Detail">
												<i class="fa fa-info-circle"></i>
											</a>
										<?php endif; ?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
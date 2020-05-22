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
										<?php
										$tgl_sekarang = date('d-m-Y');
										$tgl_awal = indoDate($p->tgl_awal);
										$tgl_akhir = IndoDate($p->tgl_akhir);
										if ($tgl_sekarang == $tgl_akhir) : ?>
											<!-- echo date('d-m-Y', strtotime('+3 month', time())) . "\n"; -->
											<strong class="text-danger">Tidak Aktif</strong>
										<?php else :
										?>
											<small>3 Bulan <i><strong><?php echo $tgl_akhir; ?></strong></i></small>
										<?php endif; ?>
									</td>
									<td>
										<?php
										$tgl_sekarang = date('d-m-Y');
										$selesai = indoDate($p->tgl_akhir);
										if ($tgl_sekarang >= $selesai) :
										?>
											<small>Aktif</small>
										<?php else : ?>
											<small>Tidak Aktif</small>
										<?php endif; ?>
									</td>
									<td>
										<?php if ($this->fungsi->user_login()['level'] == 2) : ?>
											<a href="<?php echo base_url('beli.paket/') . $p->id_paket; ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Beli">
												<i class="fa fa-money"></i> Beli
											</a>
											<a href="<?php echo base_url('detail-userPaket/') . $p->id_paket; ?>" class="btn btn-info btn-sm mr-2" data-toggle="tooltip" data-placement="right" title="Detail">
												<i class="fa fa-info-circle"></i> Detail
											</a>
										<?php else : ?>
											<a href="" class="btn btn-success btn-sm btn-user-beli" data-toggle="tooltip" data-placement="left" title="Beli">
												<i class="fa fa-money"></i> Beli
											</a>
											<a href="<?php echo base_url('detail-userPaket/') . $p->id_paket; ?>" class="btn btn-info btn-sm mr-2" data-toggle="tooltip" data-placement="right" title="Detail">
												<i class="fa fa-info-circle"></i> Detail
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
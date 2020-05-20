<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list">
					<div class="sparkline13-hd">
						<div class="main-sparkline13-hd">
							<span class="table-project-n">
								<a href="<?php echo base_url('add.paket'); ?>" class="btn btn-custon-three btn-primary mg-tb-15">
									<i class="fa fa-plus"></i>
									Add Paket</a>
							</span>
						</div>
					</div>
					<div class="sparkline13-graph">
						<div class="flash-paket" data-flashpaket="<?php echo $this->session->flashdata('paket'); ?>"></div>
						<div class="datatable-dashv1-list custom-datatable-overright">
							<table id="table" class="table table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>Paket</th>
										<th>Harga</th>
										<th>Tanggal Aktif</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($paket as $pk) : ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $pk->nama_paket; ?></td>
											<td><?php echo Rp($pk->harga); ?></td>
											<td>
												<?php
												$tgl_sekarang = date('d-m-Y');
												$tgl_awal = indoDate($pk->tgl_awal);
												$tgl_akhir = indoDate($pk->tgl_akhir);
												if ($tgl_sekarang == $tgl_akhir) : ?>
													<strong class="text-danger">Tidak Aktif</strong>
												<?php else :
												?>
													<strong>
														<?php echo $tgl_awal; ?>
													</strong>
												<?php endif; ?>
											</td>
											<td>
												<?php if ($this->fungsi->user_login()['level'] == 1) : ?>
													<?php
													$queryIdPaket = $this->db->get_where('t_setingpaket', ['id_paket' => $pk->id_paket])->num_rows();
													//echo $queryIdPaket;
													?>
													<a href="<?php echo base_url('detail.paket/') . $pk->id_paket; ?>" class="btn btn-custon-three btn-success btn-sm mr-2" data-toggle="tooltip" data-placement="left" title="Detail">
														<i class="fa fa-info-circle" aria-hidden="true"></i>
													</a>
													<a href="<?php echo base_url('edit.paket/') . $pk->id_paket; ?>" class="btn btn-custon-three btn-success btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="Edit">
														<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
													</a>
													<?php if ($queryIdPaket) : ?>
														<a href="<?php echo base_url('hapus.paket/') . $pk->id_paket; ?>" class="btn btn-custon-three btn-danger btn-sm tombol-hapustdk" data-toggle="tooltip" data-placement="right" title="Hapus">
															<i class="fa fa-trash-o" aria-hidden="true"></i>
														</a>
													<?php else : ?>
														<a href="<?php echo base_url('hapus.paket/') . $pk->id_paket; ?>" class="btn btn-custon-three btn-danger btn-sm tombol-hapusm" data-toggle="tooltip" data-placement="right" title="Hapus">
															<i class="fa fa-trash-o" aria-hidden="true"></i>
														</a>
													<?php endif; ?>
												<?php else : ?>
													<a href="" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="Beli">
														<i class="fa fa-money"></i> Beli
													</a>
													<a href="<?php echo base_url('detail.paket/') . $pk->id_paket; ?>" class="btn btn-info btn-sm mr-2" data-toggle="tooltip" data-placement="right" title="Detail">
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
	</div>
</div>
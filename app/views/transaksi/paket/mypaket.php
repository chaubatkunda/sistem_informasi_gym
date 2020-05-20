<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="container-fluid">
		<div class="sparkline13-list">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="sparkline13-graph">
						<div class="datatable-dashv1-list custom-datatable-overright">
							<table id="table" class="table table-hover table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal Pembelian</th>
										<th>Kode Pembelian</th>
										<th>Paket</th>
										<th>Harga</th>
										<th>Keterangan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php if ($mypaket == null) : ?>
										<tr>
											<td colspan="7">
												<div class="alert alert-danger alert-dismissible" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<strong><?php echo $this->fungsi->user_login()['nama']; ?></strong> Anda Belum Memiliki Paket!
												</div>
											</td>
										</tr>
									<?php else : ?>
										<?php
										$no = 1;
										foreach ($mypaket as $my) : ?>
											<tr>
												<td><?php echo $no++; ?></td>
												<td><?php echo date('d-m-Y', strtotime($my['tgl_trans'])); ?></td>
												<td><?php echo $my['kode_pembelian']; ?></td>
												<td><?php echo $my['nama_paket']; ?></td>
												<td class="text-success"><?php echo number_format($my['harga_paket'], 0, ",", "."); ?></td>
												<td>
													<?php
													$ket = $my['ket_bayar'];
													if ($ket == 1) :
													?>
														<strong class="text-success">Lunas</strong>
													<?php elseif ($ket == 2) : ?>
														<strong class="text-danger">Belum Verifikasi</strong>
													<?php else : ?>
														<strong class="text-danger">Belum Lunas</strong>
													<?php endif; ?>
												</td>
												<td>
													<a href="" class="btn btn-info btn-sm"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
												</td>
											</tr>
										<?php endforeach; ?>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

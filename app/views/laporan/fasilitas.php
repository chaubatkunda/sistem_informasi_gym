<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list">
					<div class="sparkline13-hd">
						<div class="main-sparkline13-hd">
							<span class="table-project-n">
								<div class="modal-bootstrap modal-login-form mg-tb-15">
									<a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDownFasilitas">
										<i class="fa fa-filter"></i> Filter Tanggal
									</a>
								</div>
								<?php if (!empty($total)) : ?>
									<a href="" class="btn btn-default login-submit-cs">
										<i class="fa fa-spinner"></i> Refresh
									</a>
									<a href="<?php echo base_url('cetak-filterFasilitas') . $cetak; ?>" class="btn btn-default" target="_blank" title="Cetak Filter Tanggal">
										<i class="fa fa-print"></i> Cetak
									</a>
								<?php else : ?>
									<a href="<?php echo base_url('cetak-laporanFasilitas'); ?>" class="btn btn-default" target="_blank" title="Cetak Full">
										<i class="fa fa-print"></i> Cetak
									</a>
								<?php endif; ?>
							</span>
						</div>
					</div>
					<div class="sparkline13-graph">
						<div class="datatable-dashv1-list custom-datatable-overright">
							<table id="table" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal Pembelian</th>
										<th>Fasilitas</th>
										<th>Jam Pakai</th>
										<th>Kode Pembelian</th>
										<th>Harga</th>
									</tr>
								</thead>
								<tbody>
									<?php if (empty($transaksi)) : ?>
										<tr>
											<td colspan="6">
												<div class="alert alert-danger" role="alert">
													Laporan tidak Ditemukan..!!
												</div>
											</td>
										</tr>
									<?php endif; ?>
									<?php
									$no = 1;
									foreach ($transaksi as $trans) : ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td>
												<?php echo date('d-m-Y', strtotime($trans['tgl_transfasilitas'])); ?>
											</td>
											<td>
												<?php echo $trans['nama_fasilitas']; ?>
											</td>
											<td>
												<?php echo date('H:i', strtotime($trans['jam_mulai'])) . "-" . date('H:i', strtotime($trans['jam_selesai'])); ?>
											</td>
											<td>
												<?php echo $trans['kode_pembelian']; ?>
											</td>
											<td>
												<?php echo number_format($trans['total_bayar'], 0, ',', '.'); ?>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
								<?php if (!empty($total)) : ?>
									<tr>
										<td colspan="5" style="text-align: right; color: maroon;">Total</td>
										<td>
											<?php echo number_format($total, 0, ',', '.'); ?>
										</td>
									</tr>
								<?php endif; ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="zoomInDownFasilitas" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-close-area modal-close-df">
				<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
			</div>
			<div class="modal-header header-color-modal bg-color-1">
				<h4 class="modal-title">
					<i class="fa fa-calendar" aria-hidden="true"></i> Filter Tanggal Pencarian
				</h4>
				<div class="modal-close-area modal-close-df">
					<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
				</div>
			</div>
			<div class="modal-body">
				<div class="modal-login-form-inner">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="basic-login-inner modal-basic-inner">
								<form action="" method="POST">
									<div class="form-group-inner">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<label class="login2">Dari Tanggal</label>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
												<input type="date" name="tgl1" class="form-control" />
											</div>
										</div>
									</div>
									<div class="form-group-inner">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<label class="login2">Sampai Tanggal</label>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
												<input type="date" name="tgl2" class="form-control" />
											</div>
										</div>
									</div>
									<div class="login-btn-inner">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
											<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
												<div class="login-horizental">
													<button type="submit" class="btn btn-sm btn-primary login-submit-cs" type="submit">Tampilkan</button>
													<a href="#" data-dismiss="modal" class="btn btn-sm btn-danger login-submit-cs">Batal</a>
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

<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list">
					<div class="sparkline13-graph">
						<div class="datatable-dashv1-list custom-datatable-overright">
							<table id="table" class="table table-hover table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal Pembelian</th>
										<th>Tanggal Booking</th>
										<th>Fasilitas</th>
										<th>Jam Pakai</th>
										<th>Kode Pembelian</th>
										<th>Harga</th>
										<th>Keterangan</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($transaksi as $trans) : ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo indoDate($trans['tgl_transfasilitas']); ?></td>
											<td><?php echo indoDate($trans['tgl_booking']); ?></td>
											<td><?php echo $trans['nama_fasilitas']; ?></td>
											<td><?php echo indoTime($trans['jam_mulai']) . " - " . indoTime($trans['jam_selesai']); ?></td>
											<td><?php echo $trans['kode_pembelian']; ?></td>
											<td><?php echo Rp($trans['total_bayar']); ?> </td>
											<td>
												<?php
												$ket = $trans['ket_bayar'];
												if ($ket == 1) : ?>
													<strong class="text-success">Lunas</strong>
												<?php elseif ($ket == 2) : ?>
													<strong class="text-danger">Belum Verifikasi</strong>
												<?php else : ?>
													<strong class="text-danger">Belum Lunas</strong>
												<?php endif; ?>
											</td>
											<td>
												<a href="" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Cetak</a>
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
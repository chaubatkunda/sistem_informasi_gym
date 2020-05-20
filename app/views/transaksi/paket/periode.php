<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="container-fluid">
		<div class="row pull-right mg-b-10">
			<div class="col-md-12">
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<i class="fa fa-bars"></i> Kategori Transaksi Paket
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu dropdown-menu animated zoomIn" aria-labelledby="dropdownMenu1">
						<li>
							<a href="<?php echo base_url('addTransPaket'); ?>">Add Transaksi</a>
						</li>
						<li role="separator" class="divider"></li>
						<li>
							<a href="<?php echo base_url('transaksiPaket'); ?>">Keseluruhan Transaksi Paket</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list">
					<div class="flash-trans" data-flashtrans="<?php echo $this->session->flashdata('transaksi'); ?>"></div>
					<div class="datatable-dashv1-list custom-datatable-overright">
						<table id="table" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Tanggal Pembelian</th>
									<th>Kode Pembelian</th>
									<th>Paket</th>
									<th>Jenis Pembayaran</th>
									<th>Harga</th>
									<th>Keterangan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($periode as $trans) : ?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo date('d-m-Y', strtotime($trans['tgl_trans'])); ?></td>
										<td><?php echo $trans['kode_pembelian']; ?></td>
										<td><?php echo $trans['nama_paket']; ?></td>
										<td>
											<?php if ($trans['bukti_pembayaran'] == 'EDC') : ?>
												<small class="text-success">EDC</small>
											<?php elseif ($trans['bukti_pembayaran'] == 'Tunai') : ?>
												<small class="text-success">Tunai</small>
											<?php else : ?>
												<small class="text-success">Transfer</small>
											<?php endif; ?>
										</td>
										<td class="pull-right">
											<?php echo Rp($trans['harga_paket']); ?>
										</td>
										<td>
											<?php
											$ket = $trans['ket_bayar'];
											if ($ket == 1) : ?>
												<strong class="text-success">Lunas <i class="fa fa-check"></i></strong>
											<?php elseif ($ket == 2) : ?>
												<strong class="text-danger">Belum Verifikasi <i class="fa fa-exclamation"></i></strong>
											<?php else : ?>
												<strong class="text-danger">Belum Lunas <i class="fa fa-times"></i></strong>
											<?php endif; ?>
										</td>
										<td>
											<?php
											$ket = $trans['ket_bayar'];
											if ($ket == 2 || $ket == 3) :
											?>
												<a href="<?php echo base_url('validasiPaket/') . $trans['kode_pembelian']; ?>" class="btn btn-custon-three btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Validasi">
													<i class="fa fa-money"></i>
												</a>
											<?php endif; ?>
											<a href="<?php echo base_url('detailTransPaket/') . $trans['kode_pembelian']; ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="Detail Paket">
												<i class="fa fa-eye"></i>
											</a>
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
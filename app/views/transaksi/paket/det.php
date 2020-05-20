<div class="container-fluid">
	<div class="row pull-center">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="sparkline13-list">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h5>Detail Pembelian Paket</h5>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">
										<img src="<?php echo base_url('public/assets/icon/logogymblack.png'); ?>" class="img-circle mg-b-10" alt="egygym" width="100">
									</div>
									<div class="col-md-8">
										<h4>EGY GYM MALANG</h4>
										<small>Kompleks Ruko Wow AP. 02
											<br>
											Sawojajar Malang
										</small>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<h4 class="text-center mg-b-10">BUKTI PEMBELIAN PAKET</h4>
						<div class="row">
							<div class="col-md-7">
								<div class="row">
									<div class="col-md-2">
										<label for="">ID</label>
									</div>
									<div class="col-md-4">
										<?php echo $trpaket['idmem']; ?>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Nama</label>
									</div>
									<div class="col-md-5">
										<?php echo $trpaket['nama']; ?>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<label>Telp/Hp</label>
									</div>
									<div class="col-md-4">
										<?php echo $trpaket['notelp']; ?>
									</div>
								</div>
							</div>
							<div class="col-md-5 col-sm-10">
								<div class="row">
									<div class="col-md-6">
										<label>Kode Transaksi</label>
									</div>
									<div class="col-md-6">
										<?php echo $trpaket['kode_pembelian']; ?>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Tanggal</label>
									</div>
									<div class="col-md-6">
										<?php echo indoDate($trpaket['tgl_trans']); ?>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Jenis Pembelian</label>
									</div>
									<div class="col-md-6">
										Paket <strong class="badge"><?php echo $trpaket['nama_paket']; ?></strong>
									</div>
								</div>
							</div>
						</div>
						<!-- <hr> -->
						<div class="row">
							<div class="col-md-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Senam</th>
											<th>Kuota</th>
											<th>Tanggal Latihan</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($detail as $det) : ?>
											<tr>
												<td><?php echo $det['jenis_senam']; ?></td>
												<td><?php echo $det['kuota']; ?> x</td>
												<td>
													<?php
													$idd = $det['kode_pembelian'];
													$id = $det['id_setpaket'];
													$query = $this->db->get_where('t_transisipaket_det', ['id_setpaket' => $id, 'kode_pembelian' => $idd])->result();
													?>
													<ul class="list-group">
														<?php foreach ($query as $isi) : ?>
															<li>
																<?php echo date('d-m-Y', strtotime($isi->tgl_mulai)) . " , " . date('H:i', strtotime($isi->jam_mulai)) . " - " . date('H:i', strtotime($isi->jam_selesai)); ?>
															</li>
														<?php endforeach; ?>
													</ul>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
									<tr>
										<td colspan="2" class="text-center"> Total</td>
										<td><strong><?php echo Rp($trpaket['harga_paket']); ?></strong></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<a href="<?php echo base_url('cetak-trans-detpaket/') . $trpaket['id_transp']; ?>" class="btn btn-primary" target="_blank"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a>
							<a href="<?php echo base_url('download-trans-detpaket/') . $trpaket['id_transp']; ?>" class="btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
							<a href="<?php echo base_url('periodeTransPaket'); ?>" class="btn btn-primary pull-right"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Kembali</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
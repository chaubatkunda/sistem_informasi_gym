<div class="basic-form-area mg-b-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="sparkline12-list">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="all-form-element-inner">
								<div class="row">
									<div class="col-md-10">
										<div class="text-primary">Validasi <strong>Pembayaran</strong></div>
										<table class="table">
											<tr>
												<th>ID Member</th>
												<td><?php echo $validasi['idmem']; ?></td>
											</tr>
											<tr>
												<th>Nama</th>
												<td><?php echo $validasi['nama']; ?></td>
											</tr>
											<tr>
												<th>Tanggal Transaksi</th>
												<td><?php echo date('d-m-Y', strtotime($validasi['tgl_trans'])); ?></td>
											</tr>
											<tr>
												<th>Kode Pembelian</th>
												<td><?php echo $validasi['kode_pembelian']; ?></td>
											</tr>
											<tr>
												<th>Jenis Pembelian</th>
												<td>Paket. <strong><?php echo $validasi['nama_paket']; ?></strong></td>
											</tr>
											<tr>
												<th>Total Pembayaran</th>
												<td><?php echo Rp($validasi['harga_paket']); ?></td>
											</tr>
											<tr>
												<th>Bukti Pembayaran</th>
												<td>
													<?php if ($validasi['bukti_pembayaran'] == 'Tunai') : ?>
														<strong class="text-primary">Tunai</strong>
													<?php elseif ($validasi['bukti_pembayaran'] == 'EDC') : ?>
														<strong class="text-primary">EDC</strong>
													<?php else : ?>
														<a href="#gambar-valid">
															<img src="<?php echo base_url('public/assets/buktitransfer/') . $validasi['bukti_pembayaran']; ?>" width="110">
														</a>
														<div class="overley" id="gambar-valid">
															<a href="#" class="close">X Close</a>
															<img src="<?php echo base_url('public/assets/buktitransfer/') . $validasi['bukti_pembayaran']; ?>">
														</div>
													<?php endif; ?>
												</td>
											<tr>
												<th>Validasi</th>
												<td>
													<div class="bt-df-checkbox pull-left">
														<label>
															<input class="pull-left radio-checked chek-validasi" data-validasi="<?php echo $validasi['id_transp']; ?>" name="" type="checkbox"> Ya
														</label>
														<label>
															<input class="pull-left radio-checked chek-validasibelump" data-validbelum="<?php echo $validasi['id_transp']; ?>" name="" type="checkbox"> Tidak
														</label>
													</div>
												</td>
											</tr>
											<tr>
												<td><a href="<?php echo base_url('periodeTransPaket'); ?>" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="container-fluid">
		<form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
			<div class="row">
				<div class="col-md-6">
					<div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
						<div class="form-group">
							<label class="control-label col-sm-3" for="">ID</label>
							<div class="col-sm-9">
								<input type="text" name="id_member" class="form-control" value="<?php echo $this->fungsi->chek_member()->id_member; ?>" readonly>
								<small class="text-danger"><?php echo form_error('id_member'); ?></small>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="nama">Nama</label>
							<div class="col-sm-9">
								<input type="text" id="nama" name="nama" class="form-control" value="<?php echo $this->fungsi->chek_member()->nama; ?>" readonly />
								<small class="text-danger"><?php echo form_error('nama'); ?></small>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
						<div class="form-group">
							<label class="control-label col-sm-4" for="">Kode Pembelian</label>
							<div class="col-sm-6">
								<input type="text" name="kode-trans" class="form-control" value="<?php echo $this->fungsi->kodeTransPaket(); ?>" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="">Tanggal Pembelian</label>
							<div class="col-sm-6">
								<input type="text" name="tgl_beli" class="form-control" value="<?php echo date('d-m-Y'); ?>" readonly>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="sparkline10-list border-top mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
						<div class="form-group">
							<!-- <label class="control-label col-sm-4" for="">Paket</label> -->
							<div class="col-sm-4">
								<input type="hidden" name="nama-pk" class="form-control" value="<?php echo $paket['nama_paket']; ?>" readonly>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<table class="table table-hover">
									<tr>
										<td>Paket</td>
										<td colspan="2">
											<span class="badge">
												<?php echo $paket['nama_paket']; ?>
											</span>
										</td>
									</tr>
									<tr>
										<th>Jenis Senam</th>
										<th>Kuota</th>
										<th>Tanggal Latihan</th>
									</tr>
									<?php foreach ($detail as $det) : ?>
										<tr>
											<td>
												<?php echo $det['jenis_senam']; ?>
												<input type="text" name="id_senam[]" class="form-control" value="<?php echo $det['id_senam']; ?>">
												<input type="hidden" name="jenis_senam[]" value="<?php echo $det['jenis_senam']; ?>" readonly>
											</td>
											<td>
												<?php echo $det['kuota']; ?> x
												<input type="hidden" name="kuota[]" value="<?php echo $det['kuota']; ?>" readonly>
											</td>
											<td>
												<?php
												echo date('d-m-Y', strtotime($det['tgl1']));
												echo ", ";
												echo date('H:i', strtotime($det['jam_mulai1']));
												echo " - ";
												echo date('H:i', strtotime($det['jam_selesai1']));
												echo "<br>"; ?>
												<input type="hidden" name="tgl[]" class="form-control" value="<?php echo $det['tgl1']; ?>">
												<input type="hidden" name="jam_mulai[]" class="form-control" value="<?php echo $det['jam_mulai1']; ?>">
												<input type="hidden" name="jam_selesai[]" class="form-control" value="<?php echo $det['jam_selesai1']; ?>">
												<?php
												if ($det['tgl2'] != "0000-00-00") :
													echo date('d-m-Y', strtotime($det['tgl2']));
													echo ", ";
													echo date('H:i', strtotime($det['jam_mulai2']));
													echo " - ";
													echo date('H:i', strtotime($det['jam_selesai2']));
													echo "<br>";
												?>
													<input type="hidden" name="tgl[]" class="form-control" value="<?php echo $det['tgl2']; ?>">
													<input type="hidden" name="jam_mulai[]" class="form-control" value="<?php echo $det['jam_mulai2']; ?>">
													<input type="hidden" name="jam_selesai[]" class="form-control" value="<?php echo $det['jam_selesai2']; ?>">
												<?php endif; ?>
												<?php if ($det['tgl3'] != "0000-00-00") :
													echo date('d-m-Y', strtotime($det['tgl3']));
													echo ", ";
													echo date('H:i', strtotime($det['jam_mulai3']));
													echo " - ";
													echo date('H:i', strtotime($det['jam_selesai3']));
													echo "<br>";
												?>
													<input type="hidden" name="tgl[]" class="form-control" value="<?php echo $det['tgl3']; ?>">
													<input type="hidden" name="jam_mulai[]" class="form-control" value="<?php echo $det['jam_mulai3']; ?>">
													<input type="hidden" name="jam_selesai[]" class="form-control" value="<?php echo $det['jam_selesai3']; ?>">
												<?php endif; ?>
											</td>
										</tr>
									<?php endforeach; ?>
									<tr>
										<td colspan="2" class="text-center">Total</td>
										<td>
											Rp.<?php echo number_format($paket['harga'], 0, ',', '.'); ?>
											<input type="hidden" name="harga-pk" value="<?php echo $paket['harga']; ?>" readonly>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
						<div class="form-group">
							<label class="control-label col-sm-3">Jenis Pembayaran</label>
							<div class="col-sm-9">
								<div class="bt-df-checkbox pull-left">
									<label>
										<input class="pull-left radio-checked chek-transfer" name="chek-transfer" type="checkbox" value="1">Transfer
									</label>
									<label>
										<input class="pull-left radio-checked" name="chek-tunai" type="checkbox" value="2">Tunai
									</label>
									<label>
										<input class="pull-left radio-checked" name="chek-edc" type="checkbox" value="3">EDC
									</label>
								</div>
							</div>
						</div>
						<div class="form-group form-jenis-bayar" hidden>
							<label class="control-label col-sm-3">Bukti Pembayaran</label>
							<div class="col-sm-8">
								<div class="form-group">
									<input type="file" name="file_upload" class="form-control">
									<small class="text-danger"><i>Ukuran File Maksimal 2 MB* dan Format File JPG, JPEG, PNG*</i></small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-md-12">
					<div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
						<button type="submit" class="btn btn-custon-three btn-primary"><i class="fa fa-floppy-o"></i> Simpan</button>
						<a href="<?php echo base_url('user-paket'); ?>" class="btn btn-custon-three btn-danger"><i class="fa fa-ban"></i> Batal</a>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

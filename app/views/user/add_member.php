<div class="container-fluid">
	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="sparkline10-list">
					<div class="row">
						<div class=" form-group">
							<label class="control-label col-md-3" for="nama">ID</label>
							<div class="col-md-4">
								<input type="text" name="idmem" class="form-control" value="<?php echo $this->fungsi->geneRateIdMember(); ?>" readonly>
							</div>
						</div>
						<div class="form-group">
							<!--  -->
							<label class="control-label col-sm-3">Nama</label>
							<div class="col-sm-4">
								<input type="text" name="nama" class="form-control" value="<?php echo $this->fungsi->user_login()['nama']; ?>" placeholder="Nama" readonly>
								<small class="text-danger"><?php echo form_error('nama'); ?></small>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3">Telp/Hp</label>
							<div class="col-sm-4">
								<input type="text" name="notelp" class="form-control" value="<?php echo set_value('notelp'); ?>" placeholder="Telp">
								<small class="text-danger"><?php echo form_error('notelp'); ?></small>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3">Alamat</label>
							<div class="col-sm-4">
								<textarea name="alamat" id="" class="form-control"><?php echo set_value('alamat'); ?></textarea>
								<small class="text-danger"><?php echo form_error('alamat'); ?></small>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3">Pembayaran Kartu Member</label>
							<div class="row">
								<div class="col-md-8">
									<div class="bt-df-checkbox pull-left">
										<label>
											<input class="pull-left radio-checked chek-transfer" name="chek-transfer" type="checkbox" value="1">Transfer
										</label>
										<p class="text-warning">Diwajibkan untuk semua member* </p>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group form-jenis-bayar" hidden>
							<label class="control-label col-sm-3">Bukti Pembayaran</label>
							<div class="col-md-4">
								<div class="form-group">
									<input type="file" name="file_upload" class="form-control">
									<small class="text-warning"><i>Ukuran File Maksimal 2 MB* dan Format File JPG, JPEG, PNG*</i></small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="sparkline10-list mg-tb-30 responsive-mg-t-0">
					<button type="submit" class="btn btn-primary">
						<i class="fa fa-floppy-o"></i> Simpan
					</button>
					<a href="<?php echo base_url('periode-TransPaket'); ?>" class="btn btn-danger">
						<i class="fa fa-ban"></i> Batal
					</a>
				</div>
			</div>
		</div>
	</form>
</div>
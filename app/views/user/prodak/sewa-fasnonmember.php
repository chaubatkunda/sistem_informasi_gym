<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="container-fluid">
		<h5 class="alert alert-danger">
			<?php echo $this->session->flashdata('chektgl'); ?>
		</h5>
		<form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
			<div class="row">
				<div class="col-md-6">
					<div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
						<div class="form-group">
							<label class="control-label col-md-4">Nama</label>
							<div class="col-md-5">
								<input type="text" name="nama" class="form-control" value="<?php echo $this->fungsi->chek_member()->nama; ?>" readonly>
								<input type="hidden" name="id_member" class="form-control" value="<?php echo $this->fungsi->chek_member()->id_member; ?>" placeholder="ID Member" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">Kode Transaksi</label>
							<div class="col-md-5">
								<div class="input-group">
									<input type="text" name="kode-trans" class="form-control" value="<?php echo $this->fungsi->kodeTransFasilitas(); ?>" readonly>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">Tanggal Transaksi</label>
							<div class="col-md-5">
								<div class="input-group">
									<input type="text" name="tgl_trans" value="<?php echo date('d-m-Y'); ?>" class="form-control" readonly>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
						<div class="form-group">
							<label class="control-label col-md-4">Jenis Pembayaran</label>
							<div class="col-md-8">
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
							<label class="control-label col-md-4">Bukti Pembayaran</label>
							<div class="col-md-8">
								<div class="form-group">
									<input type="file" name="file_upload" class="form-control">
									<small class="text-danger"><i>Ukuran File Maksimal 2 MB* dan Format File JPG, JPEG, PNG*</i></small>
								</div>
							</div>
						</div>
						<hr>
						<p class="text-warning text-justify">
							Jika Member/Non Member memilih jenis pembayaran TUNAI/EDC, pada saat mengambil Fasilitas Member/Non Member Diwajibkan untuk mengonfirmasi pembayaran pada admin.
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="sparkline10-list border-top mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
						<div class="form-group">
							<label class="control-label col-md-4">Fasilitas</label>
							<div class="col-md-5">
								<input type="text" name="nama-fas" class="form-control" value="<?php echo $fasilitas['fasilitas']; ?>" readonly>
							</div>
							<input type="hidden" name="harga-fas" class="form-control" value="<?php echo $fasilitas['harga']; ?>" readonly>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">Tanggal Booking</label>
							<div class="col-md-5">
								<input type="date" name="tgl_booking" class="form-control">
								<small class="text-danger"><?php echo form_error('tgl_booking'); ?></small>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">Jam Pakai</label>
							<div class="col-md-5">
								<input type="time" name="jmpakai" class="form-control">
								<small class="text-danger"><?php echo form_error('jmpakai'); ?></small>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-md-6">
					<div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
						<button type="submit" class="btn btn-custon-three btn-primary"><i class="fa fa-floppy-o"></i> Simpan</button>
						<a href="<?php echo base_url('user-fasilitas'); ?>" class="btn btn-custon-three btn-danger"><i class="fa fa-ban"></i> Batal</a>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
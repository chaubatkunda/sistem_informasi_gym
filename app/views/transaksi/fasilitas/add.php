<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="container-fluid">
		<div class="row mg-b-15">
			<div class="col-md-12">
				<div class="dropdown pull-right">
					<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<i class="fa fa-bars"></i> Kategori Transaksi Fasilitas
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu dropdown-menu animated zoomIn" aria-labelledby="dropdownMenu1">
						<li>
							<a href="<?php echo base_url('addTransFasilitas'); ?>">Add Transaksi </a>
						</li>
						<li role="separator" class="divider"></li>
						<li>
							<a href="<?php echo base_url('transaksiPeriodeFasilitas'); ?>">Transaksi Perhari</a>
						</li>
						<li role="separator" class="divider"></li>
						<li>
							<a href="<?php echo base_url('transaksiFasilitas'); ?>">Keseluruhan Transaksi</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
			<div class="row">
				<div class="col-md-6">
					<div class="card-title"><strong>IDENTITAS</strong> MEMBER</div>
					<div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
						<div class="form-group">
							<label class="control-label col-sm-3">Nama</label>
							<div class="col-sm-9">
								<select name="id_member" class="chosen-select select-member">
									<option value="">Pilih Member</option>
									<?php foreach ($member as $mb) : ?>
										<option value="<?php echo $mb['id_member']; ?>"><?php echo $mb['nama'] ?></option>
									<?php endforeach; ?>
								</select>
								<small class="text-danger"><?php echo form_error('id_member'); ?></small>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="nama">ID Member</label>
							<div class="col-sm-9">
								<input type="text" class="form-control lebel-idMember" readonly>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card-title"><strong>AKUN</strong> MEMBER</div>
					<div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
						<div class="form-group">
							<label class="control-label col-sm-3">Kode Transaksi</label>
							<div class="col-sm-9">
								<div class="input-group">
									<input type="text" name="kode-trans" class="form-control" value="<?php echo $this->fungsi->kodeTransFasilitas(); ?>" readonly>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3">Tanggal Transaksi</label>
							<div class="col-sm-9">
								<div class="input-group">
									<input type="text" name="tgl_beli" value="<?php echo date('d-m-Y'); ?>" class="form-control" readonly>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="card-title"><strong>JENIS</strong> PRODUK</div>
					<div class="sparkline10-list border-top mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
						<div class="form-group">
							<label class="control-label col-sm-3">Fasilitas</label>
							<div class="col-sm-5">
								<div class="form-group">
									<select name="idfas" class="chosen-select select-fasilitas">
										<option value="0">Pilih Fasilitas</option>
										<?php foreach ($fasilitas as $fas) : ?>
											<option value="<?php echo $fas['id_fasilitas']; ?>"><?php echo $fas['fasilitas']; ?></option>
										<?php endforeach; ?>
									</select>
									<small class="text-danger"><?php echo form_error('idfas'); ?></small>
								</div>
								<input type="hidden" name="nama-fas" class="nama-fas form-control" readonly>
								<input type="hidden" name="harga-fas" class="harga-fas form-control" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3">Tanggal Booking</label>
							<div class="col-sm-5">
								<div class="form-group">
									<input type="date" name="tgl_booking" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3">Jam Pakai</label>
							<div class="col-sm-4">
								<div class="form-group">
									<input type="time" name="jmpakai" class="form-control">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<!-- <h5><strong>METODE</strong> PEMBAYARAN</h5> -->
					<div class="card-title"><strong>METODE</strong> PEMBAYARAN</div>
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
									<small class="text-warning"><i>Ukuran File Maksimal 2 MB* dan Format File JPG, JPEG, PNG*</i></small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-md-12">
					<div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
						<button type="submit" class="btn btn-custon-three btn-primary">
							<i class="fa fa-floppy-o"></i> Simpan
						</button>
						<a href="<?php echo base_url('transaksiPeriodeFasilitas'); ?>" class="btn btn-custon-three btn-danger">
							<i class="fa fa-ban"></i> Batal
						</a>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
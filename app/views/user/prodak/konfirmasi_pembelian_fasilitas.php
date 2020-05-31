<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="sparkline10-list">
				<form action="<?php echo base_url('user.savekonfirmasi.fasilitas/') . $idf; ?>" method="post" enctype="multipart/form-data">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h5><?php echo $title; ?></h5>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-4 text-right">
											<img class="media-object" src="<?php echo base_url('public/assets/img/logo/bri.jpg'); ?>" width="100%">
										</div>
										<div class="col-md-8">
											<h5 class="">
												Bank Republik Indonesia <br>
												<strong>043849384-3984983</strong> <br>
												<small>Egy Gym Malang</small>
											</h5>
											<small></small>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 text-right">
											<img class="media-object" src="<?php echo base_url('public/assets/img/logo/bca.jpg'); ?>" width="100%">
										</div>
										<div class="col-md-8">
											<h5 class="">
												Bank Central Asia <br>
												<strong>043849384</strong> <br>
												<small>Egy Gym Malang</small>
											</h5>
											<small></small>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label" for="file">Upload Bukti Transfer</label>
												<input type="file" name="file_upload" class="form-control" id="file">
												<small class="text-danger"><i>Ukuran File Maksimal 2 MB* dan Format File JPG, JPEG, PNG*</i></small>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel-footer text-right">
							<button class="btn btn-primary">Continue
								<i class="fa fa-chevron-circle-right"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
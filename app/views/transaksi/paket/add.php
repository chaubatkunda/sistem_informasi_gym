	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="sparkline10-list mg-tb-30 responsive-mg-t-0">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<i class="fa fa-search"></i>
							</span>
							<input type="text" name="cari" class="form-control" placeholder="Cari Berdasarkan ID dan Nama" id="cari" autocomplete="off">
						</div>
					</div>
					<div class="table-responsive" id="table-member">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>ID</th>
									<th>Nama</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php if (empty($member)) : ?>
									<tr>
										<td colspan="4">
											<div class="alert alert-danger" role="alert">Member Tidak Ditemukan..!!</div>
										</td>
									</tr>
								<?php endif; ?>
								<?php foreach ($member as $m) : ?>
									<tr>
										<td><?php echo ++$start; ?></td>
										<td><?php echo $m->id_member; ?></td>
										<td><?php echo $m->nama; ?></td>
										<td>
											<a href="<?php echo base_url('admin/pilih_produk/') . $m->id_member; ?>" class="btn btn-primary btn-sm">Continue <i class="fa fa-chevron-circle-right"></i></a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<?php echo $this->pagination->create_links(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
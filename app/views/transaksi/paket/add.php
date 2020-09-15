	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="sparkline10-list mg-tb-30 responsive-mg-t-0">
					<div class="table-responsive">
						<table class="table table-bordered" id="table">
							<thead>
								<tr>
									<th>No</th>
									<th>ID</th>
									<th>Nama</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php $start = 1;
								foreach ($member as $m) : ?>
									<tr>
										<td><?php echo $start++; ?></td>
										<td><?php echo $m->id_member; ?></td>
										<td><?php echo $m->nama; ?></td>
										<td>
											<a href="<?php echo base_url('admin/pilih_produk/') . $m->id_member; ?>" class="btn btn-primary btn-sm">Continue <i class="fa fa-chevron-circle-right"></i></a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<!-- <?php echo $this->pagination->create_links(); ?> -->
					</div>
				</div>
			</div>
		</div>
	</div>
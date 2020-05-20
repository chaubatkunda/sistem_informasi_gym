<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list">
					<div class="sparkline13-graph">
						<div class="flash-fasilitas" data-flashfasilitas="<?php echo $this->session->flashdata('fasilitas'); ?>"></div>
						<div class="datatable-dashv1-list custom-datatable-overright">
							<table id="table" class="table table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>ID</th>
										<th>Fasilitas</th>
										<th>Harga</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($fasilitas as $fs) : ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $fs['id_fasilitas']; ?></td>
											<td><?php echo $fs['fasilitas']; ?></td>
											<td><?php echo Rp($fs['harga']); ?></td>
											<td>
												<a href="<?php echo base_url('sewafasilitas/') . $fs['id_fasilitas']; ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="right" title="Sewa">
													<i class="fa fa-money"></i> Sewa
												</a>
												<!-- <a href="" class="btn-rusak btn btn-danger btn-sm " data-toggle="tooltip" data-placement="right" title="Sewa">
														<i class="fa fa-money"></i> Sewa
													</a> -->
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
</div>
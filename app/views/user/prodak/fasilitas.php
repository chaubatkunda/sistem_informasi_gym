<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			<div class="sparkline13-list">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<?php echo $title; ?>
					</div>
					<div class="panel-body">
						<div class="flash-fasilitas" data-flashfasilitas="<?php echo $this->session->flashdata('fasilitas'); ?>"></div>
						<div class="table-responsive">
							<table id="table" class="table table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>ID</th>
										<th>Fasilitas</th>
										<th class="text-center">Harga</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($fasilitas as $fs) : ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $fs->id_fasilitas; ?></td>
											<td><?php echo $fs->fasilitas; ?></td>
											<td class="text-right"><?php echo Rp($fs->harga); ?></td>
											<td>
												<a href="<?php echo base_url('sewa.fasilitas/') . $fs->id_fasilitas; ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="right" title="Sewa">
													<i class="fa fa-money"></i>
												</a>
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
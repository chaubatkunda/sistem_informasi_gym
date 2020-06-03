	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="sparkline13-list">
					<a href="<?php echo base_url('admin/add_senam'); ?>" class="btn btn-primary mg-tb-30">
						Add Senam <i class="fa fa-plus"></i>
					</a>
					<div class="flash-senam" data-flashsenam="<?php echo $this->session->flashdata('senam'); ?>"></div>
					<div class="datatable-dashv1-list custom-datatable-overright">
						<table id="table" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Jenis Latihan</th>
									<th>Harga</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($senam as $sn) : ?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $sn->jenis_senam; ?></td>
										<td><?php echo Rp($sn->harga_senam); ?></td>
										<td>
											<a href="<?php echo base_url('admin/edit_senam/') . $sn->id_senam; ?>" class="btn btn-custon-three btn-success btn-sm mr-2" data-toggle="tooltip" data-placement="left" title="Edit">
												<i class="fa fa-pencil-square-o"></i>
											</a>
											<a href="<?php echo base_url('admin/hapus_senam/') . $sn->id_senam; ?>" class="btn btn-custon-three btn-danger btn-sm mr-2 tombol-hapus-senam" data-toggle="tooltip" data-placement="right" title="Hapus">
												<i class="fa fa-trash-o"></i>
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
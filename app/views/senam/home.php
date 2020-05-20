<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list">
					<div class="sparkline13-hd">
						<div class="main-sparkline13-hd">
							<span class="table-project-n">
								<a href="<?php echo base_url('add.senam'); ?>" class="btn btn-custon-three btn-primary mg-tb-30">
									Add Senam <i class="fa fa-plus"></i>
								</a>
							</span>
						</div>
					</div>
					<div class="sparkline13-graph">
						<div class="flash-senam" data-flashsenam="<?php echo $this->session->flashdata('senam'); ?>"></div>
						<div class="datatable-dashv1-list custom-datatable-overright">
							<table id="table" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>ID</th>
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
											<td><?php echo $sn->id_senam; ?></td>
											<td><?php echo $sn->jenis_senam; ?></td>
											<td><?php echo Rp($sn->harga_senam); ?></td>
											<td>
												<a href="<?php echo base_url('edit.senam/') . $sn->id_senam; ?>" class="btn btn-custon-three btn-success btn-sm mr-2" data-toggle="tooltip" data-placement="left" title="Edit">
													<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
												</a>
												<a href="<?php echo base_url('hapus.senam/') . $sn->id_senam; ?>" class="btn btn-custon-three btn-danger btn-sm mr-2 tombol-hapus-senam" data-toggle="tooltip" data-placement="right" title="Hapus">
													<i class="fa fa-trash-o" aria-hidden="true"></i>
												</a>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>ID</th>
										<th>Jenis Latihan</th>
										<th>Harga</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
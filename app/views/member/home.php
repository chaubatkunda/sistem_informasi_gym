<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list">
					<div class="sparkline13-hd">
						<div class="main-sparkline13-hd">
							<span class="table-project-n">
								<a href="<?php echo base_url('add-member'); ?>" class="btn btn-custon-three btn-primary mg-tb-15">
									<i class="fa fa-plus"></i>
									Add Member</a>
							</span>
						</div>
					</div>
					<div class="sparkline13-graph">
						<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('member'); ?>"></div>
						<div class="datatable-dashv1-list custom-datatable-overright">
							<table id="table" class="table table-hover table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>ID</th>
										<th>Nama</th>
										<th>No Telp/Hp</th>
										<th>Alamat</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($member as $mem) : ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $mem->id_member; ?></td>
											<td><?php echo $mem->nama; ?></td>
											<td><?php echo $mem->notelp; ?></td>
											<td><?php echo $mem->alamat; ?> </td>
											<td>
												<?php
												$aktif = $mem->aktif;
												if ($aktif == 1) :
												?>
													<div class="btn-group btn-group-sm" role="group">
														<button type="button" data-aktif="1" data-membera="<?php echo $mem->id; ?>" class="btn btn-success btn-aktif">Aktif</button>
														<button type="button" data-tidakaktif="2" data-membert="<?php echo $mem->id; ?>" class="btn btn-danger btn-tidakaktif">Tidak Aktif</button>
													</div>
												<?php else : ?>
													<div class="btn-group btn-group-sm" role="group">
														<button type="button" data-aktif="1" data-membera="<?php echo $mem->id; ?>" class="btn btn-danger btn-aktif">Aktif</button>
														<button type="button" data-tidakaktif="2" data-membert="<?php echo $mem->id; ?>" class="btn btn-success btn-tidakaktif">Tidak Aktif</button>
													</div>
												<?php endif; ?>
											</td>
											<td>
												<a href="<?php echo base_url('edit-member/') . $mem->idm; ?>" class="btn btn-custon-three btn-success btn-sm mr-2" data-toggle="tooltip" data-placement="left" title="Edit">
													<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
												</a>
												<a href="<?php echo base_url('hapus-member/') . $mem->idm; ?>" class="btn btn-custon-three btn-danger btn-sm tombol-hapusm" data-toggle="tooltip" data-placement="right" title="Hapus">
													<i class="fa fa-trash-o" aria-hidden="true"></i>
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
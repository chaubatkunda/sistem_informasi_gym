<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list">
					<div class="sparkline13-hd">
						<div class="main-sparkline13-hd">
							<span class="table-project-n">
								<a href="<?php echo base_url('add.fasilitas'); ?>" class="btn btn-custon-three btn-primary mg-tb-15">
									<i class="fa fa-plus"></i>
									Add Fasilitas</a>
							</span>
						</div>
					</div>
					<div class="sparkline13-graph">
						<div class="flash-fasilitas" data-flashfasilitas="<?php echo $this->session->flashdata('fasilitas'); ?>"></div>
						<div class="datatable-dashv1-list custom-datatable-overright">
							<table id="table" class="table table-hover table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>Fasilitas</th>
										<th>Tanggal Masuk</th>
										<th>Tanggal Rusak</th>
										<th>Harga</th>
										<th>Keterangan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($fasilitas as $fs) : ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $fs->fasilitas; ?></td>
											<td><?php echo indoDate($fs->tgl_add); ?></td>
											<td>
												<?php if ($fs->tgl_rusak == null || $fs->tgl_rusak == '0000-00-00') : ?>
													<strong class="text-success">-</strong>
												<?php else : ?>
													<?php echo indoDate($fs->tgl_rusak); ?>
												<?php endif; ?>
											</td>
											<td><?php echo Rp($fs->harga); ?></td>
											<td>
												<?php if ($fs->ket == 1) : ?>
													<strong class="text-success">Baik</strong>
												<?php else : ?>
													<strong class="text-danger">Rusak</strong>
												<?php endif; ?>
											</td>
											<td>
												<a href="<?php echo base_url('edit.fasilitas/') . $fs->id_fasilitas; ?>" class="btn btn-custon-three btn-success btn-sm mr-2" data-toggle="tooltip" data-placement="left" title="Edit">
													<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
												</a>
												<a href="<?php echo base_url('hapus.fasilitas/') . $fs->id_fasilitas; ?>" class="btn btn-custon-three btn-danger btn-sm mr-2 tombol-hapusm" data-toggle="tooltip" data-placement="right" title="Hapus">
													<i class="fa fa-trash-o" aria-hidden="true"></i>
												</a>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Fasilitas</th>
										<th>Tanggal Masuk</th>
										<th>Tanggal Rusak</th>
										<th>Harga</th>
										<th>Keterangan</th>
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
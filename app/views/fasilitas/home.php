<div class="container-fluid">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="sparkline13-list">
				<a href="<?php echo base_url('admin/add_fasilitas'); ?>" class="btn btn-primary mg-tb-15">
					<i class="fa fa-plus"></i> Add Fasilitas
				</a>
				<div class="flash-fasilitas" data-flashfasilitas="<?php echo $this->session->flashdata('fasilitas'); ?>"></div>
				<div class="datatable-dashv1-list custom-datatable-overright">
					<table id="table" class="table table-hover table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Tanggal Masuk</th>
								<th>Tanggal Rusak</th>
								<th>Fasilitas</th>
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
									<td><?php echo indoDate($fs->tgl_add); ?></td>
									<td>
										<?php if ($fs->tgl_rusak == null || $fs->tgl_rusak == '0000-00-00') : ?>
											<strong class="text-success">-</strong>
										<?php else : ?>
											<?php echo indoDate($fs->tgl_rusak); ?>
										<?php endif; ?>
									</td>
									<td><?php echo $fs->fasilitas; ?></td>
									<td><?php echo Rp($fs->harga); ?></td>
									<td>
										<?php if ($fs->ket == 1) : ?>
											<strong class="text-success">Baik</strong>
										<?php else : ?>
											<strong class="text-danger">Rusak</strong>
										<?php endif; ?>
									</td>
									<td>
										<a href="<?php echo base_url('admin/edit_fasilitas/') . $fs->id_fasilitas; ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="Edit">
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
										</a>
										<a href="<?php echo base_url('admin/hapus_fasilitas/') . $fs->id_fasilitas; ?>" class="btn btn-danger btn-sm tombol-hapusm" data-toggle="tooltip" data-placement="right" title="Hapus">
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
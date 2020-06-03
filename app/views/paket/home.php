<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="sparkline13-list">
				<a href="<?php echo base_url('admin/add_paket'); ?>" class="btn btn-primary mg-tb-15">
					<i class="fa fa-plus"></i>
					Add Paket
				</a>
				<div class="flash-paket" data-flashpaket="<?php echo $this->session->flashdata('paket'); ?>"></div>
				<div class="datatable-dashv1-list custom-datatable-overright">
					<table id="table" class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Paket</th>
								<th>Harga</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($paket as $pk) : ?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $pk->nama_paket; ?></td>
									<td class="text-right"><?php echo Rp($pk->harga); ?></td>
									<td>
										<?php
										$tgla = date("Y-m-d");
										$tglb = $pk->tgl_awal;
										$tglc = $pk->tgl_akhir;
										if ($tgla >= $tglc) {
											echo "Tidak Aktif";
										} else {
											echo "Aktif";
										}
										?>
									</td>
									<td>
										<?php
										$queryIdPaket = $this->db->get_where('t_setingpaket', ['id_paket' => $pk->id_paket])->num_rows();
										//echo $queryIdPaket;
										?>
										<a href="<?php echo base_url('admin/detail_paket/') . $pk->id_paket; ?>" class="btn btn-success btn-sm mr-2" data-toggle="tooltip" data-placement="left" title="Detail">
											<i class="fa fa-info-circle" aria-hidden="true"></i>
										</a>
										<a href="<?php echo base_url('admin/edit_paket/') . $pk->id_paket; ?>" class="btn btn-success btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="Edit">
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
										</a>
										<?php if ($queryIdPaket) : ?>
											<a href="<?php echo base_url('admin/hapus_paket/') . $pk->id_paket; ?>" class="btn btn-danger btn-sm tombol-hapustdk" data-toggle="tooltip" data-placement="right" title="Hapus">
												<i class="fa fa-trash-o" aria-hidden="true"></i>
											</a>
										<?php else : ?>
											<a href="<?php echo base_url('admin/hapus_paket/') . $pk->id_paket; ?>" class="btn btn-danger btn-sm tombol-hapusm" data-toggle="tooltip" data-placement="right" title="Hapus">
												<i class="fa fa-trash-o" aria-hidden="true"></i>
											</a>
										<?php endif; ?>
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
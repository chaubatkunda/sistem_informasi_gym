<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="sparkline13-list">
				<div class="flash-detail" data-flashdetail="<?php echo $this->session->flashdata('detpaket'); ?>"></div>
				<div class="btn-group pull-right" role="group">
					<a href="<?php echo base_url('admin/add_detail_paket/') . $paket->id_paket; ?>" class="btn btn-custon-three btn-primary">
						<i class="fa fa-fw fa-plus"></i>
					</a>
					<a href="<?php echo base_url('admin/paket'); ?>" class="btn btn-custon-three btn-success">
						<i class="fa fa-fw fa-undo"></i>
					</a>
				</div>
				<br>
				<br>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<label class="form-label col-md-6">Paket</label>
									<label class="form-label col-md-6"><?php echo $paket->nama_paket; ?></label>
								</div>
								<div class="row">
									<label class="form-label col-md-6">Harga</label>
									<label class="form-label col-md-6"><?php echo Rp($paket->harga); ?></label>
								</div>
								<div class="row">
									<label class="form-label col-md-6">Tanggal Aktif</label>
									<label class="form-label col-md-6"><?php echo indoDate($paket->tgl_awal); ?></label>
								</div>
							</div>
						</div>
					</div>
					<!-- Table -->
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Senam</th>
									<th>Kuota</th>
									<th>Tanggal Latihan</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($detpaket as $pk) : ?>
									<tr>
										<td>
											<?php echo $pk->jenis_senam; ?>
										</td>
										<td>
											<?php echo $pk->kuota; ?>
											<strong>x</strong>
										</td>
										<td>
											<?php
											$dettgl = $this->db->get_where('t_setpaket_det', ['id_setpaket' => $pk->id_setingpaket])->result(); ?>

											<ul class="list-group">
												<?php
												foreach ($dettgl as $dtt) :
												?>
													<li class="">
														<?php echo indoDate($dtt->tgl_masuk) . ", " . indoTime($dtt->jam_mulai) . " - " . indoTime($dtt->jam_selesai); ?>
													</li>
												<?php endforeach; ?>
											</ul>
										</td>
										<td>
											<a href="<?php echo base_url('admin/edit_detail/') . $pk->id_setingpaket; ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="Edit">Edit</a>
											<a href="<?php echo base_url('admin/hapus_detail/') . $pk->id_setingpaket; ?>" class="btn btn-danger btn-sm tombol-hapus-detail" data-toggle="tooltip" data-placement="right" title="Hapus">Hapus</a>
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
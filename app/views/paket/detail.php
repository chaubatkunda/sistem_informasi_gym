<!-- Static Table Start -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-sm-12 col-xs-12">
			<div class="sparkline13-list">
				<div class="sparkline13-graph">
					<div class="flash-detail" data-flashdetail="<?php echo $this->session->flashdata('detpaket'); ?>"></div>
					<div class="btn-group pull-right" role="group">
						<a href="<?php echo base_url('addDetailPaket/') . $paket->id_paket; ?>" class="btn btn-custon-three btn-primary">
							<i class="fa fa-fw fa-plus"></i>
						</a>
						<a href="<?php echo base_url('paket'); ?>" class="btn btn-custon-three btn-success">
							<i class="fa fa-fw fa-undo"></i>
						</a>
					</div>
					<br>
					<br>
					<div class="panel panel-info">
						<!-- Default panel contents -->
						<div class="panel-heading">
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-6">
													<h4>Paket</h4>
												</div>
												<div class="col-md-6">
													<strong class="badge"><?php echo $paket->nama_paket; ?></strong>
												</div>
											</div>
										</div>
									</div>
									<div class="row text-primary">
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-6">
													<h5>Harga</h5>
												</div>
												<div class="col-md-6">
													<i>
														<?php echo Rp($paket->harga); ?>
													</i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<h5 class="pull-right">Tanggal Aktif :
										<strong>
											<i>
												<?php echo indoDate($paket->tgl_awal); ?>
											</i>
										</strong>
									</h5>

								</div>
							</div>
						</div>
						<!-- Table -->
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>ID</th>
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
											<?php echo $pk->id_senam; ?>
										</td>
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
											<a href="<?php echo base_url('editDetail/') . $pk->id_setingpaket; ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="Edit">Edit</a>
											<a href="<?php echo base_url('hapusDetail/') . $pk->id_setingpaket; ?>" class="btn btn-danger btn-sm tombol-hapus-detail" data-toggle="tooltip" data-placement="right" title="Hapus">Hapus</a>
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
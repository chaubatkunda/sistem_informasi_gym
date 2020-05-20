<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-sm-12 col-xs-12">
				<div class="sparkline13-list">
					<div class="sparkline13-graph">
						<div class="flash-detail" data-flashdetail="<?php echo $this->session->flashdata('detpaket'); ?>"></div>
						<div class="btn-group pull-right" role="group">
							<a href="<?php echo base_url('user-paket'); ?>" class="btn btn-custon-three btn-success">
								<i class="fa fa-fw fa-undo"></i>
							</a>
						</div>
						<br>
						<br>
						<div class="panel panel-default">
							<!-- Default panel contents -->
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-6">
										<h4>Paket : <strong class="badge"><?php echo $paket['nama_paket']; ?></strong></h4>
									</div>
									<div class="col-md-6">
										<h5 class="pull-right">Tanggal Aktif : <strong><i><?php echo date('d-m-Y', strtotime($paket['tgl_akhir'])); ?></i></strong></h5>
									</div>
								</div>
								<!-- <span class="badge">42</span> -->
							</div>
							<br>
							<!-- Table -->
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Senam</th>
										<th>Kuota</th>
										<th>Tanggal Latihan</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($detpaket as $pk) : ?>
										<tr>
											<td><?php echo $pk['id_senam']; ?></td>
											<td><?php echo $pk['jenis_senam']; ?></td>
											<td><?php echo $pk['kuota']; ?> <strong>x</strong></td>
											<td>
												<?php echo date('d', strtotime($pk['date1'])) . " <strong>dan</strong> " . date('d M ', strtotime($pk['date2'])) . ", " . date('H:i', strtotime($pk['jam_mulai'])) . "<strong> - </strong>" . date('H:i', strtotime($pk['jam_selesai'])); ?>
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

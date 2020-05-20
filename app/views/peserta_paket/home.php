<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sparkline13-list">
					<div class="sparkline13-hd">
						<div class="main-sparkline13-hd">
							<span class="table-project-n">
							</span>
						</div>
					</div>
					<div class="sparkline13-graph">
						<div class="datatable-dashv1-list custom-datatable-overright">
							<table id="table" class="table table-hover table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>ID</th>
										<th>Nama</th>
										<th>Jenis Paket</th>
										<th>Tanggal Pembelian</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($peserta as $mem) : ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $mem->idmember; ?></td>
											<td><?php echo $mem->nama; ?></td>
											<td><?php echo $mem->nama_paket; ?></td>
											<td>
												<?php echo date('d-m-Y', strtotime($mem->tgl_trans)); ?>
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
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="sparkline13-list">
				<div class="datatable-dashv1-list custom-datatable-overright">
					<table id="table" class="table table-hover table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Paket</th>
								<th>Jumlah Peserta</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($peserta as $p) : ?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $p->nama_paket; ?></td>
									<td>
										<?php
										$querySum = $this->db->get_where('t_transpaket', ['nama_paket' => $p->nama_paket])->num_rows();
										?>
										<span class="badge"><?php echo $querySum; ?></span> Peserta
									</td>
									<td>
										<a href="<?php echo base_url('admin/detail-peserta/' . $p->nama_paket); ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
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
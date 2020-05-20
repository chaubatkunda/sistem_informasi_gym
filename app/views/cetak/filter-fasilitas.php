<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo base_url('public/assets/css/cetak.css'); ?>">
</head>

<body>
	<div class="header">
		<div class="logo-gym">
			<img src="<?php echo base_url('public/assets/icon/logogymblack.png'); ?>" alt="egy gym">
		</div>
		<div class="title">
			<h5>EGY <strong>GYM</strong></h5>
			<h4>Kompleks Ruko Wow AP. 02 <br>Sawojajar Malang</h4>
		</div>
	</div>

	<div class="row  mt-3">
		<div class="col-md-12">
			<div class="title-lap">
				<h5 class="text-center">LAPORAN FASILITAS PERIODE <br> <?php echo $periode; ?></h5>
			</div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal Pembelian</th>
						<th>Fasilitas</th>
						<th>Jam Pakai</th>
						<th>Kode Pembelian</th>
						<th>Harga</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($cetak as $ct) :
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td>
								<?php echo date('d-m-Y', strtotime($ct['tgl_transfasilitas'])); ?>
							</td>
							<td>
								<?php echo $ct['nama_fasilitas']; ?>
							</td>
							<td>
								<?php echo date('H:i', strtotime($ct['jam_mulai'])) . "-" . date('H:i', strtotime($ct['jam_selesai'])); ?>
							</td>
							<td>
								<?php echo $ct['kode_pembelian']; ?>
							</td>
							<td>
								<?php echo number_format($ct['total_bayar'], 0, ',', '.'); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				<?php if (!empty($total)) : ?>
					<tr>
						<td colspan="5" style="text-align: right;">Total</td>
						<td>
							<?php echo number_format($total, 0, ',', '.'); ?>
						</td>
					</tr>
				<?php endif; ?>
			</table>
		</div>
	</div>
</body>

</html>

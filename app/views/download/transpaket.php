<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <!-- Content -->
    <div class="row">
        <div class="col col-6">
            <div class="form-group">
                <div class="col-25">
                    <label for="" class="label">ID Member</label>
                </div>
                <div class="col-50">
                    <label for="" class="form-control">: <?php echo $trpaket['id_member']; ?></label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-25">
                    <label for="" class="label">Nama</label>
                </div>
                <div class="col-50">
                    <label for="" class="form-control">: <?php echo $trpaket['nama']; ?></label>
                </div>
            </div>
        </div>
        <div class="col col-6 text-justify">
            <div class="form-group">
                <div class="col-40">
                    <label for="" class="label">Kode Pembelian</label>
                </div>
                <div class="col-40">
                    <label for="" class="form-control">: <?php echo $trpaket['kode_pembelian']; ?></label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-40">
                    <label for="" class="label">Tanggal Transaksi</label>
                </div>
                <div class="col-40">
                    <label for="" class="form-control">: <?php echo $trpaket['tgl_trans']; ?></label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-40">
                    <label for="" class="label">Jenis Pembelian</label>
                </div>
                <div class="col-40">
                    <label for="" class="form-control">: Paket <?php echo $trpaket['nama_paket']; ?></label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-12">

            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Senam</th>
                        <th>Kuota</th>
                        <th>Periode</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($detail as $det) : ?>
                        <tr>
                            <td><?php echo $det['jenis_senam']; ?></td>
                            <td><?php echo $det['kuota']; ?> x Pemakaian</td>
                            <td><?php echo $det['periode']; ?> Hari</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tr>
                    <td colspan="2" class="text-right">Total</td>
                    <td><?php echo $trpaket['harga_paket']; ?></td>
                </tr>
            </table>
        </div>
    </div>
    <!-- End Content -->
    <!-- Footer -->
    <!-- <div class="footer">
        <p>EGY GYM MALANG</p>
    </div> -->
    <!-- End Footer -->
</body>

</html>
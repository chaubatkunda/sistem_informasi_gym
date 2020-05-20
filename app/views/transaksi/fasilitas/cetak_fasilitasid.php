<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <a href="<?php echo base_url('transaksiPeriodeFasilitas'); ?>" class="btn btn-custon-three btn-success btn-sm pull-right mg-b-10">
                <i class="fa fa-undo"></i> Kembali
            </a>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="sparkline13-list">
                <div class="row">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo base_url('public/assets/icon/logogymblack.png'); ?>" class="img-circle mg-b-10" alt="egygym" width="100">
                            </div>
                            <div class="col-md-6">
                                <h4>EGYM GYM MALANG</h4>
                                <small>Kompleks Ruko Wow AP. 02</small>
                                <br>
                                <small>Sawojajar Malang</small>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="text-center mg-b-10">BUKTI SEWA FASILITAS</h4>
                <div class="row">
                    <div class="col-md-2">
                        <label for="">ID</label>
                    </div>
                    <div class="col-md-4">
                        <?php echo $cetak['id_member']; ?>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Kode Transaksi</label>
                            </div>
                            <div class="col-md-6">
                                <?php echo $cetak['kode_pembelian']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="">Nama</label>
                    </div>
                    <div class="col-md-4">
                        <?php echo $cetak['nama']; ?>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Tanggal</label>
                            </div>
                            <div class="col-md-6">
                                <?php echo indoDate($cetak['tgl_transfasilitas']); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mg-b-10">
                    <div class="col-md-2">
                        <label for="">Telp/Hp</label>
                    </div>
                    <div class="col-md-6">
                        <?php echo $cetak['notelp']; ?>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Fasilitas</th>
                            <th>Tanggal Booking</th>
                            <th>Jam Pemakaian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $cetak['nama_fasilitas']; ?></td>
                            <td><?php echo indoDate($cetak['tgl_booking']); ?></td>
                            <td><?php echo indoTIme($cetak['jam_mulai']) . " - " . indoTime($cetak['jam_selesai']); ?></td>
                        </tr>
                    </tbody>
                    <tr>
                        <th colspan="2" class="text-right">Total</th>
                        <td class="text-right"><?php echo Rp($cetak['total_bayar']); ?></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Cetak</a>
                            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-download"></i> Download</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
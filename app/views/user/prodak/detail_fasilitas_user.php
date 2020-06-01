<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="sparkline10-list">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <?php echo $topik; ?>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-md-6 text-right">Tanggal Transaksi</label>
                                    <label class="col-md-6"><?php echo indoDate($fasilitas->tgl_transfasilitas); ?></label>
                                </div>

                                <div class="row">
                                    <label class="col-md-6 text-right">Fasilitas</label>
                                    <label class="col-md-6"><?php echo $fasilitas->nama_fasilitas; ?></label>
                                </div>
                                <div class="row">
                                    <label class="col-md-6 text-right">Tanggal Booking</label>
                                    <label class="col-md-6"><?php echo indoDate($fasilitas->tgl_booking); ?></label>
                                </div>
                                <div class="row">
                                    <label class="col-md-6 text-right">Jam Pakai</label>
                                    <label class="col-md-6"><?php echo indoTime($fasilitas->jam_mulai); ?></label>
                                </div>
                                <div class="row">
                                    <label class="col-md-6 text-right">Jam Selesai</label>
                                    <label class="col-md-6"><?php echo indoTime($fasilitas->jam_selesai); ?></label>
                                </div>
                                <div class="row">
                                    <label class="col-md-6 text-right">Total</label>
                                    <label class="col-md-6 text-primary"><?php echo Rp($fasilitas->total_bayar); ?></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-md-6 text-right">Kode Pembelian</label>
                                    <label class="col-md-6"><?php echo $fasilitas->kode_pembelian; ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href="<?php echo base_url('user.transaksi'); ?>" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
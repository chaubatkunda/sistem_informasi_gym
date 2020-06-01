<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="sparkline13-list">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <?php echo $title; ?>
                    </div>
                    <div class="panel-body">
                        <h2 class="text-primary">Status |
                            <?php if ($fasilitas->ket_bayar) : ?>
                                <small class="text-warning">Menunggu Konfirmasi</small>
                            <?php else : ?>
                                <small class="text-warning">Pending</small>
                            <?php endif; ?>
                        </h2>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Kode Transaksi</th>
                                    <td><?php echo $fasilitas->kode_pembelian; ?></td>
                                </tr>
                                <tr>
                                    <th>Fasilitas</th>
                                    <td><?php echo $fasilitas->nama_fasilitas; ?></td>
                                </tr>
                                <tr>
                                    <th>Harga</th>
                                    <td><?php echo Rp($fasilitas->total_bayar); ?></td>
                                </tr>
                                <tr>
                                    <th>Ket Bayar</th>
                                    <td>
                                        <?php if ($fasilitas->is_success == 1) : ?>
                                            <span class="text-success">Success</span>
                                        <?php else : ?>
                                            <?php if ($fasilitas->ket_bayar == 1) : ?>
                                                <span class="text-success">Transfer</span>
                                                <a class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#imgConformBayarFasilitas">Show</a>
                                            <?php elseif ($fasilitas->ket_bayar == 2) : ?>
                                                <span class="text-success">Tunai</span>
                                            <?php elseif ($fasilitas->ket_bayar == 3) : ?>
                                                <span class="text-success">EDC</span>
                                            <?php else : ?>
                                                <img src="<?php echo base_url('public/assets/buktitransfer/') . $fasilitas->bukti_pembayaran; ?>" alt="">
                                            <?php endif; ?>

                                        <?php endif; ?>
                                    </td>
                            </table>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <form action="<?php echo base_url('save.cofirmfasil/') . $fasilitas->kode_pembelian; ?>" method="post">
                            <button type="submit" class="btn btn-success">Ya</button>
                            <a href="<?php echo base_url('konfirmasi'); ?>" class="btn btn-danger">Tidak
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="imgConformBayarFasilitas" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
                <h4 class="modal-title">Bukti Transfer Pembayaran </h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <!-- <i class="educate-icon educate-checked modal-check-pro"></i> -->
                <!-- <h2>Suksess</h2> -->
                <img src="<?php echo base_url('public/assets/buktitransfer/') . $fasilitas->bukti_pembayaran; ?>" alt="">
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal" href="#">Close</a>
            </div>
        </div>
    </div>
</div>
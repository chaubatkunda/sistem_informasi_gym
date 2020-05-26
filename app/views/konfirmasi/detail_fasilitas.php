<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="sparkline13-list">
                <h2 class="text-primary"><?php echo $title; ?>
                    <?php if ($fasilitas->is_success == 1) : ?>
                        <small class="text-success">Success</small>
                    <?php else : ?>
                        <small class="text-warning">Pending</small>
                    <?php endif; ?>
                </h2>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <td><?php echo $fasilitas->nama; ?></td>
                        </tr>
                        <tr>
                            <th>ID Member</th>
                            <td><?php echo $fasilitas->id_member; ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <th>Kode Transaksi</th>
                            <td><?php echo $fasilitas->kode_pembelian; ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Transaksi</th>
                            <td><?php echo indoDateTime($fasilitas->tgl_transfasilitas); ?></td>
                        </tr>
                        <tr>
                            <th>Fasilitas</th>
                            <td><?php echo $fasilitas->nama_fasilitas; ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Pemakaian</th>
                            <td>
                                <?php echo indoDate($fasilitas->tgl_booking); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Jam</th>
                            <td>
                                <?php echo indoTime($fasilitas->jam_mulai) . ", " . indoTime($fasilitas->jam_selesai); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td><?php echo Rp($fasilitas->total_bayar); ?></td>
                        </tr>
                        <tr>
                            <th>Ket Bayar</th>
                            <td>
                                <?php if ($fasilitas->is_success == 1) : ?>
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
                                <?php else : ?>
                                    <span class="text-warning">Pending</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <a href="<?php echo base_url('konfirmasi'); ?>" class="btn btn-danger btn-sm pull-right">Kembali</a>
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
                <i class="educate-icon educate-checked modal-check-pro"></i>
                <!-- <h2>Suksess</h2> -->
                <img src="<?php echo base_url('public/assets/buktitransfer/') . $fasilitas->bukti_pembayaran; ?>" alt="">
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal" href="#">Close</a>
            </div>
        </div>
    </div>
</div>
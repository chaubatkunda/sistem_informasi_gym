<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="sparkline13-list">
                <div class="panel panel-primary">
                    <form action="" method="post">
                        <div class="panel-heading">
                            <!-- <h5>Panel Default</h5> -->
                        </div>
                        <div class="panel-body">
                            <h2 class="text-primary">Verifikasi
                                <?php if ($paket->ket_bayar) : ?>
                                    <small class="text-warning">Menunggu Konfirmasi</small>
                                <?php endif; ?>
                            </h2>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>Kode Transaksi</th>
                                        <td><?php echo $paket->kode_pembelian; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Paket</th>
                                        <td><?php echo $paket->nama_paket; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Harga</th>
                                        <td><?php echo Rp($paket->harga_paket); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Ket Bayar</th>
                                        <td>
                                            <?php if ($paket->ket_bayar == 1) : ?>
                                                <span class="text-success">Transfer</span>
                                                <a class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#imgConformBayarPaket">Show</a>
                                            <?php elseif ($paket->ket_bayar == 2) : ?>
                                                <span class="text-success">Transfer</span>
                                            <?php elseif ($paket->ket_bayar == 3) : ?>
                                                <span class="text-success">EDC</span>
                                            <?php else : ?>
                                                <span class="text-success">Belum Ada</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>

                                        </th>
                                        <td>
                                            <div class="inline-checkbox-cs">
                                                <label class="checkbox-inline i-checks pull-left">
                                                    <div class="icheckbox_square-green" style="position: relative;">
                                                        <input type="checkbox" value="1" name="valid-paket[]" style="position: absolute; opacity: 0;">
                                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                    </div> Ya
                                                </label>
                                                <label class="checkbox-inline i-checks pull-left">
                                                    <div class="icheckbox_square-green" style="position: relative;">
                                                        <input type="checkbox" name="valid-paket[]" value="2" style="position: absolute; opacity: 0;">
                                                        <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                    </div> Tidak
                                                </label>
                                            </div>
                                            <br>
                                            <?php echo validation_errors('<div class="text-danger">', '</div>'); ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="panel-footer">

                            <button type="submit" class="btn btn-primary">Konfirmasi</button>
                            <a href="" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="imgConformBayarPaket" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
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
                <img src="<?php echo base_url('public/assets/buktitransfer/') . $paket->bukti_pembayaran; ?>">
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal" href="#">Close</a>
            </div>
        </div>
    </div>
</div>
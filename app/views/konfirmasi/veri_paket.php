<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="sparkline13-list">
                <h2 class="text-primary">Verifikasi
                    <?php if ($paket->is_success == 1) : ?>
                        <small class="text-success">Success</small>
                    <?php else : ?>
                        <small class="text-warning">Pending</small>
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
                                    <span class="text-success">Tunai</span>
                                <?php elseif ($paket->ket_bayar == 2) : ?>
                                    <span class="text-success">Transfer</span>
                                <?php elseif ($paket->ket_bayar == 3) : ?>
                                    <span class="text-success">EDC</span>
                                <?php else : ?>
                                    <img src="<?php echo base_url('public/assets/buktitransfer/') . $paket->bukti_pembayaran; ?>" alt="">
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
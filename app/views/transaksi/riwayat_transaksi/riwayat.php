<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="tab-content-details shadow-reset">
                <h2 class="text-primary">Riwayat Transaksi</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="admintab-wrap edu-tab1 mg-t-30">
                <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
                    <li class="active">
                        <a data-toggle="tab" href="#TabPaket">
                            <span class="edu-icon edu-analytics tab-custon-ic"></span>Paket
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#TabFasilitas">
                            <span class="edu-icon edu-analytics-arrow tab-custon-ic"></span>Fasilitas
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="TabPaket" class="tab-pane in active animated flipInX custon-tab-style1">
                        <div class="table-responsive">
                            <table id="table" class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Kode Pembelian</th>
                                        <th>Paket</th>
                                        <th class="text-center">Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($transaksi as $t) : ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo indoDate($t->tgl_trans); ?></td>
                                            <td><?php echo $t->kode_pembelian; ?></td>
                                            <td><?php echo $t->nama_paket; ?></td>
                                            <td class="text-right"><?php echo Rp($t->harga_paket); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="TabFasilitas" class="tab-pane animated flipInX custon-tab-style1">
                        <div class="table-responsive">
                            <table id="table" class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Kode Pembelian</th>
                                        <th>Fasilitas</th>
                                        <th class="text-center">Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($fasilitas as $f) : ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo indoDate($f->tgl_transfasilitas); ?></td>
                                            <td><?php echo $f->kode_pembelian; ?></td>
                                            <td><?php echo $f->nama_fasilitas; ?></td>
                                            <td class="text-right"><?php echo Rp($f->total_bayar); ?></td>
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
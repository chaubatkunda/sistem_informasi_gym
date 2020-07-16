<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="tab-content-details shadow-reset">
                <h2>Konfirmasi Pembelian Paket dan Sewa Fasilitas</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- <div class="col-md-2"></div> -->
        <div class="col-md-12">
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
                            <table class="table table-bordered table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>ID/Nama</th>
                                        <th>Kode Transaksi</th>
                                        <th>Paket</th>
                                        <th>Harga</th>
                                        <th>Ket Bayar</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($paket as $p) : ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo indoDate($p->tgl_trans); ?></td>
                                            <td>
                                                <?php echo $p->id_member; ?>/
                                                <small class="text-primary"><?php echo $p->nama; ?></small>
                                            </td>
                                            <td><?php echo $p->kode_pembelian; ?></td>
                                            <td><?php echo $p->nama_paket; ?></td>
                                            <td><?php echo Rp($p->harga_paket); ?></td>
                                            <td>
                                                <?php if ($p->is_success == 1) : ?>
                                                    <span class="text-success">Lunas</span>
                                                <?php else : ?>
                                                    <span class="text-danger">Belum Lunas</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if ($p->is_success == 1) : ?>
                                                    <a href="<?php echo base_url('admin/detconfirm.peket/') . $p->kode_pembelian; ?>" class="btn btn-info btn-sm">Detail</a>
                                                <?php else : ?>
                                                    <a href="<?php echo base_url('admin/verifikasi.paket/') . $p->kode_pembelian; ?>" class="btn btn-success btn-sm">Verifikasi</a>
                                                    <a href="<?php echo base_url('admin/konfirmasi_pembelian/') . $p->kode_pembelian; ?>" class="btn btn-primary btn-sm">Konfirmasi</a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="TabFasilitas" class="tab-pane animated flipInX custon-tab-style1">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="tablef">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Booking</th>
                                        <th>ID</th>
                                        <th>Fasilitas</th>
                                        <th>Harga</th>
                                        <th>Ket Bayar</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($fasilitas as $f) :
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo indoDate($f->tgl_booking); ?></td>
                                            <td>
                                                <?php echo $f->id_member; ?>/
                                                <small class="text-primary"><?php echo $f->nama; ?></small>
                                            </td>
                                            <td><?php echo $f->nama_fasilitas; ?></td>
                                            <td><?php echo Rp($f->total_bayar); ?></td>
                                            <td>
                                                <?php if ($f->is_success == 1) : ?>
                                                    <small class="text-success">Lunas</small>
                                                <?php else : ?>
                                                    <small class="text-danger">Belum Lunas</small>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if ($f->is_success == 1) : ?>
                                                    <a href="<?php echo base_url('detconfirm.fasilitas/') . $f->kode_pembelian; ?>" class="btn btn-info btn-sm">Detail</a>
                                                <?php else : ?>
                                                    <?php if ($f->ket_bayar) : ?>
                                                        <a href="<?php echo base_url('verifikasi.fasilitas/') . $f->kode_pembelian; ?>" class="btn btn-danger btn-sm">Verifikasi</a>
                                                    <?php else : ?>
                                                        <a href="<?php echo base_url('admin/konfirmasi_fasilitas/') . $f->kode_pembelian; ?>" class="btn btn-primary btn-sm">Konfirmasi</a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
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
    </div>
</div>
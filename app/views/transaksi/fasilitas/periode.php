<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row mg-b-15">
            <div class="col-md-12">
                <div class="dropdown pull-right">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fa fa-bars"></i> Kategori Transaksi Fasilitas
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu animated zoomIn" aria-labelledby="dropdownMenu1">
                        <li>
                            <a href="<?php echo base_url('addTransFasilitas'); ?>">Add Transaksi </a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="<?php echo base_url('transaksiPeriodeFasilitas'); ?>">Transaksi Perhari</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="<?php echo base_url('transaksiFasilitas'); ?>">Keseluruhan Transaksi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-graph">
                        <!-- <div class="flash-trans" data-flashtrans="<?php echo $this->session->flashdata('transaksi'); ?>"></div> -->
                        <?php echo $this->session->flashdata('fasilitas'); ?>
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Pembelian</th>
                                        <th>Fasilitas</th>
                                        <th>Jam Pakai</th>
                                        <th>Kode Pembelian</th>
                                        <th>Harga</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($transaksi as $trans) : ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo indoDate($trans['tgl_transfasilitas']); ?></td>
                                            <td><?php echo $trans['nama_fasilitas']; ?></td>
                                            <td><?php echo date('H:i', strtotime($trans['jam_mulai'])) . "-" . date('H:i', strtotime($trans['jam_selesai'])); ?></td>
                                            <td><?php echo $trans['kode_pembelian']; ?></td>
                                            <td><?php echo Rp($trans['total_bayar']); ?> </td>
                                            <td>
                                                <?php
                                                $ket = $trans['ket_bayar'];
                                                if ($ket == 1) : ?>
                                                    <strong class="text-success">Lunas</strong>
                                                <?php elseif ($ket == 2) : ?>
                                                    <strong class="text-danger">Belum Verifikasi</strong>
                                                <?php else : ?>
                                                    <strong class="text-danger">Belum Lunas</strong>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php
                                                $ket = $trans['ket_bayar'];
                                                if ($ket == 1) :
                                                ?>
                                                    <a href="#" class="btn btn-success btn-sm mr-2" data-toggle="tooltip" data-placement="left" title="Success">
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                    </a>
                                                <?php else : ?>
                                                    <a href="<?php echo base_url('validasiFasilitas/') . $trans['id_transfasilitas']; ?>" class="btn btn-custon-three btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Validasi">
                                                        <i class="fa fa-money"></i>
                                                    </a>
                                                <?php endif; ?>
                                                <a href="<?php echo base_url('cetakFasilitas/') . $trans['kode_pembelian']; ?>" class="btn btn-custon-three btn-primary btn-sm" data-toggle="tooltip" data-placement="right" title="Detail">
                                                    <i class="fa fa-eye"></i>
                                                </a>
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
<div class="container">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="sparkline10-list">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <?php echo $topik; ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <label class="col-md-6">Kode Pembelian</label>
                                <label class="col-md-6"><?php echo $paket->kode_pembelian; ?></label>
                            </div>
                            <div class="row">
                                <label class="col-md-6">Tanggal Transaksi</label>
                                <label class="col-md-6"><?php echo indoDate($paket->tgl_trans); ?></label>
                            </div>
                            <div class="row">
                                <label class="col-md-6">Paket</label>
                                <label class="col-md-6"><?php echo $paket->nama_paket; ?></label>
                            </div>
                            <div class="row">
                                <label class="col-md-6">Harga</label>
                                <label class="col-md-6"><?php echo Rp($paket->harga_paket); ?></label>
                            </div>
                            <div class="row">
                                <div class="co-md-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Jenis Senam</th>
                                                <th>Kuota</th>
                                                <th>Tanggal Latihan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($isipaket as $ip) : ?>
                                                <tr>
                                                    <td><?php echo $ip->jenis_senam; ?></td>
                                                    <td><?php echo $ip->kuota; ?> <strong>x</strong></td>
                                                    <td>
                                                        <?php
                                                        $idd = [
                                                            'kode_pembelian'    => $ip->kode_pembelian,
                                                            'setpaket_id'       => $ip->setpaket_id
                                                        ];
                                                        $query = $this->db->where($idd)->get('t_transisipaket_det')->result();
                                                        ?>
                                                        <ul class="list-group">
                                                            <?php foreach ($query as $qr) : ?>
                                                                <li><?php echo indoDate($qr->tgl_mulai) . ", " . indoTime($qr->jam_mulai) . " - " . indoTime($qr->jam_selesai); ?></li>
                                                            <?php endforeach; ?>
                                                        </ul>
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
                <div class="panel-footer">
                    <a href="<?php echo base_url('user.transaksi'); ?>" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    Pembelian Paket dan Sewa Fasilitas
                </a>
                <button class="list-group-item btn-userpaket">Paket</button>
                <button class="list-group-item btn-userfasilitas">Fasilitas</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <?php echo $topik; ?>
                </div>
                <div class="panel-body">
                    <div class="sparkline10-list">
                        <div class="user-paket">
                            <?php foreach ($paket as $p) : ?>
                                <div class="user-comment">
                                    <?php if ($p->is_success == 1) : ?>
                                        <img src="<?php echo base_url('public/assets/icon/success.png'); ?>">
                                        <div class="comment-details">
                                            <a href="<?php echo base_url('user.detail.paket/') . $p->kode_pembelian; ?>">
                                                <h4><?php echo indoDate($p->tgl_trans); ?></h4>
                                                <h4 class="text-primary">Status
                                                    <span class="comment-replay text-success">Verified</span>
                                                    <!-- <span class="comment-replay text-warning">menunggu konfirmasi</span> -->
                                                </h4>
                                                <h4 class="nama-paket">Paket <strong class="text-primary"><?php echo $p->nama_paket; ?></strong> <span class="comment-replay text-danger"><?php echo Rp($p->harga_paket); ?></span></h4>
                                            </a>
                                        </div>
                                    <?php else : ?>
                                        <?php if ($p->ket_bayar) : ?>
                                            <img src="<?php echo base_url('public/assets/icon/warning.png'); ?>">
                                            <div class="comment-details">
                                                <a href="#">
                                                    <h4><?php echo indoDate($p->tgl_trans); ?></h4>
                                                    <h4 class="text-primary">Status
                                                        <!-- <span class="comment-replay text-success">Verified</span> -->
                                                        <span class="comment-replay text-warning">Menunggu Konfirmasi</span>
                                                    </h4>
                                                    <h4 class="nama-paket">Paket <strong class="text-primary"><?php echo $p->nama_paket; ?></strong> <span class="comment-replay text-danger"><?php echo Rp($p->harga_paket); ?></span></h4>
                                                </a>
                                            </div>
                                        <?php else : ?>
                                            <img src="<?php echo base_url('public/assets/icon/warning.png'); ?>">
                                            <div class="comment-details">
                                                <a href="<?php echo base_url('user.konfirmasi.pembelian/') . $p->kode_pembelian; ?>">
                                                    <h4><?php echo indoDate($p->tgl_trans); ?></h4>
                                                    <h4 class="text-primary">Status
                                                        <!-- <span class="comment-replay text-success">Verified</span> -->
                                                        <span class="comment-replay text-warning">Pending</span>
                                                    </h4>
                                                    <h4 class="nama-paket">Paket <strong class="text-primary"><?php echo $p->nama_paket; ?></strong> <span class="comment-replay text-danger"><?php echo Rp($p->harga_paket); ?></span></h4>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="user-fasilitas" hidden>
                            <?php foreach ($fasilitas as $f) : ?>
                                <div class="user-comment">
                                    <?php if ($f->is_success == 1) : ?>
                                        <img src="<?php echo base_url('public/assets/icon/success.png'); ?>">
                                        <div class="comment-details">
                                            <a href="<?php echo base_url('user.detail.fas/') . $f->kode_pembelian; ?>">
                                                <h4><?php echo indoDate($f->tgl_transfasilitas); ?></h4>
                                                <h4 class="text-primary">Status
                                                    <span class="comment-replay text-success">Verified</span>
                                                    <!-- <span class="comment-replay text-warning">menunggu konfirmasi</span> -->
                                                </h4>
                                                <h4 class="nama-paket">Fasilitas
                                                    <strong class="text-primary"><?php echo $f->nama_fasilitas; ?></strong>
                                                    <span class="comment-replay text-danger"><?php echo Rp($f->total_bayar); ?></span>
                                                </h4>
                                            </a>
                                        </div>
                                    <?php else : ?>
                                        <?php if ($f->ket_bayar) : ?>
                                            <img src="<?php echo base_url('public/assets/icon/warning.png'); ?>">
                                            <div class="comment-details">
                                                <a href="#">
                                                    <h4><?php echo indoDate($f->tgl_transfasilitas); ?></h4>
                                                    <h4 class="text-primary">Status
                                                        <!-- <span class="comment-replay text-success">Verified</span> -->
                                                        <span class="comment-replay text-warning">Menunggu Konfirmasi</span>
                                                    </h4>
                                                    <h4 class="nama-paket">Fasilitas
                                                        <strong class="text-primary"><?php echo $f->nama_fasilitas; ?></strong>
                                                        <span class="comment-replay text-danger"><?php echo Rp($f->total_bayar); ?></span>
                                                    </h4>
                                                </a>
                                            </div>
                                        <?php else : ?>
                                            <img src="<?php echo base_url('public/assets/icon/warning.png'); ?>">
                                            <div class="comment-details">
                                                <a href="<?php echo base_url('user.konfirmasi.fasilitas/') . $f->kode_pembelian; ?>">
                                                    <h4><?php echo indoDate($f->tgl_transfasilitas); ?></h4>
                                                    <h4 class="text-primary">Status
                                                        <!-- <span class="comment-replay text-success">Verified</span> -->
                                                        <span class="comment-replay text-warning">Pending</span>
                                                    </h4>
                                                    <h4 class="nama-paket">Fasilitas
                                                        <strong class="text-primary"><?php echo $f->nama_fasilitas; ?></strong>
                                                        <span class="comment-replay text-danger"><?php echo Rp($f->total_bayar); ?></span>
                                                    </h4>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="alert alert-info">
                <div class="text-warning">
                    <h5>Warning!</h5>
                    <ul>
                        <li>
                            Ketika sudah mengupload bukti pembayaran, dalam 1 x 24 jam status pembayaran masih bersifat menunggu konfirmasi silahkan hubungi admin <strong class="text-primary">081247046058</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="sparkline13-list">
                <div class="btn-group pull-right" role="group">
                    <a href="<?php echo base_url('user.paket'); ?>" class="btn btn-custon-three btn-success">
                        <i class="fa fa-fw fa-undo"></i>
                    </a>
                </div>
                <br>
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                    </div>
                    <!-- Table -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="form-label col-md-4">Paket</label>
                                    <label class="form-label col-md-6">
                                        <strong class="badge"><?php echo $paket->nama_paket; ?></strong>
                                    </label>
                                </div>
                                <div class="row">
                                    <label class="form-label col-md-4">Harga</label>
                                    <label class="form-label col-md-6 text-primary"><?php echo Rp($paket->harga); ?></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="form-label col-md-6 text-right">Aktif</label>
                                    <label class="form-label col-md-6 text-success"><?php echo indoDate($paket->tgl_awal); ?></label>
                                </div>
                                <div class="row">
                                    <label class="form-label col-md-6 text-right">Non Aktif</label>
                                    <label class="form-label col-md-6 text-danger"><?php echo indoDate($paket->tgl_akhir); ?></label>
                                </div>
                                <div class="row">
                                    <label class="form-label col-md-6 text-right">Status</label>
                                    <label class="form-label col-md-6">
                                        <?php echo date('Y-m-d') > $paket->tgl_akhir ? '<strong class="text-danger">Tidak Aktif</strong>' : '<strong class="text-success">Aktif</strong>'; ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Senam</th>
                                    <th>Kuota</th>
                                    <th>Tanggal Latihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($isipaket as $pk) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $pk->jenis_senam; ?>
                                        </td>
                                        <td>
                                            <?php echo $pk->kuota; ?>
                                            <strong>x</strong>
                                        </td>
                                        <td>
                                            <?php
                                            $dettgl = $this->db->get_where('t_setpaket_det', ['id_setpaket' => $pk->id_setingpaket])->result(); ?>

                                            <ul class="list-group">
                                                <?php
                                                foreach ($dettgl as $dtt) :
                                                ?>
                                                    <li class="">
                                                        <?php echo indoDate($dtt->tgl_masuk) . ", " . indoTime($dtt->jam_mulai) . " - " . indoTime($dtt->jam_selesai); ?>
                                                    </li>
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
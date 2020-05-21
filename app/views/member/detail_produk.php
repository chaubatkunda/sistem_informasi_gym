<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="sparkline10-list">
                <div class="btn-group pull-right">
                    <a href="<?php echo base_url('pilih.produk'); ?>" class="btn btn-danger mr-b-3"><i class="fa fa-fw fa-undo"></i></a>
                </div>
                <br>
                <br>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-4">Paket</label>
                                    <label for="" class="form-label col-md-4"><strong class="badge"><?php echo $paket->nama_paket; ?></strong></label>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="form-label col-md-4">Harga</label>
                                    <label for="" class="form-label col-md-4"><?php echo Rp($paket->harga); ?></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row pull-right">
                                    <label for="" class="form-label col-md-12">Tanggal Aktif : &nbsp; <i class="text-danger"><?php echo indoDate($paket->tgl_awal); ?></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="" method="post">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Senam</th>
                                    <th>Kuota</th>
                                    <th>Tanggal Latihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($isipaket as $isi) :
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $isi->jenis_senam; ?></td>
                                        <td><?php echo $isi->kuota; ?> x</td>
                                        <td>
                                            <?php
                                            $query = $this->db->get_where('t_setpaket_det', ['id_setpaket' => $isi->id_setingpaket])->result();
                                            ?>
                                            <ul class="list-group">
                                                <?php foreach ($query as $tglp) : ?>
                                                    <li><?php echo indoDate($tglp->tgl_masuk) . ", " . $tglp->jam_mulai . " - " . $tglp->jam_selesai; ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-group pull-right">
                        <a href="<?php echo base_url('detail.pembelian/') . $paket->id_paket . "/" . $member->id_member; ?>" class="btn btn-primary"> Continue <i class="fa fa-chevron-circle-right"></i></a>
                        <!-- <button type="submit" class="btn btn-primary btn-lg">Next <i class="fa fa-chevron-circle-right"></i></button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
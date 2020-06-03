<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="sparkline10-list">
                <div class="btn-group pull-right">
                    <a href="<?php echo base_url('admin/pilih_produk/' . $member->id_member); ?>" class="btn btn-danger mr-b-3"><i class="fa fa-fw fa-undo"></i></a>
                </div>
                <br>
                <br>
                <form action="<?php echo base_url('admin/add_beli_paket'); ?>" method="post">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="hidden" name="id_member" value="<?php echo $member->id_member; ?>">
                                    <div class="row">
                                        <label class="form-label col-md-6">Kode Transaksi</label>
                                        <label class="form-label col-md-6"><?php echo $this->fungsi->kodeTransPaket(); ?></label>
                                        <input type="hidden" name="kode_transaksi" value="<?php echo $this->fungsi->kodeTransPaket(); ?>">
                                    </div>
                                    <div class="row">
                                        <label class="form-label col-md-6">Tanggal Pembelian</label>
                                        <label class="form-label col-md-6"><?php echo date('d-m-Y'); ?></label>
                                        <input type="hidden" name="tgl_transaksi" value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row text-right">
                                        <label class="form-label col-md-3">Paket</label>
                                        <label class="form-label col-md-4"><strong class="badge"><?php echo $paket->nama_paket; ?></strong></label>
                                        <input type="hidden" name="nama_paket" value="<?php echo $paket->nama_paket; ?>">
                                    </div>
                                    <div class="row text-right">
                                        <label class="form-label col-md-3">Harga</label>
                                        <label class="form-label col-md-4"><?php echo Rp($paket->harga); ?></label>
                                        <input type="hidden" name="harga_paket" value="<?php echo $paket->harga; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
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
                                                <td>
                                                    <?php echo $isi->jenis_senam; ?>
                                                    <input type="hidden" name="jenis_senam[]" value="<?php echo $isi->jenis_senam; ?>">
                                                    <input type="hidden" name="id_setingpaket[]" value="<?php echo $isi->id_setingpaket; ?>">
                                                </td>
                                                <td>
                                                    <?php echo $isi->kuota; ?> x
                                                    <input type="hidden" name="kuota[]" value="<?php echo $isi->kuota; ?>">
                                                </td>
                                                <td>
                                                    <?php
                                                    $query = $this->db->get_where('t_setpaket_det', ['id_setpaket' => $isi->id_setingpaket])->result();
                                                    ?>
                                                    <ul class="list-group">
                                                        <?php foreach ($query as $tglp) : ?>
                                                            <li><?php echo indoDate($tglp->tgl_masuk) . ", " . $tglp->jam_mulai . " - " . $tglp->jam_selesai; ?></li>
                                                            <input type="hidden" name="tgl_masuk[]" value="<?php echo $tglp->tgl_masuk; ?>">
                                                            <input type="hidden" name="jam_mulai[]" value="<?php echo $tglp->jam_mulai; ?>">
                                                            <input type="hidden" name="jam_selesai[]" value="<?php echo $tglp->jam_selesai; ?>">
                                                            <input type="hidden" name="id_setingpakett[]" value="<?php echo $tglp->id_setpaket; ?>">
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">Contionue <i class="fa fa-chevron-circle-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
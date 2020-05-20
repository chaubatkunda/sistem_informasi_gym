<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list">
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="all-form-element-inner">
                                        <form action="" method="post">
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Fasilitas</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <input type="text" name="fasilitas" class="form-control" placeholder="Fasilitas" autofocus autocomplete="off" value="<?php echo $fasilitas->fasilitas; ?>" />
                                                        <small class="text-danger"><?php echo form_error('fasilitas'); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Durasi Paket</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <select name="durasi" id="" class="form-control">
                                                            <?php foreach ($durasi as $d) : ?>
                                                                <?php if ($fasilitas->jml_jmpakai == $d) :  ?>
                                                                    <option value="<?php echo $d; ?>" selected><?php echo $d; ?> Jam</option>
                                                                <?php else : ?>
                                                                    <option value="<?php echo $d; ?>"><?php echo $d; ?> Jam</option>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Harga</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <input type="number" name="harga" class="form-control" autocomplete="off" placeholder="Harga" value="<?php echo $fasilitas->harga; ?>" />
                                                        <small class="text-danger"><?php echo form_error('harga'); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Tanggal Aktif</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <input type="date" name="tgl_masuk" class="form-control" value="<?php echo $fasilitas->tgl_masuk; ?>" readonly />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Keterangan</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="bt-df-checkbox pull-left">
                                                            <?php if ($fasilitas->ket == 1) : ?>
                                                                <label>
                                                                    <input class="pull-left radio-checked chek-baik" name="chek-baik" type="checkbox" value="1" checked>Baik
                                                                </label>
                                                                <label>
                                                                    <input class="pull-left radio-checked chek-rusak" name="chek-rusak" type="checkbox" value="2">Rusak
                                                                </label>
                                                            <?php elseif ($fasilitas->ket == 2) : ?>
                                                                <label>
                                                                    <input class="pull-left radio-checked chek-baik" name="chek-baik" type="checkbox" value="1">Baik
                                                                </label>
                                                                <label>
                                                                    <input class="pull-left radio-checked" name="chek-rusak" type="checkbox" value="2" checked>Rusak
                                                                </label>
                                                                <a href="#" class="btn btn-danger btn-sm chek-rusak">Ganti <?php echo indoDate($fasilitas->tgl_rusak); ?></a>

                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner form-tglrusak" hidden>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label class="login2 pull-right pull-right-pro">Tanggal Rusak</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <input type="text" name="tgl_rusak" class="form-control form-tgl" data-mask="99-99-9999" value="<?php echo indoDate($fasilitas->tgl_rusak); ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="login-btn-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3"></div>
                                                        <div class="col-lg-9">
                                                            <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                <button class="btn btn-custon-three btn-primary" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                                                                    Simpan</button>
                                                                <a href="<?php echo base_url('fasilitas'); ?>" class="btn btn-custon-three btn-danger">
                                                                    <i class="fa fa-times edu-danger-error" aria-hidden="true"></i> Batal
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
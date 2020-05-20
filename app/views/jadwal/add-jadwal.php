<div class="container-fluid">
    <div class="sparkline12-list">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="all-form-element-inner">
                    <h5>Tambah Jadwal</h5>
                    <form method="post" action="">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="hari" class="pull-right pull-right-pro">Hari</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="hari" class="chosen-select" name="hari">
                                            <option value="">--Pilih Hari--</option>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
                                        </select>
                                        <small class="text-danger"><?php echo form_error('hari'); ?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="hari" class="pull-right pull-right-pro">Jam Masuk</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="time" name="jm_masuk" value="<?php echo set_value('jam_masuk'); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="hari" class="pull-right pull-right-pro">Jam Selesai</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="time" name="jm_selesai">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="hari" class="pull-right pull-right-pro">Senam</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="senam" class="chosen-select" id="hari">
                                            <option value="">--Pilih Senam--</option>
                                            <?php foreach ($senam as $sn) : ?>
                                                <option value="<?php echo $sn['id_senam']; ?>"><?php echo $sn['jenis_senam']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="text-danger"><?php echo form_error('senam'); ?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="hari" class="pull-right pull-right-pro">Instruktur</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="instruktur" class="chosen-select" id="hari">
                                            <option value="">--Pilih</option>
                                            <?php foreach ($instruktur as $ins) : ?>
                                                <option value="<?php echo $ins['id_instruktur']; ?>"><?php echo $ins['nama_instruktur']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>
                                        <a href="<?php echo base_url('jadwal'); ?>" class="btn btn-danger"><i class="fa fa-ban" aria-hidden="true"></i> Batal</a>
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
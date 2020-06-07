<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="sparkline13-list">
                <form action="" method="post">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <?php echo $title; ?>
                        </div>
                        <div class="panel-body">
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="login2 pull-right pull-right-pro">Nama</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="nama" class="form-control" placeholder="Nama" autofocus autocomplete="off" value="<?php echo set_value('nama'); ?>" />
                                        <?php echo form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="login2 pull-right pull-right-pro">Telp</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="telp" class="form-control" placeholder="Telp" autofocus autocomplete="off" value="<?php echo set_value('telp'); ?>" />
                                        <?php echo form_error('telp', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="login2 pull-right pull-right-pro"><i class="zmdi zmdi-airplanemode-active"></i></label>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea name="alamat" id="" cols="10" class="form-control" placeholder="Alamat"></textarea>
                                        <?php echo form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?php echo base_url('admin/instruktur'); ?>" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
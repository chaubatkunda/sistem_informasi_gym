<div class="container-fluid">
    <form action="" method="post" class="form-horizontal">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">ID</label>
                        <div class="col-sm-9">
                            <input type="text" name="idmember" class="form-control" value="<?php echo $member->id_member; ?>" readonly>
                            <input type="hidden" name="idus" class="form-control" value="<?php echo $member->id; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="nama">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $member->nama; ?>" placeholder="Nama" autocomplete="off" autofocus>
                            <small class="text-danger"><?php echo form_error('nama'); ?></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="telp">No Telp</label>
                        <div class="col-sm-9">
                            <input type="text" name="notelp" id="telp" class="form-control" value="<?php echo $member->notelp; ?>" placeholder="No Telp">
                            <small class="text-danger"><?php echo form_error('notelp'); ?></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="alamat">Alamat</label>
                        <div class="col-sm-9">
                            <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"><?php echo $member->alamat; ?></textarea>
                            <small class="text-danger"><?php echo form_error('alamat'); ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col col-md-6 text-center">
                <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                    <button type="submit" class="btn btn-primary">
                        Simpan <i class="fa fa-chevron-circle-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="sparkline10-list">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5><?php echo $title; ?></h5>

                    </div>
                    <div class="panel panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4 text-right">
                                        <img class="media-object" src="<?php echo base_url('public/assets/img/logo/bri.jpg'); ?>" width="100%">
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="">
                                            Bank Republik Indonesia <br>
                                            <strong>043849384-3984983</strong> <br>
                                            <small>Egy Gym Malang</small>
                                        </h5>
                                        <small></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 text-right">
                                        <img class="media-object" src="<?php echo base_url('public/assets/img/logo/bca.jpg'); ?>" width="100%">
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="">
                                            Bank Central Asia <br>
                                            <strong>043849384</strong> <br>
                                            <small>Egy Gym Malang</small>
                                        </h5>
                                        <small></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="bt-df-checkbox pull-left">
                                            <label>
                                                <input class="pull-left radio-checked chek-transfer" name="chek-transfer" type="checkbox" value="1">Transfer
                                            </label>
                                            <label>
                                                <input class="pull-left radio-checked" name="chek-tunai" type="checkbox" value="2">Tunai
                                            </label>
                                            <label>
                                                <input class="pull-left radio-checked" name="chek-edc" type="checkbox" value="3">EDC
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-jenis-bayar row" hidden>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="file">Upload Bukti Transfer</label>
                                            <input type="file" name="file_upload" class="form-control" id="file">
                                            <small class="text-danger"><i>Ukuran File Maksimal 2 MB* dan Format File JPG, JPEG, PNG*</i></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-footer text-right">
                        <button class="btn btn-primary">Continue
                            <i class="fa fa-chevron-circle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
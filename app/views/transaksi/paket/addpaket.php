<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row pull-right mg-b-10">
            <div class="col-md-12">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fa fa-bars"></i> Kategori Transaksi Paket
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu animated zoomIn" aria-labelledby="dropdownMenu1">
                        <li>
                            <a href="<?php echo base_url('periodeTransPaket'); ?>">Transaksi Paket Perhari</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="<?php echo base_url('transaksiPaket'); ?>">Keseluruhan Transaksi Paket</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="row">
                <div class="col-md-6">
                    <!-- <div class="card-title"><strong>IDENTITAS</strong> MEMBER</div> -->
                    <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="nama">ID Member</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" value="<?php echo $this->fungsi->chek_member()->id_member; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="nama">Nama</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" value="<?php echo $this->fungsi->chek_member()->nama; ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                        <div class="form-group">
                            <label class="control-label col-sm-3">Kode Transaksi</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" name="kode-trans" class="form-control" value="<?php echo $this->fungsi->kodeTransPaket(); ?>" readonly>
                                </div>
                                <small class="text-danger"><?php echo form_error('kode-trans'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Tanggal Pembelian</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" name="tgl_beli" class="form-control" value="<?php echo date('d-m-Y'); ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="sparkline10-list border-top mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                        <div class="form-group form-paket">
                            <label class="control-label col-sm-3">Pilih Paket</label>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select name="idpk" class="chosen-select select-paket">
                                        <option value="">Pilih Paket</option>
                                        <?php foreach ($paket as $pk) : ?>
                                            <option value="<?php echo $pk['id_paket']; ?>"><?php echo $pk['nama_paket'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="text-danger"><?php echo form_error('idpk'); ?></small>
                                </div>
                                <div class="form-group">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Isi Paket</th>
                                                <th>Kuota</th>
                                                <th>Tanggal Latihan</th>
                                            </tr>
                                        </thead>
                                        <tbody id="show_data">

                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="harga-pk" class="harga-pk form-control" readonly>
                                    <input type="hidden" name="nama-pk" class="nama-pk form-control" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- <h5><strong>METODE</strong> PEMBAYARAN</h5> -->
                    <!-- <div class="card-title"><strong>METODE</strong> PEMBAYARAN</div> -->
                    <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                        <div class="form-group">
                            <label class="control-label col-sm-3">Jenis Pembayaran</label>
                            <div class="col-sm-9">
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
                        <div class="form-group form-jenis-bayar" hidden>
                            <label class="control-label col-sm-3">Bukti Pembayaran</label>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input type="file" name="file_upload" class="form-control">
                                    <small class="text-warning"><i>Ukuran File Maksimal 2 MB* dan Format File JPG, JPEG, PNG*</i></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10">
                    <div class="shw_tglpk">
                    </div>
                </div>
            </div>

            <!-- //! Modal -->
            <div id="zoomInDownTglDet" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                        <div class="modal-header header-color-modal bg-color-1">
                            <h4 class="modal-title">
                                <i class="fa fa-calendar" aria-hidden="true"></i> Tanggal Latihan
                            </h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="modal-login-form-inner">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="basic-login-inner modal-basic-inner">
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Tanggal</th>
                                                                    <th>Jam Mulai</th>
                                                                    <th>Jam Selesai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="show_tglp">

                                                            </tbody>
                                                        </table>
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
            </div>
            <div class="row">
                <div class="col col-md-12">
                    <div class="sparkline10-list mg-tb-30 responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                        <button type="submit" class="btn btn-custon-three btn-primary"><i class="fa fa-floppy-o"></i> Simpan</button>
                        <a href="<?php echo base_url('periodeTransPaket'); ?>" class="btn btn-custon-three btn-danger"><i class="fa fa-ban"></i> Batal</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
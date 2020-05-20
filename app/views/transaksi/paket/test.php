<div class="col-md-6">
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


<!-- <div class="card-title"><strong>IDENTITAS</strong> MEMBER</div> -->



<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="sparkline10-list mg-tb-30">
            <div class="table-responsive">
                <table class="table" id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Paket</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($paket as $p) :
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $p->nama_paket; ?></td>
                                <td class="text-right"><?php echo Rp($p->harga); ?></td>
                                <td class="text-center">
                                    <a href="" class="btn btn-info btn-sm">Detail</a>
                                    <a href="" class="btn btn-primary btn-sm">Beli</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
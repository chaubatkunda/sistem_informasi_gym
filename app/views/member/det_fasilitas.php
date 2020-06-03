<div class="contrainer-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="sparkline10-list">
                <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        </div>
                        <form action="<?php echo base_url('admin/chekout_fasilitas'); ?>" method="post">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Kode Pembelian</th>
                                            <th>
                                                <?php echo $this->fungsi->kodeTransFasilitas(); ?>
                                                <input type="hidden" name="kode_beli" value="<?php echo $this->fungsi->kodeTransFasilitas(); ?>">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pembelian</th>
                                            <td>
                                                <?php echo date('d-m-Y'); ?>
                                                <input type="hidden" name="tgl_trans" value="<?php echo date('Y-m-d'); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="2" class="text-primary"><i>Jenis Fasilitas*</i></th>
                                        </tr>
                                        <tr>
                                            <th>ID Fasilitas</th>
                                            <td>
                                                <?php echo $fasilitas->id_fasilitas; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Fasilitas</th>
                                            <td>
                                                <?php echo $fasilitas->fasilitas; ?>
                                                <input type="hidden" name="nama_fasilitas" value="<?php echo $fasilitas->fasilitas; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Durasi Pakai</th>
                                            <td>
                                                <?php echo $fasilitas->jml_jmpakai; ?> <small>Jam</small>
                                                <input type="hidden" name="durasijam" value="<?php echo $fasilitas->jml_jmpakai; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Harga</th>
                                            <th class="text-danger">
                                                <?php echo Rp($fasilitas->harga); ?>
                                                <input type="hidden" name="total" value="<?php echo $fasilitas->harga; ?>">
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="2" class="text-primary"><i>Data Booking*</i></th>
                                        </tr>
                                        <tr>
                                            <th>Nama</th>
                                            <th>
                                                <input type="hidden" name="id_member" value="<?php echo $member->id_member; ?>">
                                                <?php
                                                $querym = $this->db->get_where('t_user', ['id' => $member->id_user])->row();
                                                ?>
                                                <?php echo $querym->nama; ?> / <small class="text-primary"><i><?php echo $member->id_member; ?></i></small>
                                                <!-- <div class="input-group row">
                                                        <input type="date" name="tgl_booking" class="form-control col-md-5">
                                                    </div> -->
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Booking</th>
                                            <td>
                                                <div class="input-group row">
                                                    <input type="date" name="tgl_booking" class="form-control col-md-5">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Jam Pakai</th>
                                            <td>
                                                <div class="input-group row">
                                                    <input type="time" name="jam_mulai" class="form-control col-md-5">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer text-center">
                                <button type="submit" class="btn btn-primary">Contionu <i class="fa fa-chevron-circle-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
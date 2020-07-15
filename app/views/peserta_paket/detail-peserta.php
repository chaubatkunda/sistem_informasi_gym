<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="sparkline13-list">
                <a href="<?php echo base_url('admin/peserta_paket'); ?>" class="btn btn-danger btn-sm pull-right">
                    <i class="fa fa-arrow-circle-left"></i> Kembali
                </a>
                <br>
                <br>
                <div class="datatable-dashv1-list custom-datatable-overright">
                    <table id="table" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Paket</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($peserta as $p) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo indoDate($p->tgl_trans); ?></td>
                                    <td><?php echo $p->nama; ?></td>
                                    <td><?php echo $p->nama_paket; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
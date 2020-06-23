<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="sparkline13-list">
                <a href="<?php echo base_url('admin/galeri/create'); ?>" class="btn btn-primary mg-tb-15">
                    Create <i class="fa fa-plus"></i>
                </a>
                <div class="flash-fasilitas" data-flashfasilitas="<?php echo $this->session->flashdata('fasilitas'); ?>"></div>
                <div class="datatable-dashv1-list custom-datatable-overright">
                    <table id="table" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($galeri as $g) : ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $g->fasilitas; ?></td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="sparkline13-list">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Telp</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($instruktur as $i) :
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $i->nama_instruktur; ?></td>
                                    <td><?php echo $i->no_hp; ?></td>
                                    <td>
                                        <?php
                                        if ($i->aktif == 1) {
                                            echo "Aktif";
                                        } else {
                                            echo "Tidak Aktif";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-sm">Detail</button>
                                        <a href="<?php echo base_url('admin/hapus_instruktur/' . $i->id_instruktur); ?>" class="btn btn-danger btn-sm">Hapus</a>
                                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
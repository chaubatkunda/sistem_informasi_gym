<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <a href="<?php echo base_url('admin/instruktur/detail/create/' . $instruktur->id_instruktur); ?>" class="btn btn-primary mg-b-10">Tambah</a>
            <a href="<?php echo base_url('admin/instruktur'); ?>" class="btn btn-danger mg-b-10">Kembali</a>
            <div class="sparkline13-list">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Jenis Senam</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($detail as $i) :
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $i->jenis_senam; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('admin/instruktur/detail/edit/' . $i->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="<?php echo base_url('admin/instruktur/detail/delete/' . $i->id . "?ins=" . $instruktur->id_instruktur); ?>" class="btn btn-danger btn-sm">Hapus</a>
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
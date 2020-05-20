<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($member as $m) :
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $m->id_member; ?></td>
                <td><?php echo $m->nama; ?></td>
                <td>
                    <a href="<?php echo base_url('pilih.produk/') . $m->id_member; ?>" class="btn btn-primary btn-sm">Continue <i class="fa fa-chevron-circle-right"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<!-- tabs start-->
<div class="admintab-area mg-b-15">
    <div class="container-fluid">
        <?php if ($user['level'] == 1) : ?>
            <div class="row mg-t-15 mg-left-10">
                <div class="col-md-10">
                    <a href="<?php echo base_url('add-jadwal'); ?>" class="btn btn-primary pull-left"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Jadwal</a>
                </div>
            </div>
            <div class="row mg-t-10">
                <div class="col-md-10">
                    <?php echo $this->session->flashdata('jadwal'); ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-10">
                <div class="admintab-wrap edu-tab1 mg-t-30">
                    <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
                        <li class="active">
                            <a data-toggle="tab" href="#Senin"><span class="edu-icon edu-analytics tab-custon-ic"></span>Senin</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Selasa"><span class="edu-icon edu-analytics-arrow tab-custon-ic"></span>Selasa</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Rabu"><span class="edu-icon edu-analytics-bridge tab-custon-ic"></span>Rabu</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Kamis"><span class="edu-icon edu-analytics-bridge tab-custon-ic"></span>Kamis</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Jumat"><span class="edu-icon edu-analytics-bridge tab-custon-ic"></span>Jumat</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Sabtu"><span class="edu-icon edu-analytics-bridge tab-custon-ic"></span>Sabtu</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Minggu"><span class="edu-icon edu-analytics-bridge tab-custon-ic"></span>Minggu</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="Senin" class="tab-pane in active animated flipInX custon-tab-style1">
                            <div class="row">
                                <div class="col-md-10">
                                    <table class="table table-light">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jam Mulai</th>
                                                <th>Jam Selesai</th>
                                                <th>Jenis Senam</th>
                                                <th>Instruktur</th>
                                                <?php if ($user['level'] == 1) : ?>
                                                    <th>Opsi</th>
                                                <?php endif; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($senin as $sen) :
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo date('H:i', strtotime($sen['jam_masuk'])); ?></td>
                                                    <td><?php echo date('H:i', strtotime($sen['jam_selesai'])); ?></td>
                                                    <td><?php echo $sen['jenis_senam']; ?></td>
                                                    <td><?php echo $sen['nama_instruktur']; ?></td>
                                                    <td>
                                                        <?php if ($user['level'] == 1) : ?>
                                                            <a href="<?php echo base_url('edit-jadwal/') . $sen['id_jadwal']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                            <a href="<?php echo base_url('hapus-jadwal/') . $sen['id_jadwal']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="Selasa" class="tab-pane animated flipInX custon-tab-style1">
                            <div class="row">
                                <div class="col-md-10">
                                    <table class="table table-light">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jam Mulai</th>
                                                <th>Jam Selesai</th>
                                                <th>Jenis Senam</th>
                                                <th>Instruktur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($selasa as $sel) :
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo date('H:i', strtotime($sel['jam_masuk'])); ?></td>
                                                    <td><?php echo date('H:i', strtotime($sel['jam_selesai'])); ?></td>
                                                    <td><?php echo $sel['jenis_senam']; ?></td>
                                                    <td><?php echo $sel['nama_instruktur']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="Rabu" class="tab-pane animated flipInX custon-tab-style1">
                            <div class="row">
                                <div class="col-md-10">
                                    <table class="table table-light">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jam Mulai</th>
                                                <th>Jam Selesai</th>
                                                <th>Jenis Senam</th>
                                                <th>Instruktur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($rabu as $rb) :
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo date('H:i', strtotime($rb['jam_masuk'])); ?></td>
                                                    <td><?php echo date('H:i', strtotime($rb['jam_selesai'])); ?></td>
                                                    <td><?php echo $rb['jenis_senam']; ?></td>
                                                    <td><?php echo $rb['nama_instruktur']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="Kamis" class="tab-pane animated flipInX custon-tab-style1">
                            <div class="row">
                                <div class="col-md-10">
                                    <table class="table table-light">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jam Mulai</th>
                                                <th>Jam Selesai</th>
                                                <th>Jenis Senam</th>
                                                <th>Instruktur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($kamis as $km) :
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo date('H:i', strtotime($km['jam_masuk'])); ?></td>
                                                    <td><?php echo date('H:i', strtotime($km['jam_selesai'])); ?></td>
                                                    <td><?php echo $km['jenis_senam']; ?></td>
                                                    <td><?php echo $km['nama_instruktur']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="Jumat" class="tab-pane animated flipInX custon-tab-style1">
                            <div class="row">
                                <div class="col-md-10">
                                    <table class="table table-light">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jam Mulai</th>
                                                <th>Jam Selesai</th>
                                                <th>Jenis Senam</th>
                                                <th>Instruktur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($jumat as $jm) :
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo date('H:i', strtotime($jm['jam_masuk'])); ?></td>
                                                    <td><?php echo date('H:i', strtotime($jm['jam_selesai'])); ?></td>
                                                    <td><?php echo $jm['jenis_senam']; ?></td>
                                                    <td><?php echo $jm['nama_instruktur']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="Sabtu" class="tab-pane animated flipInX custon-tab-style1">
                            <div class="row">
                                <div class="col-md-10">
                                    <table class="table table-light">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jam Mulai</th>
                                                <th>Jam Selesai</th>
                                                <th>Jenis Senam</th>
                                                <th>Instruktur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($sabtu as $sb) :
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo date('H:i', strtotime($sb['jam_masuk'])); ?></td>
                                                    <td><?php echo date('H:i', strtotime($sb['jam_selesai'])); ?></td>
                                                    <td><?php echo $sb['jenis_senam']; ?></td>
                                                    <td><?php echo $sb['nama_instruktur']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="Minggu" class="tab-pane animated flipInX custon-tab-style1">
                            <div class="row">
                                <div class="col-md-10">
                                    <table class="table table-light">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jam Mulai</th>
                                                <th>Jam Selesai</th>
                                                <th>Jenis Senam</th>
                                                <th>Instruktur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($minggu as $mg) :
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo date('H:i', strtotime($mg['jam_masuk'])); ?></td>
                                                    <td><?php echo date('H:i', strtotime($mg['jam_selesai'])); ?></td>
                                                    <td><?php echo $mg['jenis_senam']; ?></td>
                                                    <td><?php echo $mg['nama_instruktur']; ?></td>
                                                    <td>
                                                        <?php if ($user['level'] == 1) : ?>
                                                            <a href="<?php echo base_url('edit-jadwal/') . $mg['id_jadwal']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                            <a href="<?php echo base_url('hapus-jadwal/') . $mg['id_jadwal']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                                                        <?php endif; ?>
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
            </div>
        </div>
    </div>
</div>
<!-- tabs End-->
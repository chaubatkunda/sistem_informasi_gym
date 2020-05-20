    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card-title">
                    <h5>Pilih Produk</h5>
                </div>
                <div class="sparkline10-list">
                    <div class="form-group text-center">
                        <button class="btn btn-custon-four btn-primary btn-lg btn-paket">Paket</button>
                        <button class="btn btn-custon-four btn-primary btn-lg btn-fasilitas">Fasilitas</button>
                    </div>
                    <div class="table-responsive table-paket" hidden>
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Paket</th>
                                    <th>Harga</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($paket as $pk) :
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $pk->nama_paket; ?></td>
                                        <td align="right"><?php echo Rp($pk->harga); ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url('cheout.paket/') . $pk->id_paket . "/" . $member->id_member; ?>" class="btn btn-primary btn-sm"><i class="fa fa-money"></i> Beli</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive table-fasilitas" hidden>
                        <table class="table" id="tablef">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Fasilitas</th>
                                    <th>Harga</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($fasilitas as $fas) :
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $fas->fasilitas; ?></td>
                                        <td class="text-right"><?php echo Rp($fas->harga); ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url('chek.fasilitas/') . $fas->id_fasilitas . "/" . $member->id_member; ?>" class="btn btn-primary btn-sm"><i class="fa fa-money"></i> Sewa</a>
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
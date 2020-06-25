<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="sparkline13-list">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Instruktur</label>
                            <input type="text" name="" id="" readonly class="form-control" value="<?php echo $instruktur->nama_instruktur; ?>">
                            <input type="hidden" name="instruktur" id="" readonly class="form-control" value="<?php echo $instruktur->id_instruktur; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Senam</label>
                            <select name="jenis_senam" id="" class="form-control">
                                <option value="">--Pilih--</option>
                                <?php foreach ($senam as $s) : ?>
                                    <option value="<?php echo $s->id_senam; ?>"><?php echo $s->jenis_senam; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="text-danger"><?php echo form_error('jenis_senam'); ?></small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <a href="<?php echo base_url('admin/instruktur/detail/' . $instruktur->id_instruktur); ?>" class="btn btn-danger btn-sm">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="sparkline13-list">
                    <form action="" method="post">
                        <input type="hidden" name="instruktur" value="<?php echo $det->instruktur_id; ?>">
                        <div class="form-group">
                            <label for="">Jenis Senam</label>
                            <select name="jenis_senam" id="" class="form-control">
                                <?php foreach ($senam as $s) : ?>
                                    <?php if ($s->id_senam == $det->senam_id) : ?>
                                        <option value="<?php echo $s->id_senam; ?>" selected><?php echo $s->jenis_senam; ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $s->id_senam; ?>"><?php echo $s->jenis_senam; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <small class="text-danger"><?php echo form_error('jenis_senam'); ?></small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <a href="<?php echo base_url('admin/instruktur/detail/' . $det->instruktur_id); ?>" class="btn btn-danger btn-sm">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
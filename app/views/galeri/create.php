	<div class="container-fluid">
	    <div class="row">
	        <div class="col-md-2"></div>
	        <div class="col-md-8">
	            <div class="sparkline12-list">
	                <form action="" method="post">
	                    <div class="form-group">
	                        <label for="senam">Senam</label>
	                        <input type="text" name="senam" id="senam" class="form-control" placeholder="Senam">
	                        <small id="senam" class="text-muted"><?php echo form_error('senam'); ?></small>
	                    </div>
	                    <div class="form-group">
	                        <button type="submit" class="btn btn-primary">Simpan</button>
	                        <a href="<?php echo base_url('admin/galeri'); ?>" class="btn btn-danger">Batal</a>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
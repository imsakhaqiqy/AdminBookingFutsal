<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/profil_lapangan/edit_aksi" method="POST">
			<?php foreach($editnya as $key){?>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

                <div class="col-sm-9">
                    <input type="hidden" class="col-xs-10 col-sm-5" value="<?php echo $key->kode_lap;?>" name="kode_lap">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" value="<?php echo $key->nama_lap;?>" name="nama_lap"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="nama_notif"><small class="text-warning"><?php echo form_error('nama'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Address </label>

                <div class="col-sm-9">
                    <textarea class="col-xs-10 col-sm-5" id="form-field-2" name="alamat_lap"><?php echo $key->alamat_lap;?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Phone Number </label>

                <div class="col-sm-9">
                    <input class="col-xs-10 col-sm-5" type="text" id="form-field-3" value="<?php echo $key->telpon_lap;?>" name="phone"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle"><small class="text-warning">(999) 999-9999</small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-4"> City </label>

                <div class="col-sm-9">
                    <input class="col-xs-10 col-sm-5" type="text" id="form-field-4" value="<?php echo $key->kota_lap;?>" name="city"/>
                </div>
            </div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Update
                    </button>

                    &nbsp; &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/profil_lapangan');?>" class="btn" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>
                        Cancel
                    </a>
                </div>
            </div>
        </form>
		<?php } ?>
    </div>
</div>

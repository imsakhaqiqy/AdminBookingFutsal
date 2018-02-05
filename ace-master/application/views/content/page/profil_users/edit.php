<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <?php foreach ($editnya as $key) { ?>
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/profil_users/edit_aksi" method="POST">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Users ID </label>

                <div class="col-sm-9">
                    <input type="hidden" name="no" value="<?php echo $key->no;?>">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="kode_pengguna" value="<?php echo $key->kode_pengguna;?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Full Name </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="nama_lengkap" value="<?php echo $key->nama_lengkap;?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Place of Birth </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="tempat_lahir" value="<?php echo $key->tempat_lahir;?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Date of Birth </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="tanggal_lahir" value="<?php echo $key->tanggal_lahir;?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Gender </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="jenis_kelamin" value="<?php echo $key->jenis_kelamin;?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Address </label>

                <div class="col-sm-9">
                    <textarea class="col-xs-10 col-sm-5" id="form-field-2" name="alamat"><?php echo $key->alamat;?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Phone </label>

                <div class="col-sm-9">
                    <input class="col-xs-10 col-sm-5" type="text" id="form-field-3" name="telpon"/ value="<?php echo $key->telpon;?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle"><small class="text-warning">(999) 999-9999</small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> E-mail </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="email" value="<?php echo $key->email;?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Password </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="password" value="<?php echo $key->password;?>">
                </div>
            </div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Update
                    </button>

                    &nbsp; &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/profil_users');?>" class="btn" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>
                        Cancel
                    </a>
                    <h3 class="row header smaller lighter orange">
                        <span class="col-sm-4">
                            <label class="pull-right inline">
                                <small class="muted">Dark:</small>

                                <input id="gritter-light" checked="" type="checkbox" class="ace ace-switch ace-switch-5" />
                                <span class="lbl middle"></span>
                            </label>
                        </span><!-- /.col -->
                    </h3>
                </div>
            </div>
        </form>
        <?php } ?>
		<?php
		echo $no;
		?>
    </div>
</div>

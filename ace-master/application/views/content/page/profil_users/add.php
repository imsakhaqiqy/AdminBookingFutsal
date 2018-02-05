<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/profil_users/add_aksi" method="POST">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Users ID </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Users ID Here" name="kode_pengguna" value="<?php echo set_value('kode_pengguna');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="kode_pengguna_notif"><small class="text-warning"><?php echo form_error('kode_pengguna'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Full Name </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Full Name Here" name="nama_lengkap" value="<?php echo set_value('nama_lengkap');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="nama_lengkap_notif"><small class="text-warning"><?php echo form_error('nama_lengkap'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Place of Birth </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Place of Birth Here" name="tempat_lahir" value="<?php echo set_value('tempat_lahir');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="tempat_lahir_notif"><small class="text-warning"><?php echo form_error('tempat_lahir'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Date of Birth </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Date of Birth Here" name="tanggal_lahir" value="<?php echo set_value('tanggal_lahir');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="tanggal_lahir_notif"><small class="text-warning"><?php echo form_error('tanggal_lahir'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Gender </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Gender Here" name="jenis_kelamin" value="<?php echo set_value('jenis_kelamin');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="jenis_kelamin_notif"><small class="text-warning"><?php echo form_error('jenis_kelamin'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Address </label>

                <div class="col-sm-9">
                    <textarea class="col-xs-10 col-sm-5" id="form-field-2" placeholder="Address Here" name="alamat"><?php echo set_value('alamat');?></textarea>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="alamat_notif"><small class="text-warning"><?php echo form_error('alamat'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Phone </label>

                <div class="col-sm-9">
                    <input class="col-xs-10 col-sm-5" type="text" id="form-field-3" placeholder="Phone Here" name="telpon" value="<?php echo set_value('telpon');?>"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="telpon_notif"><small class="text-warning"><?php echo form_error('telpon'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> E-mail </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="E-mail Here" name="email" value="<?php echo set_value('email');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="email_notif"><small class="text-warning"><?php echo form_error('email'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Password </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Password Here" name="password" value="<?php echo set_value('password');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="password_notif"><small class="text-warning"><?php echo form_error('password'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Save
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
		<?php
		echo $no;
		?>
    </div>
</div>

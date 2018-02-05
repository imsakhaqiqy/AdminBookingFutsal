<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/profil_order/add_aksi" method="POST">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-0"> Users ID </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-0" class="col-xs-10 col-sm-5" placeholder="Users ID Here" name="kode_pengguna" value="<?php echo set_value('kode_pengguna');?>"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <a href="#"><span class="fa fa-info info" data-trigger="hover"></span></a>
                        <span class="middle red" id="kode_pengguna"><small class="text-warning"><?php echo form_error('kode_pengguna'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Name Here" name="nama" value="<?php echo set_value('nama');?>"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="nama_notif"><small class="text-warning"><?php echo form_error('nama'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Address </label>

                <div class="col-sm-9">
                    <textarea class="col-xs-10 col-sm-5" id="form-field-2" placeholder="Address Here" name="alamat"><?php echo set_value('alamat');?></textarea>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="nama_notif"><small class="text-warning"><?php echo form_error('alamat'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Phone Number </label>

                <div class="col-sm-9">
                    <input class="col-xs-10 col-sm-5" type="text" id="form-field-3" placeholder="Phone Here" name="phone" value="<?php echo set_value('phone');?>"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="phone_notif"><small class="text-warning"><?php echo form_error('phone'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-4"> E-mail </label>

                <div class="col-sm-9">
                    <input class="col-xs-10 col-sm-5" type="text" id="form-field-4" placeholder="E-mail Here" name="email" value="<?php echo set_value('email');?>"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="email_notif"><small class="text-warning"><?php echo form_error('email'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-4"> Receipt Number </label>

                <div class="col-sm-9">
                    <input class="col-xs-10 col-sm-5" type="text" id="form-field-4" placeholder="Receipt Number Here" name="no_struk" value="<?php echo set_value('no_struk');?>"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <a href="#"><span class="fa fa-info info-receipt-number" data-trigger="hover"></span></a>
                        <span class="middle red" id="no_struk_notif"><small class="text-warning"><?php echo form_error('no_struk'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-4"> Stock Code </label>

                <div class="col-sm-9">
                    <input class="col-xs-10 col-sm-5" type="text" id="form-field-4" placeholder="Stock Code Here" name="kode_stok" value="<?php echo set_value('kode_stok');?>"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="kode_stok_notif"><small class="text-warning"><?php echo form_error('kode_stok'); ?></small></span>
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
                    <a href="<?php echo base_url('index.php/profil_order');?>" class="btn" type="reset">
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

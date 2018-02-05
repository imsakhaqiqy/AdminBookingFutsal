<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/harga_reguler/add_aksi" method="POST">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-0"> Morning </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-0" class="col-xs-10 col-sm-5" placeholder="Morning Here " name="jam_pagi" value="<?php echo set_value('jam_pagi');?>"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="jam_pagi_notif"><small class="text-warning"><?php echo form_error('jam_pagi'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Price of Morning </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Price of Morning Here" name="harga_pagi" value="<?php echo set_value('harga_pagi');?>"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="harga_pagi_notif"><small class="text-warning"><?php echo form_error('harga_pagi'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Afternoon </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Afternoon Here" name="jam_malam" value="<?php echo set_value('jam_malam');?>"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="jam_malam_notif"><small class="text-warning"><?php echo form_error('jam_malam'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Price of Afternoon </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Price of Afternoon Here" name="harga_malam" value="<?php echo set_value('harga_malam');?>"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="harga_malam_notif"><small class="text-warning"><?php echo form_error('harga_malam'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Stock Code </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Stock Code Here" name="kode_stok" value="<?php echo set_value('kode_stok');?>"/>
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
                    <a href="<?php echo base_url('index.php/harga_reguler');?>" class="btn" type="reset">
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

<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/status_order/add_aksi" method="POST">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Receipt Number </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Receipt Number" name="no_struk" value="<?php echo set_value('no_struk');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="no_struk_notif"><small class="text-warning"><?php echo form_error('no_struk'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Schedule Status </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Schedule Status" name="status_jadwal" value="<?php echo set_value('status_jadwal');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="status_jadwal_notif"><small class="text-warning"><?php echo form_error('status_jadwal'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Deadline Transfer </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Deadline Transfer" name="batas_waktu_transfer" value="<?php echo set_value('batas_waktu_transfer');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="batas_waktu_transfer_notif"><small class="text-warning"><?php echo form_error('batas_waktu_transfer'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Order Status </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Order Status" name="status_order" value="<?php echo set_value('status_order');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="status_order_notif"><small class="text-warning"><?php echo form_error('status_order'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Booking Code </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Booking Code" name="kode_pesanan" value="<?php echo set_value('kode_pesanan');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="kode_pesanan_notif"><small class="text-warning"><?php echo form_error('kode_pesanan'); ?></small></span>
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
                    <a href="<?php echo base_url('index.php/status_order');?>" class="btn" type="reset">
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

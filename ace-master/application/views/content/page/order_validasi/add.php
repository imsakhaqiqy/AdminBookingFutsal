<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/order_validasi/add_aksi" method="POST">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Information </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Play Date Here" name="keterangan" value="<?php echo set_value('keterangan');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="keterangan_notif"><small class="text-warning"><?php echo form_error('keterangan'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Transfer Time </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Down Payment Cash Here" name="jam_transfer" value="<?php echo set_value('jam_transfer');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="jam_transfer_notif"><small class="text-warning"><?php echo form_error('jam_transfer'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Down Payment Cash </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Destination Account Number Here" name="uang_dp" value="<?php echo set_value('uang_dp');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="uang_dp_notif"><small class="text-warning"><?php echo form_error('uang_dp'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Sender Account Number </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Account Name Here" name="no_rekening_asal" value="<?php echo set_value('no_rekening_asal');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="no_rekening_asal_notif"><small class="text-warning"><?php echo form_error('no_rekening_asal'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Account Name </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Remaining Payment Here" name="nama_asal" value="<?php echo set_value('nama_asal');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="nama_asal_notif"><small class="text-warning"><?php echo form_error('nama_asal'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3">  Destination Account Number </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Remaining Payment Here" name="no_rekening_tujuan" value="<?php echo set_value('no_rekening_tujuan');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="no_rekening_tujuan_notif"><small class="text-warning"><?php echo form_error('no_rekening_tujuan'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Account Name </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Remaining Payment Here" name="nama_tujuan" value="<?php echo set_value('nama_tujuan');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="nama_tujuan_notif"><small class="text-warning"><?php echo form_error('nama_tujuan'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Receipt Number </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Remaining Payment Here" name="no_struk" value="<?php echo set_value('no_struk');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="no_struk_notif"><small class="text-warning"><?php echo form_error('no_struk'); ?></small></span>
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
                    <a href="<?php echo base_url('index.php/order_validasi');?>" class="btn" type="reset">
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

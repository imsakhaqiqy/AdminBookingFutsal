<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/order_lapangan/add_aksi" method="POST">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-0"> Receipt Number </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-0" class="col-xs-10 col-sm-5" placeholder="Receipt Number Here" name="kode_struk" value="<?php echo set_value('kode_struk');?>"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="kode_struk_notif"><small class="text-warning"><?php echo form_error('kode_struk'); ?></small></span>
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

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Hours Order </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Hours Order Here" name="jam_order" value="<?php echo set_value('jam_order');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="jam_order_notif"><small class="text-warning"><?php echo form_error('jam_order'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Order Date </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Order Date Here" name="tanggal_order" value="<?php echo set_value('tanggal_order');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="tanggal_order_notif"><small class="text-warning"><?php echo form_error('tanggal_order'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Curtain Time </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Curtain Time Here" name="jam_main" value="<?php echo set_value('jam_main');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="jam_main_notif"><small class="text-warning"><?php echo form_error('jam_main'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Play Date </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Play Date Here" name="tanggal_main" value="<?php echo set_value('tanggal_main');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="tanggal_main_notif"><small class="text-warning"><?php echo form_error('tanggal_main'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Down Payment Cash </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Down Payment Cash Here" name="uang_dp" value="<?php echo set_value('uang_dp');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="uang_dp_notif"><small class="text-warning"><?php echo form_error('uang_dp'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Destination Account Number </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Destination Account Number Here" name="no_rekening_tujuan" value="<?php echo set_value('no_rekening_tujuan');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="no_rekening_tujuan_notif"><small class="text-warning"><?php echo form_error('no_rekening_tujuan'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Account Name </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Account Name Here" name="nama_tujuan" value="<?php echo set_value('nama_tujuan');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="nama_tujuan_notif"><small class="text-warning"><?php echo form_error('nama_tujuan'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Remaining Payment </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Remaining Payment Here" name="sisa_pembayaran" value="<?php echo set_value('sisa_pembayaran');?>">
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="sisa_pembayaran_notif"><small class="text-warning"><?php echo form_error('sisa_pembayaran'); ?></small></span>
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
                    <a href="<?php echo base_url('index.php/order_lapangan');?>" class="btn" type="reset">
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

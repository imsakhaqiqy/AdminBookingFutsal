<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form" action="<?php echo base_url('index.php/profil_lapangan/add_aksi');?>" method="POST" id="add-form">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

                <div class="col-sm-9">
                    <input type="text" id="nama" class="col-xs-10 col-sm-5" placeholder="Name Here" name="nama" value="<?php echo set_value('nama');?>"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="nama_notif"><small class="text-warning"><?php echo form_error('nama'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Address </label>

                <div class="col-sm-9">
                    <textarea class="col-xs-10 col-sm-5" id="alamat" placeholder="Address Here" name="alamat"><?php echo set_value('alamat');?></textarea>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="alamat_notif"><small class="text-warning"><?php echo form_error('alamat'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Phone Number </label>

                    <div class="col-sm-9">
                        <input class="col-xs-10 col-sm-5" type="text" id="phone" placeholder="Phone Number Here" name="phone" value="<?php echo set_value('phone');?>"/>
                        <span class="help-inline col-xs-12 col-sm-7">
                            <span class="middle"><small class="text-warning">(999) 999-9999</small></span>
                        </span>
                    </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-4"> City </label>

                <div class="col-sm-9">
                    <input class="col-xs-10 col-sm-5" type="text" id="city" placeholder="City Here" name="city" value="<?php echo set_value('city');?>"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="city_notif"><small class="text-warning"><?php echo form_error('city'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="submit" id="save">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Save
                    </button>

                    &nbsp; &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/profil_lapangan');?>" class="btn" type="reset">
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
                    <!-- <button class="btn" id="gritter-regular">Regular</button> -->
                </div>
            </div>
        </form>
		<?php
		echo $no;
		?>
    </div>
</div>

<?php if($this->session->flashdata()) :?>
    <div class="modal fade" id="myModalOverrideData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="myModalLabel"><?php echo $this->session->flashdata('message_name'); ?></h4>
    </div>
    <div class="modal-body">

    </div>
    <div class="modal-footer">
    </div>
    </div>
    </div>
    </div>
<?php endif ;?>

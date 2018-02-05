<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
		<?php foreach($editnya as $key){?>
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/tipe_lapangan/edit_aksi" method="POST">
            <div class="form-group" style="display:none">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-0"> location Code </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-0" class="col-xs-10 col-sm-5" name="kode_tipe" value="<?php echo $key->kode_tipe;?>"/>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Information </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="tipe" value="<?php echo $key->tipe;?>"/>
                </div>
            </div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Update
                    </button>

                    &nbsp; &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/tipe_lapangan');?>" class="btn" type="reset">
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
		//echo $no;
		?>
    </div>
</div>

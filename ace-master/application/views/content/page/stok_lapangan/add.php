<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/stok_lapangan/add_aksi" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-0"> Field Image </label>

                <div class="col-sm-9">
					<div class="form-group">
						<div class="col-sm-5">
							<input type="file" class="id-input-file-2" name="gambar_lapangan"/>
						</div>
                        <span class="help-inline col-xs-10 col-sm-7">
                            <span class="middle red" id="nama_notif"><small class="text-warning"><?php echo form_error('gambar_lapangan'); ?></small></span>
                        </span>
					</div>

					<label>
						<input type="checkbox" name="file-format" id="id-file-format" class="ace" />
							<span class="lbl"> Allow only images</span>
					</label>
                </div>
            </div>

            <div class="form-group">
                <!-- <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Location Code </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Location Code Here" name="kode_tipe" value="<?php echo set_value('kode_tipe');?>"/>
                    <span class="help-inline col-xs-10 col-sm-7">
                        <span class="middle red" id="nama_notif"><small class="text-warning"><?php echo form_error('kode_tipe'); ?></small></span>
                    </span>
                </div> -->
					<label for="form-field-select-3" class="col-sm-3 control-label no-padding-right"> Location Code </label>

                    <div class="col-sm-9">
					<select class="col-xs-10 col-sm-5 chosen-select" id="form-field-select-3" data-placeholder="Choose a State..." name="kode_tipe">
						<option value="">Choose a State...</option>
                        <?php foreach ($location_code as $key) { ?>
						<option value="<?php echo $key->kode_tipe;?>"><?php echo $key->tipe;?></option>
                        <?php } ?>
                    </select>
                    </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-select-3"> Code Types </label>

                <div class="col-sm-9">
                    <!-- <input class="col-xs-10 col-sm-5" type="text" id="form-field-3" placeholder="Code Types Here" name="kode_jenis" value="<?php echo set_value('kode_jenis');?>"/>
                    <span class="help-inline col-xs-10 col-sm-7">
                        <span class="middle red" id="nama_notif"><small class="text-warning"><?php echo form_error('kode_jenis'); ?></small></span>
                    </span> -->
                    <select class="col-xs-10 col-sm-5 chosen-select" id="form-field-select-3" data-placeholder="Choose a State..." name="kode_jenis">
						<option value="">Choose a State...</option>
                        <?php foreach ($code_types as $key) { ?>
						<option value="<?php echo $key->kode_jenis;?>"><?php echo $key->jenis;?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-select-3"> Field ID </label>

                <div class="col-sm-9">
                    <!-- <input class="col-xs-10 col-sm-5" type="text" id="form-field-3" placeholder="Field ID Here" name="kode_lap" value="<?php echo set_value('kode_lap');?>"/>
                    <span class="help-inline col-xs-10 col-sm-7">
                        <span class="middle red" id="nama_notif"><small class="text-warning"><?php echo form_error('kode_lap'); ?></small></span>
                    </span> -->
                    <select class="col-xs-10 col-sm-5 chosen-select" id="form-field-select-3" data-placeholder="Choose a State..." name="kode_lap">
						<option value="">Choose a State...</option>
                        <?php foreach ($field_id as $key) { ?>
						<option value="<?php echo $key->kode_lap;?>"><?php echo $key->nama_lap;?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Save
                    </button>

                    &nbsp; &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/stok_lapangan');?>" class="btn" type="reset">
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
		echo "<br>";
		//echo $error;
		?>
    </div>
</div>

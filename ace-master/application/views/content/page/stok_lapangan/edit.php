<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <?php foreach ($editnya as $key) { ?>
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/stok_lapangan/edit_aksi" method="POST" enctype="multipart/form-data">
            <div class="form-group" style="display:none">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Stock Code </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="kode_stok" value="<?php echo $key->kode_stok;?>"/>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-0"> Field Image </label>

                <div class="col-sm-9">
					<div class="form-group">
						<div class="col-sm-5">
							<input type="file" class="id-input-file-2" name="gambar_lapangan"/>
                            <img src="<?php echo base_url("assets/uploads/stok_lapangan/".$key->src_gambar);?>" width="100">
                            <input type="hidden" name="gambar_lapangan2" value="<?php echo $key->src_gambar;?>">
						</div>
					</div>

                    <label>
							<span class="lbl"><?php echo $key->src_gambar;?></span>
					</label>
                </div>
            </div>

            <div class="form-group">
                <label for="form-field-select-3" class="col-sm-3 control-label no-padding-right"> Location Code </label>

                <div class="col-sm-9">
                <select class="col-xs-10 col-sm-5 chosen-select" id="form-field-select-3" data-placeholder="Choose a State..." name="kode_tipe">
                    <option value="<?php echo $key->kode_tipe;?>"><?php echo $key->tipe;?></option>
                    <?php foreach ($location_code as $key_location) { ?>
                    <?php if($key_location->tipe!=$key->tipe){ ?>
                    <option value="<?php echo $key_location->kode_tipe;?>"><?php echo $key_location->tipe;?></option>
                    <?php } ?>
                    <?php } ?>
                </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-select-3"> Code Types </label>

                <div class="col-sm-9">
                    <select class="col-xs-10 col-sm-5 chosen-select" id="form-field-select-3" data-placeholder="Choose a State..." name="kode_jenis">
						<option value="<?php echo $key->kode_jenis;?>"><?php echo $key->jenis;?></option>
                        <?php foreach ($code_types as $key_types) { ?>
                        <?php if($key_types->jenis!=$key->jenis){ ?>
                        <option value="<?php echo $key_types->kode_jenis;?>"><?php echo $key_types->jenis;?></option>
                        <?php } ?>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-select-3"> Field ID </label>

                <div class="col-sm-9">
                    <select class="col-xs-10 col-sm-5 chosen-select" id="form-field-select-3" data-placeholder="Choose a State..." name="kode_lap">
						<option value="<?php echo $key->kode_lap;?>"><?php echo $key->nama_lap;?></option>
                        <?php foreach ($field_id as $key_field) { ?>
                        <?php if($key_field->nama_lap!=$key->nama_lap){ ?>
                        <option value="<?php echo $key_field->kode_lap;?>"><?php echo $key_field->nama_lap;?></option>
                        <?php } ?>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Update
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
        <?php } ?>
		<?php
		//echo $no;
		echo "<br>";
		//echo $error;
		?>
    </div>
</div>

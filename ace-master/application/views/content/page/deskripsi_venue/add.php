<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/deskripsi_venue/add_aksi" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-0"> Header Venue </label>

                <div class="col-sm-9">
					<div class="form-group">
						<div class="col-sm-5">
							<input type="file" class="id-input-file-2" name="gambar_venue"/>
						</div>
                        <span class="middle red" id="nama_notif"><small class="text-warning"><?php echo form_error('gambar_venue');?></small></span>
					</div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Article Venue </label>

                <div class="col-sm-9">
                    <h6 class="header green clearfix">
                                    <span class="block pull-right">
                                        <small class="grey middle">Choose style: &nbsp;</small>

                                        <span class="btn-toolbar inline middle no-margin">
                                            <span data-toggle="buttons" class="btn-group no-margin">
                                                <label class="btn btn-sm btn-yellow">
                                                    1
                                                    <input type="radio" value="1" />
                                                </label>

                                                <label class="btn btn-sm btn-yellow active">
                                                    2
                                                    <input type="radio" value="2" />
                                                </label>

                                                <label class="btn btn-sm btn-yellow">
                                                    3
                                                    <input type="radio" value="3" />
                                                </label>

                                                <label class="btn btn-sm btn-yellow">
                                                    4
                                                    <input type="radio" value="4" />
                                                </label>
                                            </span>
                                        </span>
                                    </span>
                    </h6>
					<div class="wysiwyg-editor" id="editor1" onkeyup="showText()"><?php echo set_value('content');?></div>
                    <span class="middle red" id="nama_notif"><small class="text-warning"><?php echo form_error('content');?></small></span>
                    <textarea name="content" id="editornya" style="display:none"></textarea>
				</div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Link Map </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Link Map Here" name="link_map" value="<?php echo set_value('link_map');?>"/>
                    <span class="help-inline col-xs-12 col-sm-7">
                        <span class="middle red" id="nama_notif"><small class="text-warning"><?php echo form_error('link_map'); ?></small></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-0"> Icon Venue </label>

                <div class="col-sm-9">
					<div class="form-group">
						<div class="col-sm-5">
							<input type="file" class="id-input-file-2" name="gambar_icon"/>
						</div>
                        <span class="middle red" id="nama_notif"><small class="text-warning"><?php echo form_error('gambar_icon');?></small></span>
					</div>
                </div>
            </div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Save
                    </button>

                    &nbsp; &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/deskripsi_venue');?>" class="btn" type="reset">
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

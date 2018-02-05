<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <?php foreach ($editnya as $key){ ?>
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/deskripsi_venue/edit_aksi" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-0"> Header Venue </label>

                <div class="col-sm-9">
					<div class="form-group">
						<div class="col-sm-5">
							<input type="file" class="id-input-file-2" name="gambar_venue"/>
                            <img src="<?php echo base_url("assets/uploads/deskripsi_venue/".$key->background_venue);?>" width="100">
                            <input type="hidden" name="gambar_venue2" value="<?php echo $key->background_venue;?>">
						</div>
					</div>

					<label>
						<input type="checkbox" name="file-format" id="id-file-format" class="ace" />
							<span class="lbl"> Allow only images</span>
					</label>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Article Venue </label>

                <div class="col-sm-9">
                    <h4 class="header green clearfix">
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
                                </h4>
                                <div class="wysiwyg-editor" id="editor1" onkeyup="showText()"><?php echo $key->artikel_venue;?></div>
                                <textarea name="content" id="editornya" style="display:none"><?php echo $key->artikel_venue;?></textarea>
				</div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Link Map </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Link Map" name="link_map" value="<?php echo $key->map_venue;?>"/>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-0"> Icon Venue </label>

                <div class="col-sm-9">
					<div class="form-group">
						<div class="col-sm-5">
							<input type="file" class="id-input-file-2" name="gambar_icon"/>
                            <img src="<?php echo base_url("assets/uploads/icon_venue/".$key->icon_venue);?>" width="100">
                            <input type="hidden" name="gambar_icon2" value="<?php echo $key->icon_venue;?>">
						</div>
					</div>

					<label>
						<input type="checkbox" name="file-format" id="id-file-format" class="ace" />
							<span class="lbl"> Allow only images</span>
					</label>
                </div>
            </div>

            <div class="form-group" style="display:none">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Field ID </label>

                <div class="col-sm-9">
                    <input class="col-xs-10 col-sm-5" type="text" id="form-field-3" placeholder="Kode Lapangan" name="kode_lap" value="<?php echo $key->kode_lap;?>"/>
                </div>
            </div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Update
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
        <?php } ?>
		<?php
		//echo $no;
		echo "<br>";
		//echo $error;
		?>
    </div>
</div>

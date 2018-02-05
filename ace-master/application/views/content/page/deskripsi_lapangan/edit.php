<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/deskripsi_lapangan/edit_aksi" method="POST" enctype="multipart/form-data">
            <?php foreach($editnya as $key){?>
			<div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-0"> Header Description </label>

                <div class="col-sm-9">
					<div class="form-group">
						<div class="col-sm-5">
							<input type="file" class="id-input-file-2" name="gambar_background" value="cc"/>
                            <img src="<?php echo base_url("assets/uploads/deskripsi_lapangan/".$key->background_header);?>" width="100">
                            <input type="hidden" name="gambar_background2" value="<?php echo $key->background_header;?>">
						</div>
                        <span class="help-inline col-xs-10 col-sm-7">
                            <span class="middle red" id="nama_notif"><small class="text-warning"><?php echo form_error('gambar_background'); ?></small></span>
                        </span>
					</div>

					<label>
							<span class="lbl"><?php echo $key->background_header;?></span>
					</label>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Title Description </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Title Description" name="heading_article" value="<?php echo $key->judul_deskripsi;?>"/>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Article Description </label>

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
					<div class="wysiwyg-editor" id="editor1"><?php echo $key->artikel_deskripsi;?></div>
                    <textarea name="content" id="editornya" style="display:none"><?php echo $key->artikel_deskripsi;?></textarea>
				</div>
            </div>

            <div class="form-group" style="display:none">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Field ID </label>

                <div class="col-sm-9">
                    <input class="col-xs-10 col-sm-5" type="text" id="form-field-3" placeholder="Field ID" name="kode_lap" value="<?php echo $key->kode_lap;?>"/>
                </div>
            </div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="submit" name="submit" id="update">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Update
                    </button>

                    &nbsp; &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/deskripsi_lapangan');?>" class="btn" type="reset">
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
    </div>
</div>

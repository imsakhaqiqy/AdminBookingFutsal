<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/deskripsi_lapangan/add_aksi" method="POST">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-0"> Header Description </label>

                <div class="col-sm-9">
					<div class="form-group">
						<div class="col-sm-5">
							<input type="file" class="id-input-file-2" name="gambar_background"/>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-5">
							<input multiple="" type="file" class="id-input-file-3" name="gambar_background2"/>
						</div>
					</div>

					<label>
						<input type="checkbox" name="file-format" id="id-file-format" class="ace" />
							<span class="lbl"> Allow only images</span>
					</label>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Title Description </label>

                <div class="col-sm-9">
                    <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" placeholder="Title Description Here" name="heading_article"/>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Article Description </label>

                <div class="col-sm-9">
                    <div class="widget-box widget-color-blue">
						<div class="widget-header widget-header-small">  </div>
							<div class="widget-body">
								<div class="widget-main no-padding">
									<textarea name="content" data-provide="markdown" data-iconlibrary="fa" rows="10">

									</textarea>
								</div>
							</div>
					</div>
				</div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Field ID </label>

                <div class="col-sm-9">
                    <input class="col-xs-10 col-sm-5" type="text" id="form-field-3" placeholder="Field ID Here" name="kode_lap"/>
                </div>
            </div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Save
                    </button>

                    &nbsp; &nbsp; &nbsp;
                    <button class="btn" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>
                        Cancel
                    </button>
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

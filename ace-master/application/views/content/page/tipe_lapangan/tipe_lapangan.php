<div class="row">
    <div class="col-xs-12">
        <div class="row">
            <div class="col-xs-1">
                <a href="tipe_lapangan/add">
                <button class="btn btn-xs btn-info">
                    <i class="ace-icon fa fa-plus bigger-120"></i>
                    Add New
                </button>
                </a>
            </div>

            <div class="col-xs-11">
                <div>
                    <span></span>
                </div>
            </div>
        </div>
		<br>

        <div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>

        <div class="row">
            <table id="dynamic-table" class="table  table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="center">
								<label class="pos-rel">
									<input type="checkbox" class="ace" />
							            <span class="lbl"></span>
								</label>
							</th>
							<th class="detail-col">No</th>
							<th>Location Code</th>
							<th>Information</th>
                            <th colspan="8" class="center">Action</th>
						</tr>
					</thead>
                    <tbody>
						    <?php
                                foreach ($profile as $key) {?>
                            <tr>
							<td class="center">
								<label class="pos-rel">
								    <input type="checkbox" class="ace" />
										<span class="lbl"></span>
								    </label>
							</td>
                            <td class="center">
                                <?php echo $key->nomor;?>
                            </td>
                            <td>
                                <span class="label label-sm label-default">
                                <?php echo $key->kode_tipe;?>
                                </span>
                            </td>
                            <td class="hidden-480">
								<?php echo $key->tipe;?>
							</td>
                            <td style="display:none"></td>
                            <td style="display:none;"></td>
                            <td style="display:none;"></td>
                            <td style="display:none"></td>
                            <td style="display:none"></td>
                            <td style="display:none"></td>
                            <td style="display:none"></td>
                            <td style="display:none"></td>
                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a class="green" href="<?php echo base_url('index.php/tipe_lapangan/edit?kode_tipe=').$key->kode_tipe;?>">
    									<i class="ace-icon fa fa-pencil bigger-130"></i>
    								</a>
                                    <a class="red bootbox-confirm-tipe-lapangan" href="#" data-kode-tipe="<?php echo $key->kode_tipe;?>">
    									<i class="ace-icon fa fa-trash-o bigger-130"></i>
    								</a>
    							</div>

    							<div class="hidden-md hidden-lg">
    								<div class="inline pos-rel">
    									<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
    										<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
    								    </button>
                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
    										<li>
    											<a href="<?php echo base_url('index.php/tipe_lapangan/edit/').$key->kode_tipe;?>" class="tooltip-success" data-rel="tooltip" title="Edit">
    												<span class="green">
    													<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
    												</span>
    											</a>
    										</li>

    										<li>
    											<a href="#" class="tooltip-error bootbox-confirm-tipe-lapangan" data-rel="tooltip" title="Delete" data-kode="<?php echo $key->kode_tipe;?>">
    												<span class="red">
    													<i class="ace-icon fa fa-trash-o bigger-120"></i>
    												</span>
    											</a>
    										</li>
    									</ul>
    								</div>
    							</div>
						    </td>
                            </tr>
                        <?php } ?>
					</tbody>
				</table>
		</div><!-- /.span -->
	</div><!-- /.row -->
</div>

<?php if($this->session->flashdata()) :?>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

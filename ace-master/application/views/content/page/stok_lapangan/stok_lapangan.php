<div class="row">
    <div class="col-xs-12">
        <div class="row">
            <div class="col-xs-1">
                <a href="stok_lapangan/add">
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

        <div>
            <table id="dynamic-table" class="table  table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="center">
								<label class="pos-rel">
									<input type="checkbox" class="ace" />
							            <span class="lbl"></span>
								</label>
							</th>
							<th>No</th>
							<th>Stock Code</th>
							<th>Field Image</th>
							<th>Location</th>
							<th>Types</th>
							<th>Field Name</th>
                            <th colspan="5" class="center">Action</th>
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
                                <?php echo $key->no;?>
                            </td>
                            <td>
                                <span class="label label-sm label-danger">
                                <?php echo $key->kode_stok;?>
                                </span>
                            </td>
							<td>
                                <a href="#" class="myImgs" id="<?php echo $key->no;?>" data-src="<?php echo base_url('assets/uploads/stok_lapangan/'.$key->src_gambar);?>" data-alt="<?php echo $key->src_gambar;?>"><?php echo $key->src_gambar;?>
                                </a>
                            </td>
							<td>
                                <span class="label label-sm label-default">
                                <?php echo $key->tipe;?>
                                </span>
                            </td>
							<td>
                                <span class="label label-sm label-default" style="background-color:green">
                                <?php echo $key->jenis;?>
                                </span>
                            </td>
                            <td style="display:none"></td>
                            <td style="display:none"></td>
                            <td style="display:none"></td>
                            <td style="display:none"></td>
                            <td style="display:none"></td>
                            <td class="hidden-480">
								<span class="label label-sm label-primary"><?php echo $key->nama_lap;?></span>
							</td>
                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a class="green" href="<?php echo base_url('index.php/stok_lapangan/edit?kode_stok=').$key->kode_stok;?>">
    									<i class="ace-icon fa fa-pencil bigger-130"></i>
    								</a>
                                    <a class="red bootbox-confirm-stok-lapangan" href="#" data-kode-stok="<?php echo $key->kode_stok;?>">
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
    											<a href="<?php echo base_url('index.php/stok_lapangan/edit/').$key->kode_stok;?>" class="tooltip-success" data-rel="tooltip" title="Edit">
    												<span class="green">
    													<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
    												</span>
    											</a>
    										</li>

    										<li>
    											<a href="#" class="tooltip-error bootbox-confirm-stok-lapangan" data-rel="tooltip" title="Delete" data-kode-stok="<?php echo $key->kode_stok;?>">
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

<div id="modalImage" class="modalImg">
    <span class="close">x</span>
    <img class="modal-content modal-content-img" id="img01">
    <div id="caption"></div>
</div>

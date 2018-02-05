<div class="row">
    <div class="col-xs-12">
        <div class="row">
            <div class="col-xs-1">
                <a href="status_order/add">
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
							<th class="detail-col">No</th>
							<th>Receipt Number</th>
							<th>Schedule Status</th>
							<th>Deadline Transfer</th>
                            <th>Order Status</th>
                            <th>Booking Code</th>
                            <th colspan="6" class="center">Action</th>
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
                                <span class="label label-sm label-primary">
                                <?php echo $key->no_struk;?>
                                </span>
                            </td>
							<td>
                                <?php echo $key->status;?>
                            </td>
							<td>
                                <?php echo $key->batas_waktu_transfer;?>
                            </td>
							<td>
                                <?php echo $key->status_pesanan;?>
                            </td>
                            <td>
                                <span class="label label-sm label-default" style="background-color:#006e51">
                                <?php echo $key->kode_pesan;?>
                                </span>
                            </td>
                            <td style="display:none"></td>
                            <td style="display:none"></td>
                            <td style="display:none"></td>
                            <td style="display:none"></td>
                            <td style="display:none"></td>
                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a class="green" href="<?php echo base_url('index.php/status_order/edit?no=').$key->no;?>">
										<i class="ace-icon fa fa-pencil bigger-130"></i>
									</a>
                                    <a class="red bootbox-confirm-status-order" href="#" data-no="<?php echo $key->no;?>">
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
    											<a href="<?php echo base_url('index.php/status_order/edit?no=').$key->no;?>" class="tooltip-success" data-rel="tooltip" title="Edit">
    												<span class="green">
    													<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
    												</span>
    											</a>
    										</li>

    										<li>
    											<a href="#" class="tooltip-error bootbox-confirm-status-order" data-rel="tooltip" title="Delete" data-no="<?php echo $key->no;?>">
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

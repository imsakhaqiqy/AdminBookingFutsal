<div class="row">
    <div class="col-xs-12">
        <div class="row">
            <div class="col-xs-1">
                <a href="profil_users/add">
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
							<th style="font-size:12px">No</th>
							<th style="font-size:12px">Users ID</th>
							<th style="font-size:12px">Full Name</th>
							<th style="font-size:12px">Place of Birth</th>
							<th style="font-size:12px">Date of Birth</th>
							<th style="font-size:12px">Gender</th>
                            <th style="font-size:12px">Address</th>
                            <th style="font-size:12px">Phone</th>
                            <th style="font-size:12px">E-mail</th>
                            <th style="font-size:12px">Password</th>
                            <th colspan="2" class="center" style="font-size:12px">Action</th>
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
                                <span class="label label-sm label-warning">
                                <?php echo $key->kode_pengguna;?>
                                </span>
                            </td>
							<td>
                                <a href="#"><?php echo $key->nama_lengkap;?></a>
                            </td>
							<td class="hidden-480">
                                <?php echo $key->tempat_lahir;?>
                            </td>
							<td>
                                <?php echo $key->tanggal_lahir;?>
                            </td>
                            <td>
                                <?php
                                    if($key->jenis_kelamin=="laki_laki"){
                                        echo "L";
                                    }else{
                                        echo "P";
                                    };
                                ?>
                            </td>
                            <td>
                                <?php echo substr($key->alamat,0,10)."[...]";?>
                            </td>
                            <td>
                                <?php echo str_replace(substr($key->telpon,8,4),"***",$key->telpon);?>
                            </td>
                            <td>
                                <?php echo $key->email;?>
                            </td>
                            <td>
                                <?php echo bin2hex($key->password);?>
                            </td>
                            <td style="display:none"></td>
                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a class="green" href="<?php echo base_url('index.php/profil_users/edit?no=').$key->no;?>">
										<i class="ace-icon fa fa-pencil bigger-130"></i>
									</a>
                                    <a class="red bootbox-confirm-profil-users" href="#" data-no="<?php echo $key->no;?>">
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
    											<a href="<?php echo base_url('index.php/profil_users/edit/').$key->no;?>" class="tooltip-success" data-rel="tooltip" title="Edit">
    												<span class="green">
    													<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
    												</span>
    											</a>
    										</li>

    										<li>
    											<a href="#" class="tooltip-error bootbox-confirm-profil-users" data-rel="tooltip" title="Delete" data-no="<?php echo $key->no;?>">
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

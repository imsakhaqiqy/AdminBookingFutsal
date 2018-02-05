<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Admin-maenfutsal.com</title>

<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/4.5.0/css/font-awesome.min.css');?>" />

<!-- page specific plugin styles -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.custom.min.css');?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/chosen.min.css');?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.gritter.min.css');?>" />

<!-- text fonts -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.googleapis.com.css');?>" />

<!-- ace styles -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/ace.min.css');?>" class="ace-main-stylesheet" id="main-ace-style" />

<!--[if lte IE 9]>
<link rel="stylesheet" href="<?php //echo base_url('assets/css/ace-part2.min.css');?>" class="ace-main-stylesheet" />
<![endif]-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/ace-skins.min.css');?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/ace-rtl.min.css');?>" />

<!--[if lte IE 9]>
<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
<![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->
<script src="<?php echo base_url('assets/js/ace-extra.min.js');?>"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
<style>
	table td{
		color: DarkSlateGray;
	}

	/* The modal (background) */
	.modalImg{
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		padding-top: 100px; /* Location of the box */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0,0,0); /* Fallback color */
		background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
	}
	/* Modal content(image) */
	.modal-content-img{
		margin: auto;
		display: block;
		width: 40%;
		max-width: 700px;
	}

	/* Caption of modal Image */
	#caption{
		margin: auto;
		display: block;
		width: 80%;
		max-width: 700px;
		text-align: center;
		color: #ccc;
		padding: 10px 0;
		height: 150px;
	}
	/* Add animation */
	.modal-content-img, #caption{
		-webkit-animation-name: zoom;
		-webkit-animation-duration: 0.6s;
		animation-name: zoom;
		animation-duration: 0.6s;
	}

	@-webkit-keyframes zoom{
		from { -webkit-transform: scale(0)}
		to { -webkit-transform: scale(1)}
	}

	@keyframes zoom {
		from {transform: scale(0.1)}
		to {transform: scale(1)}
	}

	/* The close button */
	.close{
		position: absolute;
		top: 15px;
		right: 35px;
		color: #f1f1f1;
		font-size: 40px;
		font-weight: bold;
		transition: 0.3s;
	}

	.close:hover,
	.close:focus{
		color: #bbb;
		text-decoration: none;
		cursor: pointer;
	}

	/* 100% Image width on smaller screens */
	@media only screen and (max-width: 700px){
		.modal-content-img{
			width: 100%;
		}
	}
</style>
</head>

<body class="no-skin">
	<?php $this->load->view('header');?>

	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try{ace.settings.loadState('main-container')}catch(e){}
		</script>

		<?php $this->load->view('sidebar');?>

		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
					<!-- /.breadcrumb -->
        <?php $this->load->view('breadcrum');?>
					<!-- /.nav-search -->
        <?php $this->load->view('search');?>
				</div>

				<?php $this->load->view('content');?>
			</div>
		</div><!-- /.main-content -->

		<?php $this->load->view('footer');?>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div><!-- /.main-container -->

	<!-- basic scripts -->

	<!--[if !IE]> -->
	<script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>

	<!-- <![endif]-->

	<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
	<script type="text/javascript">
		if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url('assets/js/jquery.mobile.custom.min.js');?>'>"+"<"+"/script>");
	</script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>


	<script src="<?php echo base_url('assets/js/jquery-ui.custom.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.ui.touch-punch.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/chosen.jquery.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/markdown.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap-markdown.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.hotkeys.index.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap-wysiwyg.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootbox.js');?>"></script>




	<!-- page specific plugin scripts -->
	<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.dataTables.bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/dataTables.buttons.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/buttons.flash.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/buttons.html5.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/buttons.print.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/buttons.colVis.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/dataTables.select.min.js');?>"></script>

	<!-- ace scripts -->
	<script src="<?php echo base_url('assets/js/ace-elements.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/ace.min.js');?>"></script>

	<!-- inline scripts related to this page -->
	<script type="text/javascript">
	jQuery(function($){
		function showErrorAlert (reason, detail) {
			var msg='';
				if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
				else {
					//console.log("error uploading file", reason, detail);
				}
				$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+
				'<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
		}
		//$('#editor1').ace_wysiwyg();//this will create the default editor will all buttons
		//but we want to change a few buttons colors for the third style
		$('#editor1').ace_wysiwyg({
			toolbar:
			[
			'font',
			null,
			'fontSize',
			null,
			{name:'bold', className:'btn-info'},
			{name:'italic', className:'btn-info'},
			{name:'strikethrough', className:'btn-info'},
			{name:'underline', className:'btn-info'},
			null,
			{name:'insertunorderedlist', className:'btn-success'},
			{name:'insertorderedlist', className:'btn-success'},
			{name:'outdent', className:'btn-purple'},
			{name:'indent', className:'btn-purple'},
			null,
			{name:'justifyleft', className:'btn-primary'},
			{name:'justifycenter', className:'btn-primary'},
			{name:'justifyright', className:'btn-primary'},
			{name:'justifyfull', className:'btn-inverse'},
			null,
			{name:'createLink', className:'btn-pink'},
			{name:'unlink', className:'btn-pink'},
			null,
			{name:'insertImage', className:'btn-success'},
			null,
			'foreColor',
			null,
			{name:'undo', className:'btn-grey'},
			{name:'redo', className:'btn-grey'}
			],
			'wysiwyg': {
				fileUploadError: showErrorAlert
			}
		}).prev().addClass('wysiwyg-style2');

		/**
		//make the editor have all the available height
		$(window).on('resize.editor', function() {
			var offset = $('#editor1').parent().offset();
			var winHeight =  $(this).height();

			$('#editor1').css({'height':winHeight - offset.top - 10, 'max-height': 'none'});
		}).triggerHandler('resize.editor');
		*/

		$('#editor2').css({'height':'200px'}).ace_wysiwyg({
			toolbar_place: function(toolbar) {
				return $(this).closest('.widget-box')
				   .find('.widget-header').prepend(toolbar)
				   .find('.wysiwyg-toolbar').addClass('inline');
			   },
			   toolbar:
			   [
				'bold',
				{name:'italic' , title:'Change Title!', icon: 'ace-icon fa fa-leaf'},
				'strikethrough',
				null,
				'insertunorderedlist',
				'insertorderedlist',
				null,
				'justifyleft',
				'justifycenter',
				'justifyright'
				],
				speech_button: false
		});

		$('[data-toggle="buttons"] .btn').on('click', function(e){
		var target = $(this).find('input[type=radio]');
		var which = parseInt(target.val());
		var toolbar = $('#editor1').prev().get(0);
		if(which >= 1 && which <= 4) {
			toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g , '');
			if(which == 1) $(toolbar).addClass('wysiwyg-style1');
			else if(which == 2) $(toolbar).addClass('wysiwyg-style2');
			if(which == 4) {
				$(toolbar).find('.btn-group > .btn').addClass('btn-white btn-round');
			} else $(toolbar).find('.btn-group > .btn-white').removeClass('btn-white btn-round');
		}
		});

		//RESIZE IMAGE

	//Add Image Resize Functionality to Chrome and Safari
	//webkit browsers don't have image resize functionality when content is editable
	//so let's add something using jQuery UI resizable
	//another option would be opening a dialog for user to enter dimensions.
	if ( typeof jQuery.ui !== 'undefined' && ace.vars['webkit'] ) {

	var lastResizableImg = null;
		function destroyResizable() {
			if(lastResizableImg == null) return;
			lastResizableImg.resizable( "destroy" );
			lastResizableImg.removeData('resizable');
			lastResizableImg = null;
		}

	var enableImageResize = function() {
		$('.wysiwyg-editor')
		.on('mousedown', function(e) {
			var target = $(e.target);
			if( e.target instanceof HTMLImageElement ) {
				if( !target.data('resizable') ) {
					target.resizable({
						aspectRatio: e.target.width / e.target.height,
					});
					target.data('resizable', true);

					if( lastResizableImg != null ) {
						//disable previous resizable image
						lastResizableImg.resizable( "destroy" );
						lastResizableImg.removeData('resizable');
					}
					lastResizableImg = target;
				}
			}
		})
		.on('click', function(e) {
			if( lastResizableImg != null && !(e.target instanceof HTMLImageElement) ) {
				destroyResizable();
			}
		})
		.on('keydown', function() {
			destroyResizable();
		});
	}

	enableImageResize();

	/**
	//or we can load the jQuery UI dynamically only if needed
	if (typeof jQuery.ui !== 'undefined') enableImageResize();
	else {//load jQuery UI if not loaded
		//in Ace demo ./components will be replaced by correct components path
		$.getScript("assets/js/jquery-ui.custom.min.js", function(data, textStatus, jqxhr) {
			enableImageResize()
		});
	}
	*/
	}
	});

		jQuery(function($) {
			// $("#save-deskripsi").click(function() {
			// 	var editor = $(".wysiwyg-editor").text();
			// 	$("#editornya").text(editor);
			// });
		});

		function showText(){
			$("#editornya").text($("#editor1").text());
		}


		jQuery(function($) {
			$("#update").click(function() {
				var editor = $(".wysiwyg-editor").text();
				$("#editornya").text(editor);
			})
		})

		jQuery(function($) {
			$("#myModal").modal({
				show: true
			});
		});

		jQuery(function($) {
			$("#myModalOverrideData").modal({
				show: true
			});
		});

		// jQuery(function($) {
		// 	$("#save").click(function(e){
		// 		var kode = $("#kode").val();
		// 		var nama = $("#nama").val();
		// 		var alamat = $("#alamat").val();
		// 		var city = $("#city").val();
		// 		if(kode==""||nama==""||alamat==""||city==""){
		// 			$("#kode_notif").text("*Required Field ID");
		// 			$("#nama_notif").text("*Required Name");
		// 			$("#alamat_notif").text("*Required Address");
		// 			$("#city_notif").text("*Required City");
		// 			e.preventDefault();
		// 			//alert("hai " + kode);
		// 		}
		//
		// 	});
		// });


		jQuery(function($) {
				$("#dynamic-table").on(ace.click_event,'.bootbox-confirm-profil-lapangan', function() {
					//e.preventDefault();
					var hasilKode = $(this).data('kode');
					console.log(hasilKode);
					//var y = $("#y").attr("href");
					//var x = "<?php //echo base_url('/index.php/Profil_Lapangan/hapus/');?>";
					bootbox.confirm({
						message: "Apakah anda yakin ingin menghapus data ini!",
						buttons: {
							confirm: {
								label: 'Yes',
								className: 'btn-success'
							},
							cancel: {
								label: 'No',
								className: 'btn-danger'
							}
						},
						callback: function (result) {
							if(result){
								$(location).attr("href","http://localhost/codeigniter/ace-master/index.php/profil_lapangan/hapus?kode_lap="+hasilKode);
							}
						}
					});
				});

				$(".bootbox-confirm-deskripsi-lapangan").on(ace.click_event,function() {
					var hasilKode = $(this).data('kode-lap');
					//console.log(hasilKode);
					//var y = $("#y").attr("href");
					//var x = "<?php echo base_url('/index.php/Profil_Lapangan/hapus/');?>";
					bootbox.confirm({
						message: "Apakah anda yakin ingin menghapus data ini!",
						buttons: {
							confirm: {
								label: 'Yes',
								className: 'btn-success'
							},
							cancel: {
								label: 'No',
								className: 'btn-danger'
							}
						},
						callback: function (result) {
							if(result){
								$(location).attr("href","http://localhost/codeigniter/ace-master/index.php/deskripsi_lapangan/hapus?kode_lap="+hasilKode);
							}
						}
					});
				});

				$(".bootbox-confirm-deskripsi-venue").on(ace.click_event,function(){
					var hasilKode = $(this).data('kode-lap');
					bootbox.confirm({
						message: "Apakah anda yakin ingin menghapus data ini!",
						buttons: {
							confirm: {
								label: 'Yes',
								className: 'btn-success'
							},
							cancel: {
								label: 'No',
								className: 'btn-danger'
							}
						},
						callback: function(result){
							if(result){
								$(location).attr("href","http://localhost/codeigniter/ace-master/index.php/deskripsi_venue/hapus/?kode_lap="+hasilKode);
								console.log(hasilKode);
							}
						}
					});
				});

				$(".bootbox-confirm-jenis-lapangan").on(ace.click_event, function() {
					var hasilKode = $(this).data('kode-jenis');
					//var y = $("#y").attr("href");
					//var x = "<?php echo base_url('/index.php/Profil_Lapangan/hapus/');?>";
					bootbox.confirm({
						message: "Apakah anda yakin ingin menghapus data ini!",
						buttons: {
							confirm: {
								label: 'Yes',
								className: 'btn-success'
							},
							cancel: {
								label: 'No',
								className: 'btn-danger'
							}
						},
						callback: function (result) {
							if(result){
								//console.log(hasilKode);
								$(location).attr("href","http://localhost/codeigniter/ace-master/index.php/jenis_lapangan/hapus?kode_jenis="+hasilKode);
							}
						}
					});
				});

				$(".bootbox-confirm-tipe-lapangan").on(ace.click_event, function() {
					var hasilKode = $(this).data('kode-tipe');
					//var y = $("#y").attr("href");
					//var x = "<?php echo base_url('/index.php/Profil_Lapangan/hapus/');?>";
					bootbox.confirm({
						message: "Apakah anda yakin ingin menghapus data ini!",
						buttons: {
							confirm: {
								label: 'Yes',
								className: 'btn-success'
							},
							cancel: {
								label: 'No',
								className: 'btn-danger'
							}
						},
						callback: function (result) {
							if(result){
								//console.log(hasilKode);
								$(location).attr("href","http://localhost/codeigniter/ace-master/index.php/tipe_lapangan/hapus?kode_tipe="+hasilKode);
							}
						}
					});
				});

				$(".bootbox-confirm-stok-lapangan").on(ace.click_event,function(){
					var hasilKode = $(this).data('kode-stok');
					bootbox.confirm({
						message: "Apakah anda yakin ingin menghapus data ini!",
						buttons: {
							confirm:{
								label: 'Yes',
								className: 'btn-success'
							},
							cancel:{
								label: 'No',
								className: 'btn-danger'
							}
						},
						callback: function(result){
							if(result){
								$(location).attr("href","http://localhost/codeigniter/ace-master/index.php/stok_lapangan/hapus?kode_stok="+hasilKode);
							}
						}
					});
				});

				$(".bootbox-confirm-harga-reguler").on(ace.click_event,function(){
					var hasilKode = $(this).data('kode-stok');
					bootbox.confirm({
						message: "Apakah anda yakin ingin menghapus data ini!",
						buttons: {
							confirm:{
								label: 'Yes',
								className: 'btn-success'
							},
							cancel:{
								label: 'No',
								className: 'btn-danger'
							}
						},
						callback: function(result){
							if(result){
								$(location).attr("href","http://localhost/codeigniter/ace-master/index.php/harga_reguler/hapus?kode_stok="+hasilKode);
							}
						}
					});
				});

				$(".bootbox-confirm-harga-weekend").on(ace.click_event,function(){
					var hasilKode = $(this).data('kode-stok');
					bootbox.confirm({
						message: "Apakah anda yakin ingin menghapus data ini!",
						buttons: {
							confirm: {
								label: 'Yes',
								className: 'btn-success'
							},
							cancel: {
								label: 'No',
								className: 'btn-danger'
							}
						},
						callback: function(result){
							if(result){
								$(location).attr("href","http://localhost/codeigniter/ace-master/index.php/harga_weekend/hapus?kode_stok="+hasilKode);
							}
						}
					});
				});

				$(".bootbox-confirm-profil-order").on(ace.click_event,function(){
					var hasilKode = $(this).data('no');
					bootbox.confirm({
						message: "Apakah anda yakin ingin menghapus data ini!",
						buttons: {
							confirm: {
								label: 'Yes',
								className: 'btn-success'
							},
							cancel: {
								label: 'No',
								className: 'btn-danger'
							}
						},
						callback: function(result){
							if(result){
								$(location).attr("href","http://localhost/codeigniter/ace-master/index.php/profil_order/hapus?no="+hasilKode);
							}
						}
					});
				});

				$(".bootbox-confirm-order-lapangan").on(ace.click_event,function(){
					var hasilKode = $(this).data('no');
					bootbox.confirm({
						message: "Apakah anda yakin ingin menghapus data ini!",
						buttons: {
							confirm: {
								label: 'Yes',
								className: 'btn-success'
							},
							cancel: {
								label: 'No',
								className: 'btn-danger'
							}
						},
						callback: function(result){
							if(result){
								$(location).attr("href","http://localhost/codeigniter/ace-master/index.php/order_lapangan/hapus?no="+hasilKode);
							}
						}
					});
				});

				$(".bootbox-confirm-order-validasi").on(ace.click_event,function(){
					var hasilKode = $(this).data('no');
					bootbox.confirm({
						message: "Apakah anda yakin ingin menghapus data ini!",
						buttons: {
							confirm: {
								label: 'Yes',
								className: 'btn-success'
							},
							cancel: {
								label: 'No',
								className: 'btn-danger'
							}
						},
						callback: function(result){
							if(result){
								$(location).attr("href","http://localhost/codeigniter/ace-master/index.php/order_validasi/hapus?no="+hasilKode);
							}
						}
					});
				});

				$(".bootbox-confirm-status-order").on(ace.click_event,function(){
					var hasilKode = $(this).data('no');
					bootbox.confirm({
						message: "Apakah anda yakin ingin menghapus data ini!",
						buttons: {
							confirm: {
								label: 'Yes',
								className: 'btn-success'
							},
							cancel: {
								label: 'No',
								className: 'btn-danger'
							}
						},
						callback: function(result){
							if(result){
								$(location).attr("href","http://localhost/codeigniter/ace-master/index.php/status_order/hapus?no="+hasilKode);
							}
						}
					});
				});

				$(".bootbox-confirm-profil-users").on(ace.click_event,function(){
					var hasilKode = $(this).data('no');
					bootbox.confirm({
						message: "Apakah anda yakin ingin menghapus data ini!",
						buttons: {
							confirm: {
								label: 'Yes',
								className: 'btn-success'
							},
							cancel: {
								label: 'No',
								className: 'btn-danger'
							}
						},
						callback: function(result){
							if(result){
								$(location).attr("href","http://localhost/codeigniter/ace-master/index.php/profil_users/hapus?no="+hasilKode);
							}
						}
					});
				});

				$('.id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false, //| true | large
					image: "choose-file.gif",
					imageheight : 22,
					imagewidth : 82,
					width : 250
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});

				$('.id-input-file-3').ace_file_input({
					style: 'well',
					btn_choose: 'Drop files here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					thumbnail: 'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}

				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});

				$('textarea[data-provide="markdown"]').each(function(){
					var $this = $(this);

					if ($this.data('markdown')) {
						$this.data('markdown').showEditor();
					}
					else $this.markdown()

						$this.parent().find('.btn').addClass('btn-white');
					})

				function showErrorAlert (reason, detail) {
					var msg='';
						if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
						else {
						//console.log("error uploading file", reason, detail);
						}
					$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+
					'<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
					}

		//initiate dataTables plugin
		var myTable =
		$('#dynamic-table')
		//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
		.DataTable( {
			bAutoWidth: false,
			"aoColumns": [
			  { "bSortable": false },
			  null, null,null, null, null,null,null,null,null,null,null,
			  { "bSortable": false }
			],
			"aaSorting": [],
			select: {
				style: 'multi'
			}
		} );

		$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

		new $.fn.dataTable.Buttons( myTable, {
			buttons: [
			  {
				"extend": "colvis",
				"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
				"className": "btn btn-white btn-primary btn-bold",
				columns: ':not(:first):not(:last)'
			  },
			  {
				"extend": "copy",
				"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
				"className": "btn btn-white btn-primary btn-bold"
			  },
			  {
				"extend": "csv",
				"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
				"className": "btn btn-white btn-primary btn-bold"
			  },
			  {
				"extend": "excel",
				"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
				"className": "btn btn-white btn-primary btn-bold"
			  },
			  {
				"extend": "pdf",
				"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
				"className": "btn btn-white btn-primary btn-bold"
			  },
			  {
				"extend": "print",
				"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
				"className": "btn btn-white btn-primary btn-bold",
				autoPrint: false,
				message: 'This print was produced using the Print button for DataTables'
			  }
			]
		} );
		myTable.buttons().container().appendTo( $('.tableTools-container') );

		//style the message box
		var defaultCopyAction = myTable.button(1).action();
		myTable.button(1).action(function (e, dt, button, config) {
			defaultCopyAction(e, dt, button, config);
			$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
		});

		var defaultColvisAction = myTable.button(0).action();
		myTable.button(0).action(function (e, dt, button, config) {

			defaultColvisAction(e, dt, button, config);


			if($('.dt-button-collection > .dropdown-menu').length == 0) {
				$('.dt-button-collection')
				.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
				.find('a').attr('href', '#').wrap("<li />")
			}
			$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
		});

		setTimeout(function() {
			$($('.tableTools-container')).find('a.dt-button').each(function() {
				var div = $(this).find(' > div').first();
				if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
				else $(this).tooltip({container: 'body', title: $(this).text()});
			});
		}, 500);

		myTable.on( 'select', function ( e, dt, type, index ) {
			if ( type === 'row' ) {
				$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
			}
		} );
		myTable.on( 'deselect', function ( e, dt, type, index ) {
			if ( type === 'row' ) {
				$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
			}
		} );

		//table checkboxes
		$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

		//select/deselect all rows according to table header checkbox
		$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
			var th_checked = this.checked;//checkbox inside "TH" table header

			$('#dynamic-table').find('tbody > tr').each(function(){
				var row = this;
				if(th_checked) myTable.row(row).select();
				else  myTable.row(row).deselect();
			});
		});

		//select/deselect a row when the checkbox is checked/unchecked
		$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
			var row = $(this).closest('tr').get(0);
			if(this.checked) myTable.row(row).deselect();
			else myTable.row(row).select();
		});

		$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
			e.stopImmediatePropagation();
			e.stopPropagation();
			e.preventDefault();
		});
		});

		jQuery(function($) {
			var modal = document.getElementById("modalImage");
			// Get the image and insert it inside the modal - use its 'alt' text as a caption
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			$("#dynamic-table").on('click','.myImgg',function(){
				var hasilSrc = $(this).data('src');
				var hasilAlt = $(this).data('alt');
				//alert(hasilSrc);
				modal.style.display = "block";
				modalImg.src = hasilSrc;
				captionText.innerHTML = hasilAlt;
			});
			$("#dynamic-table").on('click','.myImgd',function() {
				var hasilSrc = $(this).data('src');
				var hasilAlt = $(this).data('alt');
				//alert(hasilSrc);
				modal.style.display = "block";
				modalImg.src = hasilSrc;
				captionText.innerHTML = hasilAlt;
			});
			$("#dynamic-table").on('click','.myImgv',function() {
				var hasilSrc = $(this).data('src');
				var hasilAlt = $(this).data('alt');
				modal.style.display = "block";
				modalImg.src = hasilSrc;
				captionText.innerHTML = hasilAlt;
			});
			$("#dynamic-table").on('click','.myImgs',function() {
				var hasilSrc = $(this).data('src');
				var hasilAlt = $(this).data('alt');
				modal.style.display = "block";
				modalImg.src = hasilSrc;
				captionText.innerHTML = hasilAlt;
			});
			//Get the <span> element that close the modal
			var span = document.getElementsByClassName("close")[0];

			//when the user clicks on <span> (x), close the modal
			span.onclick = function(){
				modal.style.display = "none";
			}
		});

		$('.info').popover({
			title: "<p>Users id manual:</p>",
			content: "<p>ex: [3 word name first to uppercase + row number]</p>",
			html: true,
			placement: "right"
		});
		$('.info-receipt-number').popover({
			title: "<p>Receipt number manual:</p>",
			content: "<p>ex: [mmddyy + row number]</p>",
			html: true,
			placement: "right"
		});


		// jQuery(function($) {
		// 	var modal = document.getElementById("modalMap");
		// 	// Get the image and insert it inside the modal - use its 'alt' text as a caption
		// 	var modalMap = document.getElementById("map01");
		// 	$("#dynamic-table").on('click','.myLinkMap',function() {
		// 		var hasilLink = $(this).data('link-map');
		// 		modal.style.display = "block";
		// 		document.getElementById("map01").src = "http://www.w3schools.com";
		// 		//alert(hasilLink);
		// 	});
		// 	//Get the <span> element that close the modal
		// 	var span = document.getElementsByClassName("close")[1];
		//
		// 	//when the user clicks on <span> (x), close the modal
		// 	span.onclick = function(){
		// 		modal.style.display = "none";
		// 	}
		// });

</script>
</body>
</html>

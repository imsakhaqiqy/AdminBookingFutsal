<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Ace Admin</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/4.5.0/css/font-awesome.min.css');?>" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.googleapis.com.css');?>" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/ace.min.css');?>" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/ace-rtl.min.css');?>" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    <style>
        .login-layout{
            background-image: url('<?php echo base_url('assets/bg1.jpg');?>');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .blur-login{
            background-image: url('<?php echo base_url('assets/bg2.jpg');?>');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .light-login{
            background-image: url('<?php echo base_url('assets/bg3.jpg');?>');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .theme4-login{
            background-image: url('<?php echo base_url('assets/bg4.jpg');?>');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .position-relative{
            opacity:0.8;
        }
    </style>
	</head>

	<body class="login-layout">
        <script>
            function statusChangeCallback(response){
                console.log('statusChangeCallback');
                console.log(response);
                if(response.status === 'connected'){
                    testAPI();
                }else if(response.status === 'not_authorized'){
                    document.getElementById('status').innerHTML = 'Please log ' + 'into this app.';
                }else{
                    document.getElementById('status').innerHTML = 'Please log ' + 'into facebook.';
                }
            }

            function checkLoginState(){
                FB.getLoginStatus(function(response){
                    statusChangeCallback(response);
                });
            }

            window.fbAsyncInit = function(){
                FB.init({
                    appId : '731442337022662',
                    cookie : true,
                    xfbml : true,
                    version : 'v2.8'
                });

                FB.getLoginStatus(function(response){
                    statusChangeCallback(response);
                });


            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if(d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            } (document, 'script', 'facebook-jssdk'));

            function testAPI(){
                console.log('Welcome! Fetching your information.... ');
                FB.api('/me', function(response){
                    console.log('Successful login for: ' + response.name);
                    document.getElementById('status').innerHTML =
                    'Thanks for logging in, ' + response.name + '!';
                });
            }


        </script>

        <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
        </fb:login-button>

        <div id="status">
        </div>

		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">Ace</span>
									<span class="white" id="id-text2">Application</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Company Name</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4>
                                            <p class="red" id="notif-error"><?php
                                                if(isset($error)){
                                                    echo $error;
                                                }
                                            ?>
                                            </p>
											<div class="space-6"></div>

											<form id="login-form" role="form" action="<?php echo base_url();?>index.php/login/aksi_login" method="POST">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Email" name="user_name" id="user_name"/>
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" name="password" id="password"/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label>

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary" id="btn-login">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											<div class="social-or-login center">
												<span class="bigger-110">Or Login Using</span>
											</div>

											<div class="space-6"></div>

											<div class="social-login center">
												<a class="btn btn-primary" onclick="FB_login()">
													<i class="ace-icon fa fa-facebook"></i>
												</a>

												<!-- <div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="true" data-auto-logout-link="false">

												</div> -->
												<a class="btn btn-info">
													<i class="ace-icon fa fa-twitter"></i>
												</a>

												<a class="btn btn-danger">
													<i class="ace-icon fa fa-google-plus"></i>
												</a>
											</div>
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													I forgot my password
												</a>
											</div>

											<div>
												<a href="#" data-target="#signup-box" class="user-signup-link">
													I want to register
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email and to receive instructions
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Send Me!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>
												New User Registration
											</h4>

											<div class="space-6"></div>
											<p> Enter your details to begin: </p>
											<p id="notif-error-register"></p>
											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" id="email" name="email"/>
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Username" id="username" name="username"/>
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" id="password" name="password"/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Repeat password" id="cpassword"/>
															<i class="ace-icon fa fa-retweet"></i>
														</span>
													</label>

													<label class="block">
														<input type="checkbox" class="ace" />
														<span class="lbl">
															I accept the
															<a href="#">User Agreement</a>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">Reset</span>
														</button>

														<button type="button" class="width-65 pull-right btn btn-sm btn-success" id="register">
															<span class="bigger-110">Register</span>

															<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Back to login
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->

							<div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Theme1</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Theme2</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Theme3</a>
                                &nbsp;
                                <span class="blue">/</span>
								&nbsp;
                                <a id="btn-login-theme4" href="#">Theme4</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
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

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});



			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');

				e.preventDefault();
			 });
             $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'light-blue');

				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');

				e.preventDefault();
			 });
             $('#btn-login-theme4').on('click', function(e) {
				$('body').attr('class', 'login-layout theme4-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');

				e.preventDefault();
			 });
             $('#btn-login-theme5').on('click', function(e) {
				$('body').attr('class', 'login-layout theme5-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'light-blue');

				e.preventDefault();
			 });
             $('#btn-login-theme6').on('click', function(e) {
				$('body').attr('class', 'login-layout theme6-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');

				e.preventDefault();
			 });

			});

            jQuery(function($) {
                $('#login-form').on('submit', function(event){
				 event.preventDefault();
				 var data = $(this).serialize();
				 // console.log(data);
				 $.ajax({
					 url: 'http://www.maenfutsal.16mb.com/admin/ace-master/index.php/Login/aksi_login/',
					 type : 'POST',
					 data : $(this).serialize(),
					 beforeSend : function(){
					   $('#btn-login').prop('disabled', true);
					   //$('#btn-submit-product').hide();
					 },
					 success : function(response){
						 $('#btn-login').prop('disabled',false);
						 var response1 = response;
						 var getContact = eval('(' + response1 + ')');
						 if(getContact.error==0){
							 $(location).attr("href","http://www.maenfutsal.16mb.com/admin/ace-master/index.php/dashboard");
						 }else{
							 $("#notif-error").text("Username or Password incorrect");
						 }
						// console.log(getContact.error);
						// alert(getContact.error);

					 },

				 });
			   });
			 //ENDBlock handle form create purchase order submission
            });



			jQuery(function($){
				$("#register").click(function(){
					var email = $("#email").val();
					var userName = $("#username").val();
					var password = $("#password").val();
					var cpassword = $("#cpassword").val();
					var notifPassword = $("#notif-error-register");
					if(password!==cpassword){
						$("#notif-error-register").text("Password please equated!");
						notifPassword.css({color: 'blue'});
					}else{
						$(location).attr("href","http://www.maenfutsal.16mb.com/admin/ace-master/index.php/Login/insert_users/"+email+"/"+userName+"/"+password);
					}
					console.log(email+" "+userName+" "+password);
				});
			});

		</script>
	</body>
</html>

<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0050)http://localhost/index.php/Admin/Login/login.html# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta charset="utf-8">
		<title>后台登陆系统</title>
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/dianyingfbb/Public/admin/assets/css/bootstrap.css">
		<link rel="stylesheet" href="/dianyingfbb/Public/admin/assets/css/font-awesome.css">

		<!-- text fonts -->
		<link rel="stylesheet" href="/dianyingfbb/Public/admin/assets/css/ace-fonts.css">

		<!-- ace styles -->
		<link rel="stylesheet" href="/dianyingfbb/Public/admin/assets/css/ace.css">

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/Public/assets/css/ace-part2.css" />
		<![endif]-->
		<link rel="stylesheet" href="/dianyingfbb/Public/admin/assets/css/ace-rtl.css">

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/Public/assets/css/ace-ie.css" />
		<![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/Public/assets/js/html5shiv.js"></script>
		<script src="/Public/assets/js/respond.js"></script>
		<![endif]-->

<style>
.high{ color:#F00;}
.loginnone{display:none;}
</style>
	</head>

	<body class="login-layout light-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">521电影网</span>
									<span class="blue" style="font-family:microsoft yahei" id="id-text2">后台登陆</span>
								</h1>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												请输入用户名和密码
											</h4>

											<div class="space-6"></div>
											<form name="runlogin" id="runlogin" method="post" action="<?php echo U('Login/yzdl');?>">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="yonghuming" id="admin_username" placeholder="用户名">
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="mima" id="admin_pwd" placeholder="输入密码">
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace">
															<span class="lbl"> 记住信息</span>
														</label>

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">登录</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
							</div><!-- /.position-relative -->

						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->
		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../css/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->

</body></html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0049)./index.php/Admin/Index/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="utf-8">
<title>521电影网后台系统管理</title>

<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="/dianyingfbb/Public/admin/assets/css/bootstrap.css">
<link rel="stylesheet" href="/dianyingfbb/Public/admin/assets/css/font-awesome.css">

<!-- page specific plugin styles -->

<!-- text fonts -->
<link rel="stylesheet" href="/dianyingfbb/Public/admin/assets/css/ace-fonts.css">

<!-- ace styles -->
<link rel="stylesheet" href="/dianyingfbb/Public/admin/assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style">

<!--[if lte IE 9]>
<link rel="stylesheet" href="/Public/assets/css/ace-part2.css" class="ace-main-stylesheet" />
<![endif]-->

<!--[if lte IE 9]>
<link rel="stylesheet" href="/Public/assets/css/ace-ie.css" />
<![endif]-->

<!-- inline styles related to this page -->
<link rel="stylesheet" href="/dianyingfbb/Public/admin/assets/css/slackck.css">
<!-- ace settings handler -->
<script src="/dianyingfbb/Public/admin/assets/js/ace-extra.js"></script>
<script src="/dianyingfbb/Public/admin/assets/js/jquery.min.js"></script>
<script src="/dianyingfbb/Public/admin/assets/js/jquery.form.js"></script>
<script src="/dianyingfbb/Public/admin/layer/layer.js"></script>
<link rel="stylesheet" href="/dianyingfbb/Public/admin/layer/skin/layer.css" id="layui_layer_skinlayercss" style="">
<!--<script src="/Public/assets/js/jquery.leanModal.min.js"></script>-->
<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

<!--[if lte IE 8]>
<script src="/Public/assets/js/html5shiv.js"></script>
<script src="/Public/assets/js/respond.js"></script>
<![endif]-->
</head>

<body class="no-skin" style="">
<!-- #section:basics/navbar.layout -->
<div id="navbar" class="navbar navbar-default    navbar-collapse">
<script type="text/javascript">
try{ace.settings.check('navbar' , 'fixed')}catch(e){}
</script>

<div class="navbar-container" id="navbar-container">
<!-- #section:basics/sidebar.mobile.toggle -->
<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
<span class="sr-only">Toggle sidebar</span>

<span class="icon-bar"></span>

<span class="icon-bar"></span>

<span class="icon-bar"></span>
</button>

<!-- /section:basics/sidebar.mobile.toggle -->
<div class="navbar-header pull-left">
<!-- #section:basics/navbar.layout.brand -->
<a href="http://www.521gxw.com" class="navbar-brand">
<small>
<i class="fa fa-leaf"></i>
521电影网后台管理
</small>
</a>

<!-- /section:basics/navbar.layout.brand -->

<!-- #section:basics/navbar.toggle -->
<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons">
<span class="sr-only">Toggle user menu</span>

<img src="/dianyingfbb/Public/admin/assets/avatars/user.jpg" alt="Jason&#39;s Photo">
</button>

<!-- /section:basics/navbar.toggle -->
</div>

<!-- #section:basics/navbar.dropdown -->
<div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
<ul class="nav ace-nav">
<li class="transparent"></li>
<li class="transparent">
<a style="cursor:pointer;" id="cache" class="dropdown-toggle">清除缓存</a>
</li>
<li class="transparent">
<a data-toggle="dropdown" class="dropdown-toggle" href="#">
<i class="ace-icon fa fa-bell icon-animated-bell"></i>
</a>

<div class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
<div class="tabbable">
<ul class="nav nav-tabs">
<li class="active">
<a data-toggle="tab" href="./index.php/Admin/Index/index.html#navbar-tasks">
Tasks
<span class="badge badge-danger">4</span>
</a>
</li>

<li>
<a data-toggle="tab" href="./index.php/Admin/Index/index.html#navbar-messages">
Messages
<span class="badge badge-danger">5</span>
</a>
</li>
</ul><!-- .nav-tabs -->

<div class="tab-content">
<div id="navbar-tasks" class="tab-pane in active">
<ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
<li class="dropdown-content">
<ul class="dropdown-menu dropdown-navbar">
<li>
<a href="./index.php/Admin/Index/index.html#">
<div class="clearfix">
<span class="pull-left">Software Update</span>
<span class="pull-right">65%</span>
</div>

<div class="progress progress-mini">
<div style="width:65%" class="progress-bar"></div>
</div>
</a>
</li>

</ul>
</li>

<li class="dropdown-footer">
<a href="./index.php/Admin/Index/index.html#">
See tasks with details
<i class="ace-icon fa fa-arrow-right"></i>
</a>
</li>
</ul>
</div><!-- /.tab-pane -->

<div id="navbar-messages" class="tab-pane">
<ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
<li class="dropdown-content">
<ul class="dropdown-menu dropdown-navbar">
<li>
<a href="./index.php/Admin/Index/index.html#">
<img src="" class="msg-photo" alt="Fred&#39;s Avatar">
<span class="msg-body">
<span class="msg-title">
<span class="blue">Fred:</span>
Vestibulum id penatibus et auctor  ...
</span>

<span class="msg-time">
<i class="ace-icon fa fa-clock-o"></i>
<span>10:09 am</span>
</span>
</span>
</a>
</li>
</ul>
</li>

<li class="dropdown-footer">
<a href="./index.php/Admin/Index/inbox.html">
See all messages
<i class="ace-icon fa fa-arrow-right"></i>
</a>
</li>
</ul>
</div><!-- /.tab-pane -->
</div><!-- /.tab-content -->
</div><!-- /.tabbable -->
</div><!-- /.dropdown-menu -->
</li>


<!-- #section:basics/navbar.user_menu -->
<li class="light-blue">
<a data-toggle="dropdown" href="#" class="dropdown-toggle">
<img class="nav-user-photo" src="/dianyingfbb/Public/admin/assets/avatars/user.jpg" alt="Jason&#39;s Photo">
<span class="user-info">
<small>Welcome,</small>
slackck								</span>

<i class="ace-icon fa fa-caret-down"></i>
</a>

<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
<li>
<a href="<?php echo U('Guanliyuan/glylb');?>">
<i class="ace-icon fa fa-cog"></i>
个人设置
</a>
</li>

<li class="divider"></li>

<li>
<a href="javascript:;" id="logout">
<i class="ace-icon fa fa-power-off"></i>
注销
</a>
</li>
</ul>
</li>

<!-- /section:basics/navbar.user_menu -->
</ul>
</div>

<!-- /section:basics/navbar.dropdown -->
</div><!-- /.navbar-container -->
</div>


<script type="text/javascript">
$(document).ready(function(){
$("#logout").click(function(){
layer.confirm('你确定要退出吗？', {icon: 3}, function(index){
layer.close(index);
window.location.href="/admin.php/login/tuichu";
});
});
});



$(function(){
$('#cache').click(function(){
if(confirm("确认要清除缓存？")){
var $type=$('#type').val();
var $mess=$('#mess');
$.post('/index.php/admin/Index/clear',{type:$type},function(data){
alert("缓存清理成功");
});
}else{
return false;
}
});
});
</script>



<!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">

<!-- #section:basics/sidebar -->

<div id="sidebar" class="sidebar responsive" data-sidebar="true" data-sidebar-hover="true">

<div class="sidebar-shortcuts" id="sidebar-shortcuts">
<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
<button class="btn btn-success">
<i class="ace-icon fa fa-signal"></i>
</button>

<button class="btn btn-info">
<i class="ace-icon fa fa-pencil"></i>
</button>

<!-- #section:basics/sidebar.layout.shortcuts -->
<button class="btn btn-warning">
<i class="ace-icon fa fa-users"></i>
</button>

<button class="btn btn-danger">
<i class="ace-icon fa fa-cogs"></i>
</button>

<!-- /section:basics/sidebar.layout.shortcuts -->
</div>

<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
<span class="btn btn-success"></span>

<span class="btn btn-info"></span>

<span class="btn btn-warning"></span>

<span class="btn btn-danger"></span>
</div>
</div><!-- /.sidebar-shortcuts -->

<ul class="nav nav-list">

<li class=""><!--open代表打开状态-->
<a href="#" class="dropdown-toggle">
<i class="menu-icon fa fa-tachometer"></i>
<span class="menu-text">
系统设置							</span>

<b class="arrow fa fa-angle-down"></b>
</a>

<b class="arrow"></b>

<ul class="submenu">
<li class="">
<a href="<?php echo U('Index/zdsz');?>">
<i class="menu-icon fa fa-caret-right"></i>
系统参数设置								</a>
<b class="arrow"></b>
</li>
<li class="">
<a href="<?php echo U('Guanliyuan/glylb');?>">
<i class="menu-icon fa fa-caret-right"></i>
管理员管理								</a>
<b class="arrow"></b>
</li>					</ul>
</li>

<!--<li class="">
<a href="#" class="dropdown-toggle">
<i class="menu-icon fa fa-folder"></i>
<span class="menu-text">
采集管理							</span>

<b class="arrow fa fa-angle-down"></b>
</a>

<b class="arrow"></b>

<ul class="submenu">
<li class="">
	<a href="<?php echo U('caiji/tjcj');?>">
	<i class="menu-icon fa fa-caret-right"></i>
	添加采集							</a>
	<b class="arrow"></b>
</li>				
	<li class="">
	<a href="<?php echo U('wzlb/wzlb');?>">
	<i class="menu-icon fa fa-caret-right"></i>
	采集管理							</a>
	<b class="arrow"></b>
	</li>
</ul>
</li>
-->
<li class=""><!--open代表打开状态-->
<a href="#" class="dropdown-toggle">
<i class="menu-icon fa fa-folder"></i>
<span class="menu-text">
分类管理							</span>

<b class="arrow fa fa-angle-down"></b>
</a>

<b class="arrow"></b>

<ul class="submenu">
<li class="">
<a href="<?php echo U('wzlb/wzlb');?>">
<i class="menu-icon fa fa-caret-right"></i>
类别管理							</a>
<b class="arrow"></b>
</li>					</ul>
</li>

<li class=""><!--open代表打开状态-->
<a href="#" class="dropdown-toggle">
<i class="menu-icon fa fa-folder"></i>
<span class="menu-text">
文章管理							</span>

<b class="arrow fa fa-angle-down"></b>
</a>

<b class="arrow"></b>

<ul class="submenu">
<li class="">
<a href="<?php echo U('wenzhang/wenzlb');?>">
<i class="menu-icon fa fa-caret-right"></i>
文章操作								</a>
<b class="arrow"></b>
</li>
						</ul>
</li>
<li class=""><!--open代表打开状态-->
<a href="#" class="dropdown-toggle">
<i class="menu-icon fa fa-plug"></i>
<span class="menu-text">
其他 功能							</span>

<b class="arrow fa fa-angle-down"></b>
</a>

<b class="arrow"></b>

<ul class="submenu">
<li class="">
<a href="<?php echo U('Yqlj/ljgl');?>">
<i class="menu-icon fa fa-caret-right"></i>
友情链接								</a>
<b class="arrow"></b>
</li><li class="">
<a href="<?php echo U('Guanggao/guanggao');?>">
<i class="menu-icon fa fa-caret-right"></i>
广告管理								</a>
<b class="arrow"></b>
</li>
</li>         
</ul><!-- /.nav-list -->

<!-- #section:basics/sidebar.layout.minimize -->
<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>

<!-- /section:basics/sidebar.layout.minimize -->
<script type="text/javascript">
try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
</script>
</div>
<!-- /section:basics/sidebar -->
<div class="main-content">
 
<!--引入百度UE-->
 <script type="text/javascript" src="/dianyingfbb/Public/utf8-php/ueditor.config.js"></script>
  <script type="text/javascript" src="/dianyingfbb/Public/utf8-php/ueditor.all.js"></script>
  <script type="text/javascript">
  window.UEDITOR_CONFIG.initialFrameWidth=1000;
  window.UEDITOR_CONFIG.initialFrameHeight=500;
        var ue = UE.getEditor('neirong');
    </script>
<div class="main-content-inner">
	<div id="sidebar2" class="sidebar h-sidebar navbar-collapse collapse collapse_btn" data-sidebar="true" data-sidebar-hover="true">
	<ul class="nav nav-list">
                        
<li>
								<a href="http://localhost/index.php/Admin/News/news_list.html">
									<o class="font12 ">文章列表</o>
								</a>

								<b class="arrow"></b>
							</li><li>
								<a href="./网站后台系统管理_files/网站后台系统管理.html">
									<o class="font12 rigbg">添加文章</o>
								</a>

								<b class="arrow"></b>
							</li><li>
								<a href="http://localhost/index.php/Admin/News/news_back.html">
									<o class="font12 ">回收站</o>
								</a>

								<b class="arrow"></b>
							</li>

						</ul><!-- /.nav-list -->
					</div><div class="page-content">

        
        
        <!--主题-->
		<div class="page-header">
			<h1>
				您当前操作
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					添加文章
				</small>
			</h1>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<form class="form-horizontal" id='form' name="form"  method="post" action="<?php echo U('wenzhang/clxw');?>">
				 <div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 顶级分类： </label>
					<div class="col-sm-9">
		            <select name="djid"  class="col-sm-3 selector">
		             <?php if(is_array($djfl)): foreach($djfl as $key=>$v): if($v['level'] == 0): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["lbmc"]); ?></option><?php endif; endforeach; endif; ?>                        
		         </select>
		            </div>
		            </div>
					<div class="space-4"></div>
                    
                     <div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 所属分类： </label>
					<div class="col-sm-9">
		            <select name="pid"  class="col-sm-3 selector">
		             <?php if(is_array($djfl)): foreach($djfl as $key=>$v): if($v['level'] == 1): if($v['diqu'] == 0): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["lbmc"]); ?></option><?php endif; endif; endforeach; endif; ?>                        
		         </select>
		            </div>
		            </div>
					<div class="space-4"></div>

                	<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 文章名称：  </label>
						<div class="col-sm-10">
							<input type="text" name="biaoti" id="news_title" placeholder="必填：文章标题" class="col-xs-10 col-sm-6">
							</span>
						</div>
					</div>
                    <div class="space-4"></div>

				  <div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 主演：  </label>
						<div class="col-sm-10">
							<input type="text" name="zhuyan" id="news_title" placeholder="必填：文章标题" class="col-xs-10 col-sm-6">
							</span>
						</div>
					</div>
                    <div class="space-4"></div>

                    <div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 上映时间：  </label>
						<div class="col-sm-2">
							<input type="text" name="sysj" id="news_title" placeholder="必填：文章标题" class="col-xs-10 col-sm-6">
							</span>
						</div>
					</div>
                    <div class="space-4"></div>
				 <div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 地区： </label>
					<div class="col-sm-9">
		            <select name="diqu"  class="col-sm-3 selector">
		             <?php if(is_array($djfl)): foreach($djfl as $key=>$v): if($v['diqu'] == 1): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["lbmc"]); ?></option><?php endif; endforeach; endif; ?>                        
		         </select>
		            </div>
		            </div>
					<div class="space-4"></div>
				<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 远程封面上传：  </label>
					<div class="col-sm-10">
						<input type="text" name="ycfm" id="news_title"  class="col-xs-10 col-sm-6">
						</span>
					</div>
				</div>
                    <div class="space-4"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 文章主内容 </label>
						<textarea name="neirong" id="neirong" cols="30" rows="10"></textarea>
					</div>
                    <div class="space-4"></div>
                    
					<div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9">
							<button class="btn btn-info" type="submit" id="tijiao">
								<i class="ace-icon fa fa-check bigger-110"></i>
								保存
							</button>

							&nbsp; &nbsp; &nbsp;
							<button class="btn" type="reset">
								<i class="ace-icon fa fa-undo bigger-110"></i>
								重置
							</button>
						</div>
					</div>
				</form>
        	</div>
        </div>
					<div class="hr hr-24"></div>

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
				<div class="hidden">

					<!-- .sidebar -->
				</div>

			</div><!-- /.col -->
		</div><!-- /.row -->

	</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->

<div class="footer">
<div class="footer-inner">
<!-- #section:basics/footer -->
<div class="footer-content">
<span class="bigger-120">
<span class="blue bolder">521电影网</span>
后台管理系统 © 2016-2017
</span>
</div>

<!-- /section:basics/footer -->
</div>
</div>


<!-- basic scripts -->


<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='../assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
if('ontouchstart' in document.documentElement) document.write("<script src='/Public/assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
</script>
<script src="/dianyingfbb/Public/admin/assets/js/bootstrap.js"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="/dianyingfbb/Public/admin/assets/js/maxlength.js"></script>
<script src="/dianyingfbb/Public/admin/assets/js/ace/ace.js"></script>
<script src="/dianyingfbb/Public/admin/assets/js/ace/ace.sidebar.js"></script>
<script src="/dianyingfbb/Public/admin/assets/js/ace/ace.submenu-hover.js"></script>


<!-- inline scripts related to this page -->
<script type="text/javascript">
jQuery(function($) {
$('#sidebar2').insertBefore('.page-content');

$('.navbar-toggle[data-target="#sidebar2"]').insertAfter('#menu-toggler');


$(document).on('settings.ace.two_menu', function(e, event_name, event_val) {
if(event_name == 'sidebar_fixed') {
if( $('#sidebar').hasClass('sidebar-fixed') ) {
$('#sidebar2').addClass('sidebar-fixed');
$('#navbar').addClass('h-navbar');
}
else {
$('#sidebar2').removeClass('sidebar-fixed')
$('#navbar').removeClass('h-navbar');
}
}
}).triggerHandler('settings.ace.two_menu', ['sidebar_fixed' ,$('#sidebar').hasClass('sidebar-fixed')]);
})
</script>


</div><!-- /.main-container -->



</body></html>
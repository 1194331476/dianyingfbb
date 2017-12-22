<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 数据库连接地址
	'DB_NAME'   => 'dianying', // 数据库名
	'DB_USER'   => 'root', // 数据库用户名
	'DB_PWD'    => 'root', // 数据库密码
	'DB_PORT'   => 3306, // 数据库端口
	'DB_CHARSET'=> 'utf8', // 数据库编码

	//开启伪静态模式
	'URL_HTML_SUFFIX' => 'html',
	'URL_MODEL'        =>2,//URL访问模式
	//开启路由规则
	'URL_ROUTER_ON'=>true,
	//配置路由规则
	'URL_ROUTE_RULES'=>array(
		//分类板块页面
		'feilei/id/:id\d'=>'Leibie/index',
		//资源页面
		'shipin/id/:id\d'=>'xiangqing/index',
		//热门
		'remen'=>'index/paihang',
		//热门
		'zuixin'=>'index/zuixin'
		),
	'TMPL_EXCEPTION_FILE' => './404.html'
);
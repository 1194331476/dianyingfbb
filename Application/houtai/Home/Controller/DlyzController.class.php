<?php
//后台登陆控制器
namespace Home\Controller;
use Think\Controller;
class DlyzController extends Controller {
    public function _initialize(){
    	if(!session('admin')){
    		$this->error('请登录',U('Login/login'),1);
    	}
    	
    }
}
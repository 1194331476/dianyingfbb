<?php
/*
 * 
 * 后台登录页面设置。包含登陆验证和退出。
 * 
*/
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	//后台登陆页面
    public function login(){
    $this->display();
    }
  //验证用户名和密码
  public function yzdl(){
  	$shuju['yonghuming']=$_POST['yonghuming'];
  	$shuju['mima']=md5(crypt($_POST['mima'],'$6$521.gxw'));
        if($yhsj=M('guanliyuan')->where($shuju)->field('id,yonghuming')->find()){
          session('admin',$yhsj);
          $gxsj['id']=$yhsj['id'];
          $gxsj['dlsj']=time();
          $gxsj['dlip']= $_SERVER['REMOTE_ADDR'];
          M('guanliyuan')->save($gxsj);
          $this->success('登录成功',U('index/index'),1);  
        }else{   
          $this->error('登录失败');
       }
    }
  //退出管理员
  public function tuichu(){
    //删除session信息
    session('admin',null);
    $this->redirect('login/login');
  }
}
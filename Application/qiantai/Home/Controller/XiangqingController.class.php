<?php
namespace Home\Controller;
use Think\Controller;
class XiangqingController extends PublicController {
    public function index(){
    	$id=intval($_GET['id']);  
    	//获取当前数据
    	$this->shuju=D('xinwen')->where('id='.$id)->relation(true)->find();
    	//var_dump($shuju);die;
       $this->display();
    }
}
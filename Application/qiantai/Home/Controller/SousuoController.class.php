<?php
namespace Home\Controller;
use Think\Controller;
class SousuoController extends PublicController {

    public function index(){
       //var_dump($_POST);die;
       $gjz=I('guanjianzi');
       $gjz=str_replace(' ','',$gjz);
       // 实例化分页，每页显示数量为15；
       $fyzs=D('xinwen')->order('llcs desc')->where("biaoti like '%{$gjz}%'")->field('neirong,xzlj',true)->relation(true)->count();
       $fenye=new \Think\Page($fyzs,15);
       $limit=$fenye->firstRow.','.$fenye->listRows;
       $this->zxzy=D('xinwen')->order('llcs desc')->where("biaoti like '%{$gjz}%'")->field('neirong,xzlj',true)->relation(true)->limit($limit)->select();
       $this->fenye=$fenye->show();
       $this->gjz=$gjz;
       $this->display();
    }

}
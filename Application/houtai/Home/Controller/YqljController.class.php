<?php
//友情链接
namespace Home\Controller;
use Think\Controller;
class YqljController extends DlyzController {
     //友情链接管理
    public function ljgl(){
     //引入分页类
    import('Think.Page');
    //获取链接总数
    $zongshu=M('yqlj')->count();
    $Page    = new \Think\Page($zongshu,10);
    $this->ljsj=M('yqlj')->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    $this->fenye=$Page->show();// 分页显示输出，传递到模板页面中
    $this->display();
    }
    //添加链接
    public function tjlj(){

       $this->display();
    }

//处理添加的友情链接
    public function cltjlj(){
    $shuju['ljmc']=I('ljmc');
    $shuju['url']=I('url');
    $shuju['cjsj']=time();
    if(M('yqlj')->add($shuju)){
         $this->success('添加链接成功',U('yqlj/ljgl'),1);
    }else{
        $this->error('添加链接失败');
    }
 }
 //修改链接
 public function xglj(){
     $id=intval(I('id'));
     //获取当前链接数据
        $this->dqsj=M('yqlj')->where('id='.$id)->find();
    $this->display();
 }
 //处理修改链接数据
 public function clxglj(){
    $shuju['id']=I('dqid');
    $shuju['ljmc']=I('ljmc');
    $shuju['url']=I('url');
    $shuju['cjsj']=time();
    if(M('yqlj')->save($shuju)){
         $this->success('修改链接成功',U('yqlj/ljgl'),1);
    }else{
        $this->error('修改链接失败');
    }
 }
  // 删除链接
    public function sclj(){
         $id=intval(I('id'));
         if(M('yqlj')->where('id='.$id)->delete()){
             $this->success('删除成功',U('yqlj/ljgl'),1);
         }else{
            $this->error('删除失败');
         }
    }

}
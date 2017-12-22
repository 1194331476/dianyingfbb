<?php
//后台管理员控制器
namespace Home\Controller;
use Think\Controller;
class GuanliyuanController extends DlyzController {
    //管理员列表
  public function glylb(){
    //读取管理数据
    $this->glysj=M('guanliyuan')->field('mima',true)->select();
    $this->display();
  }
  //添加管理员
  public function tjgly(){
    $this->display();
  }
  //处理添加管理员数据
  public function cltj(){
    //判断两次输入的密码是否一致
    if(I('mima')==I('qrmm')){
        //判断管理员是否存在
        $tj['yonghuming']=I('yonghuming');
        if(M('guanliyuan')->where($tj)->find()){
            $this->error('管理员已存在，请重新输入');
        }else{
            $shuju['yonghuming']=I('yonghuming');
            $shuju['mima']=md5(crypt(I('mima'),'$6$521.gxw'));
            M('guanliyuan')->add($shuju);
            $this->redirect('guanliyuan/glylb');
        }
    }else{
        $this->error('两次输入的密码不一致');
    }
  }
  //修改管理员
  public function xggly(){
    $id=$_GET['id'];
    $this->xgsj=M('guanliyuan')->where('id='.$id)->field('mima',true)->find();
    $this->display();
  }
  //处理修改管理员数据
  public function clxg(){
     //判断两次输入的密码是否一致
    if(I('mima')==I('qrmm')){
      $shuju['yonghuming']=I('yonghuming');
      $shuju['mima']=md5(crypt(I('mima'),'$6$521.gxw'));
      $shuju['id']=I('id');
      M('guanliyuan')->save($shuju);
      $this->redirect('guanliyuan/glylb');
  }else{
    $this->error('两次输入的密码不一致');
  }
}
//删除管理员
  public function scgly(){
    $id=I(id);
    if (M('guanliyuan')->where('id='.$id)->delete()) {
      $this->success('删除管理员成功',U('glylb'),1);
    }else{
      $this->error('删除管理员视频');
    }
    
  }
}
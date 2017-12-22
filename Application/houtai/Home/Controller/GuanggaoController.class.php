<?php
//广告控制器
namespace Home\Controller;
use Think\Controller;
class guanggaoController extends DlyzController {
     //友情广告管理
    public function guanggao(){
     //引入分页类
    import('Think.Page');
    //获取广告总数
    $zongshu=M('guanggao')->count();
    $Page    = new \Think\Page($zongshu,10);
    $this->ggsj=M('guanggao')->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    $this->fenye=$Page->show();// 分页显示输出，传递到模板页面中
    $this->display();
    }
 //修改广告
 public function xggg(){
     $id=intval(I('id'));
     //获取当前广告数据
        $this->dqsj=M('guanggao')->where('id='.$id)->find();
    $this->display();
 }
 //处理修改广告数据
 public function clxggg(){
    $shuju['id']=I('dqid');
    $shuju['ggmc']=I('ggmc');
    $shuju['url']=I('url');
    $shuju['cjsj']=time();
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  =     './Public/'; // 设置附件上传根目录
    $upload->savePath  =     '/shangchuan/tupian/guanggao/'; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->upload();
    if(!$info) {// 上传错误提示错误信息
        
    }else{// 上传成功
        $shuju['ljtb']=$info['tpsc']['savepath'].$info['tpsc']["savename"];
    }
    if(M('guanggao')->save($shuju)){
         $this->success('修改广告成功',U('guanggao/guanggao'),1);
    }else{
        $this->error('修改广告失败');
    }
 }
 

}
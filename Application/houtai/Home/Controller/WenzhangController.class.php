<?php
//文章栏目和文章读、修改和删除操作
namespace Home\Controller;
use Think\Controller;
class WenzhangController extends DlyzController {
     //文章列表
    public function wenzlb(){
         //引入分页类      
        import('Think.Page');
        $fyzs=D('xinwen')->relation(true)->count();
         // 实例化分页，每页显示数量为15；
        $fenye=new \Think\Page($fyzs,15);
        $limit=$fenye->firstRow.','.$fenye->listRows;
        $this->xwlb=D('xinwen')->order('cjsj DESC')->limit($limit)->relation(true)->select(); 
        //分页输出
        $this->fenye=$fenye->show(); 
        $this->display();
    }
    //添加文章
    public function tjxw(){
        $this->djfl=M('leibie')->select();
        $this->display();
    }
//处理文章
    public function clxw(){  
        $shuju['djid']=I('djid');
        $shuju['pid']=I('pid');
        $shuju['biaoti']=I('biaoti');
        $shuju['zhuyan']=I('zhuyan');
        $shuju['sysj']=I('sysj');
        $shuju['diqu']=I('diqu');
        $shuju['llcs']=rand(1000,10000);
        $shuju['neirong']=I('neirong');
        $shuju['cjsj']=time();
        $shuju['wzfm']=I('ycfm');
        $gjz=I('biaoti');
        $ycdz="http://www.521dyw.com/houtai.php/caiji/khxw";
        $hh=curl_init();
        curl_setopt($hh, CURLOPT_URL, $ycdz);
        curl_setopt($hh,CURLOPT_POST,1);
        curl_setopt($hh,CURLOPT_POSTFIELDS,$shuju);
        curl_setopt($hh,CURLOPT_RETURNTRANSFER,1);
        curl_exec($hh);
        curl_close($hh);
      if(!$cz=M('xinwen')->where("biaoti like '%{$gjz}%'")->find()){
        if($id=M('xinwen')->add($shuju)){
         $this->success('添加新闻成功',U('wenzhang/zfl',array(id=>$id)),1);
        }else{
            $this->error('添加新闻失败');
        }
    }else{
        $this->error('新闻已存在');
    }
}
    //修改新闻
    public function xgxw(){
    	$id=intval(I('id'));
        $this->xgsj=D('xinwen')->where('id='.$id)->relation(true)->find();
        //var_dump($xgsj);die;
        $this->flsj=M('leibie')->select();
        $this->display();
    }
    //处理修改的新闻
        public function clxgxw(){
         $shuju['id']=I('dqid');   
         $shuju['djid']=I('djid');
         $shuju['pid']=I('pid');
         $shuju['biaoti']=I('biaoti');
         $shuju['zhuyan']=I('zhuyan');
         $shuju['sysj']=I('sysj');
         $shuju['diqu']=I('diqu');
         $shuju['neirong']=I('neirong');
         $shuju['cjsj']=time();
         $upload = new \Think\Upload();// 实例化上传类
         $upload->maxSize   =     3145728 ;// 设置附件上传大小
         $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
         $upload->rootPath='./Public/';
         $upload->savePath  ='/shangchuan/tupian/wenzhang/'; // 设置附件上传（子）目录
         // 上传文件 
         $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
        }else{// 上传成功
            $shuju['wzfm']=$info['fengmian']['savepath'].$info['fengmian']["savename"];
        }
        if(M('xinwen')->save($shuju)){
         $this->success('修改新闻成功',U('wenzhang/wenzlb'),1);
    }else{
        $this->error('修改新闻失败');
    }
    }
    //删除新闻
    public function scxw(){
    	$id=intval(I('id'));
         if(M('xinwen')->where('id='.$id)->delete()){
             $this->success('删除成功',U('wenzhang/wenzlb'),1);
         }else{
            $this->error('删除失败');
         }
    }

//**********************************************下载链接*******************************************************
    //下载链接列表
    public function zfl(){
        $id=intval(I('id'));
        $this->ljxx=M('xwzb')->where('wzid='.$id)->select();
        $this->id=$id;
        //var_dump($ljxx);die;
        $this->display();
    }
   //添加子分类
    public function tjzfl(){
        $id=intval(I('id'));
        $this->xwbt=M('xinwen')->where('id='.$id)->field('id,biaoti')->find();
        $this->xwid=$id;
        //var_dump($ljxx);die;
        $this->display();
    }
    //处理添加子分类
    public function clzfl(){
       $shuju['zymc']=I('zymc');
       $shuju['xzbt']=I('xzbt');
       $shuju['xzlj']=I('xzlj');
       $shuju['zxbf']=I('zxbf');
       $shuju['wzid']=I('xwid');
       $xwid=I('xwid');
       $ycdz="http://www.521dyw.com/houtai.php/caiji/xzlj";
        $hh=curl_init();
        curl_setopt($hh, CURLOPT_URL, $ycdz);
        curl_setopt($hh,CURLOPT_POST,1);
        curl_setopt($hh,CURLOPT_POSTFIELDS,$shuju);
        curl_setopt($hh,CURLOPT_RETURNTRANSFER,1);
        curl_exec($hh);
        curl_close($hh);
       if(M('xwzb')->add($shuju)){
          $this->success('添加成功',U('wenzhang/zfl',array(id=>$xwid)),1);
       }else{
          $this->error('添加失败');
       }
    }
    //修改子分类
    public function xgzfl(){
        $id=intval(I('id'));
        $xgsj=M('xwzb')->where('id='.$id)->find();
        $id=$xgsj['wzid'];
        $this->xwbt=M('xinwen')->where('id='.$id)->field('id,biaoti')->find();
        $this->xgsj=$xgsj;
        $this->display();
    }
    //处理修改的下载链接
    public function clxgzfl(){
        //var_dump($_POST);die;
        $shuju['id']=I('dqid');
        $shuju['xzbt']=I('xzbt');
        $shuju['xzlj']=I('xzlj');
        $shuju['zxbf']=I('zxbf');
        $shuju['wzid']=I('wzid');
        $xwid=I('wzid');
        if(M('xwzb')->save($shuju)){
          $this->success('修改成功',U('wenzhang/zfl',array(id=>$xwid)),1);
       }else{
          $this->error('修改失败');
       }
    }    
     //删除新闻
    public function sczfl(){
        $id=intval(I('id'));
        $wzid=M('xwzb')->where('id='.$id)->field('wzid')->find();
        $wzid=$wzid['wzid'];
         if(M('xwzb')->where('id='.$id)->delete()){
             $this->success('删除成功',U('wenzhang/zfl',array(id=>$wzid)),1);
         }else{
            $this->error('删除失败');
         }
    }
}
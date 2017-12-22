<?php
//网址类别首页控制器
namespace Home\Controller;
use Think\Controller;
class WzlbController extends DlyzController {
    //类别列表
    public function wzlb(){
        $shuju=M('leibie')->select();
        //递归循环类别数据
        $this->lbsj=hqsj($shuju);
	 $this->display();
    }
    //添加类别
    public function tjlb(){
     $this->display();
    }
     //处理添加类别
    public function cltj(){
        if(I('level')){
            $shuju['level']=1;
        }else{
             $shuju['level']=0;
        } 
         if(I('diqu')){
            $shuju['diqu']=1;
        }else{
             $shuju['diqu']=0;
        } 
            $cxmc=I('lbmc');
            //判断添加的类别是否存在，
         if($id=M('leibie')->where("lbmc like '{$cxmc}'")->field('id')->find()){
            $this->redirect('wzlb/wzlb');
         }else{
            $shuju['lbmc']=I('lbmc');
            $shuju['cjsj']=time();
            if(M('leibie')->add($shuju)){
             $this->redirect('wzlb/wzlb');
            }
         }

    }
    //修改类别
    public function xglb(){
        $id=intval(I('id'));
        $this->dqsj=M('leibie')->where('id='.$id)->find();
        $this->display();
    }
    public function clxg(){
       // var_dump($_POST);die;
       $shuju['id']=I('dqid');
       $shuju['lbmc']=I('lbmc');
        if(I('level')){
            $shuju['level']=1;
        }else{
             $shuju['level']=0;
        } 
         if(I('diqu')){
            $shuju['diqu']=1;
        }else{
             $shuju['diqu']=0;
        } 

       //判断修改的类别名称是否存在。
             if(M('leibie')->save($shuju)){
              $this->success('修改成功',U('wzlb/wzlb'),1);
             }else{
                $this->error('修改失败');
             }
      
     }
    // 删除类别
    public function sclb(){
         $id=intval(I('id'));
         if(M('leibie')->where('id='.$id)->delete()){
             $this->success('删除成功',U('wzlb/wzlb'),1);
         }else{
            $this->error('删除失败');
         }
    }

}
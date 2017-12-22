<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends PublicController {

    public function index(){
      $xinwen=M('xinwen');
      $dxw=D('xinwen');
      $this->shijian=time();
       //热门搜索
       $this->rmss=$xinwen->where('sscs>0')->field('id,biaoti,cjsj')->order('id desc')->limit(11)->select();
        //热门资源
       $this->rmzy=$xinwen->field('id,biaoti,cjsj')->order('llcs desc')->limit(11)->select();
      //最近更新资源
       $this->zjgx=$xinwen->field('id,biaoti,cjsj')->order('cjsj desc')->limit(11)->select();
       //最新资源
       $this->zxzy=$dxw->where('djid!=17')->order('cjsj desc')->field('neirong,xzlj,laiyuan,',true)->relation(true)->limit(12)->select();
        //福利
       $this->fuli=$dxw->where('pid=12 and djid!=17')->field('neirong,xzlj,laiyuan,',true)->order('id desc')->relation(true)->limit(12)->select();
       //周榜
        $zb=time()-86400*7;
       $this->zhoubang=$dxw->where(array('cjsj'=>array('egt',$zb),'djid'=>array('neq','17')))->order('llcs desc')->field('neirong,xzlj,laiyuan,',true)->relation(true)->limit(12)->select();
       //月榜
        $yb=time()-86400*30;
       $this->yuebang=$dxw->where(array('cjsj'=>array('egt',$yb),'djid'=>array('neq','17')))->order('llcs desc')->field('neirong,xzlj,laiyuan,',true)->relation(true)->limit(12)->select();
        //电影资源
       $this->dyzy=$dxw->where('djid=1')->order('llcs desc')->field('neirong,xzlj,laiyuan,',true)->relation(true)->limit(8)->select();
       //电视资源
       $this->dszy=$dxw->where('djid=2')->order('llcs desc')->field('neirong,xzlj,laiyuan,',true)->relation(true)->limit(8)->select();
       //综艺资源
       $this->zyzy=$dxw->where('djid=4')->order('llcs desc')->field('neirong,xzlj,laiyuan,',true)->relation(true)->limit(8)->select();
       //动画资源
       $this->dhzy=$dxw->where('djid=3')->order('llcs desc')->field('neirong,xzlj,laiyuan,',true)->relation(true)->limit(8)->select();
       $this->display();
    }

     public function paihang(){
      //最新资源
       // 实例化分页，每页显示数量为15；
       $fyzs=D('xinwen')->order('llcs desc')->field('neirong,xzlj',true)->relation(true)->count();
       $fenye=new \Think\Page($fyzs,15);
       $limit=$fenye->firstRow.','.$fenye->listRows;
       $this->zxzy=D('xinwen')->order('llcs desc')->field('neirong,xzlj',true)->relation(true)->limit($limit)->select();
      $this->fenye=$fenye->show();
       $this->display();
    }

     public function zuixin(){
      //最新资源
       $fyzs=D('xinwen')->order('cjsj desc')->field('neirong,xzlj',true)->relation(true)->count();
       $fenye=new \Think\Page($fyzs,15);
       $limit=$fenye->firstRow.','.$fenye->listRows;
       $this->zxzy=D('xinwen')->order('cjsj desc')->field('neirong,xzlj',true)->relation(true)->limit($limit)->select();
       $this->fenye=$fenye->show();
       $this->display();
    }
     //点击新闻链接使该链接的浏览次数加1
    public function sqlj(){
        if(!IS_AJAX){
        $this->redirect('Empty/index');
     }
       $id=$_POST['id'];
      //获取该ID的llcs
      M('yqlj')->where('id='.$id)->setInc('llcs',1);
    }
}
<?php
namespace Home\Controller;
use Think\Controller;
class LeibieController extends PublicController {
    public function index(){
      $id=intval($_GET['id']); 
      $djid=intval($_GET['djid']); 
      if($dqlb=M('leibie')->where('id='.$id)->find()){
      // 实例化分页，每页显示数量为15；
         $fenye=new \Think\Page($fyzs,9);
         $limit=$fenye->firstRow.','.$fenye->listRows;
         $dxw=D('xinwen');
      //判断当前ID是否为顶级ID；
      if($dqlb['level']==1){
            if($djid){
               $this->id=$djid;
               $this->dqid=$id;
                $fyzs=$dxw->where(array('diqu'=>array('eq',$id),'djid'=>array('eq',$djid)))->field('neirong,xzlj',true)->order('cjsj desc')->relation('diqu')->count();
               // 实例化分页，每页显示数量为15；
               $fenye=new \Think\Page($fyzs,15);
               $limit=$fenye->firstRow.','.$fenye->listRows;
               $sjzy=$dxw->where(array('diqu'=>array('eq',$id),'djid'=>array('eq',$djid)))->field('neirong,xzlj',true)->order('cjsj desc')->limit($limit)->relation('diqu')->select();
            }else{
               if($dxw->where('pid='.$id)->field('neirong,xzlj',true)->order('cjsj desc')->relation('diqu')->select()){
                 //分页总数
               $fyzs=$dxw->where(array('pid'=>array('eq',$id),'djid'=>array('neq','17')))->field('neirong,xzlj',true)->order('cjsj desc')->relation('diqu')->count();
              // 实例化分页，每页显示数量为15；
               $fenye=new \Think\Page($fyzs,15);
               $limit=$fenye->firstRow.','.$fenye->listRows;
               $sjzy=$dxw->where(array('pid'=>array('eq',$id),'djid'=>array('neq','17')))->field('neirong,xzlj',true)->order('cjsj desc')->limit($limit)->relation('diqu')->select();
               }else{
                $fyzs=$dxw->where('diqu='.$id)->field('neirong,xzlj',true)->order('cjsj desc')->relation('diqu')->count();
                $fenye=new \Think\Page($fyzs,15);
                $limit=$fenye->firstRow.','.$fenye->listRows;
                $sjzy=$dxw->where('diqu='.$id)->field('neirong,xzlj',true)->order('cjsj desc')->limit($limit)->relation('diqu')->select();   
               }
               
            }

      }else{
            $this->id=$id;
            //分页总数
            $fyzs=$dxw->where('djid='.$id)->field('neirong,xzlj',true)->order('cjsj desc')->relation(true)->count();
            // 实例化分页，每页显示数量为15；
            $fenye=new \Think\Page($fyzs,15);
            $limit=$fenye->firstRow.','.$fenye->listRows;
            $sjzy=$dxw->where('djid='.$id)->field('neirong,xzlj',true)->order('cjsj desc')->relation('diqu')->limit($limit)->select();
      }
      $this->fenye=$fenye->show(); 
      $this->fyzs=$fyzs;
      //var_dump($sjzy);die;
      $this->sjzy=$sjzy;
      if($dqlb['id']=='17'){
        $this->yqlj=M('yqlj')->where('fuli=1')->select();
      }
      $this->dqlb=$dqlb;
      $this->display();
    }else{
          $this->redirect('Empty/index');
        }
    } 
}
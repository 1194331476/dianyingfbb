<?php
//后台首页控制器
namespace Home\Controller;
use Think\Controller;
class IndexController extends DlyzController {
    public function index(){
    	$xinwen=M('xinwen');
    	//今日发布文章数量
    	$this->jrxw=$xinwen->where('cjsj>'.(time()-3600*24))->count();
    	//新闻总数
    	$this->xwzs=$xinwen->count();
    	//本月热门新闻
    	$this->byxw=$xinwen->field('id,biaoti,llcs')->where('cjsj>'.(time()-3600*24*30))->limit(8)->select();
		//运行环境
		$this->yxhj=$_SERVER["SERVER_SOFTWARE"];
		//文件最大上传大小
		$this->zdsc=ini_get('upload_max_filesize');
		//TP版本
		$this->tpbb=THINK_VERSION;
		//
		$this->ip=GetHostByName($_SERVER['SERVER_NAME']);
        $this->display();
    }
    //站点设置
    public function zdsz(){
        $this->zdsj=M('zdsz')->find();
        // 读取站点数据
    	$this->display();
    }
    //站点数据提交
    public function tjzd(){

        //数据重组
        $shuju['zdmc']=I('zdmc');
        $shuju['zdwz']=I('zdwz');
        $shuju['beian']=I('beian');
        $shuju['youxiang']=I('youxiang');
        $shuju['biaoti']=I('biaoti');
        $shuju['guanjianzi']=I('guanjianzi');
        $shuju['miaoshu']=I('miaoshu');
        //判断数据库中是否存在数据
        if(I('id')){
            $shuju['id']=I('id');
            M('zdsz')->save($shuju);
        }else{
            M('zdsz')->add($shuju);
        }
         $this->success('写入数据成功',U('Index/zdsz'),1);
    }

    //-----------------------------------------导航数据-------------------------------------
    // 导航列表数据
        public function daohang(){
         //引入分页类
            import('Think.Page');
            //获取导航总数
            $zongshu=M('daohang')->count();
            $Page    = new \Think\Page($zongshu,10);
            $this->dhsj=M('daohang')->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->fenye=$Page->show();// 分页显示输出，传递到模板页面中
            $this->display();
    }
    //添加导航
    public function tjdh(){

       $this->display();
    }
    //处理添加的友情导航
    public function cltjdh(){
        $shuju['dhmc']=I('dhmc');
        $shuju['url']=I('url');
        $shuju['cjsj']=time();
        if(M('daohang')->add($shuju)){
             $this->success('添加导航成功',U('index/daohang'),1);
        }else{
            $this->error('添加导航失败');
        }
    }
    //修改导航
 public function xgdh(){
     $id=intval(I('id'));
     //获取当前导航数据
        $this->dqsj=M('daohang')->where('id='.$id)->find();
    $this->display();
 }
 //处理修改导航数据
 public function clxgdh(){
    $shuju['id']=I('dqid');
    $shuju['dhmc']=I('dhmc');
    $shuju['url']=I('url');
    $shuju['cjsj']=time();
    if(M('daohang')->save($shuju)){
         $this->success('修改导航成功',U('index/daohang'),1);
    }else{
        $this->error('修改导航失败');
    }
 }
  // 删除导航
    public function scdh(){
         $id=intval(I('id'));
         if(M('daohang')->where('id='.$id)->delete()){
             $this->success('删除成功',U('index/daohang'),1);
         }else{
            $this->error('删除失败');
         }
    }
}
<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
//自动运行
	Public function _initialize () { 
    	$this->wzxx=M('zdsz')->select();
    	$this->feilei=M('leibie')->limit(18)->order('paixu')->select();
    	$this->yqlj=M('yqlj')->where('fuli=0')->select();
    }
   
}
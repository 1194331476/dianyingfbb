<?php
/*
*
*
*/
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller {
    function _empty(){
        header("HTTP/1.1 404 Not Found");
        $this -> display('404');        //会自动调用配置里的 404 页面设置
    }

     function index(){
        header("HTTP/1.1 404 Not Found");
        $this -> display('404');        //会自动调用配置里的 404 页面设置
      }
       
}
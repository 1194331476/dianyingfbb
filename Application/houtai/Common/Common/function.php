<?php 
//获取分类所有数据信息
function hqsj($lbsj,$pid=0,$hg="—",$level=0){
	$arr=array();
	foreach ($lbsj as $key => $v) {
		if ($v['pid']==$pid) {
			$v['hg']= str_repeat($hg,$level);
			$arr[]=$v;
			$arr= array_merge($arr,hqsj($lbsj,$v['id'],$hg,$level+1));  
		}
	}
	return $arr;
}
 ?>
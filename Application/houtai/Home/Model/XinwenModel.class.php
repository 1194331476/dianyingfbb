<?php 
namespace Home\Model;
use Think\Model\RelationModel;
class XinwenModel extends RelationModel{
    protected $_link = array(
        //网址和类别直接的关联
         'leibie'  =>  array(
             'mapping_type'  => self::BELONGS_TO,
             'class_name'    => 'leibie',
             'foreign_key'   => 'pid',
             'mapping_fields'=>'id,lbmc'
         ),
          'djid'  =>  array(
             'mapping_type'  => self::BELONGS_TO,
             'class_name'    => 'leibie',
             'foreign_key'   => 'djid',
             'mapping_fields'=>'id,lbmc'
         ),
         'diqu'  =>  array(
             'mapping_type'  => self::BELONGS_TO,
             'class_name'    => 'leibie',
             'foreign_key'   => 'diqu',
             'mapping_fields'=>'id,lbmc'
         )
    );
}

 ?>

<?php
namespace Ads\Config\Controller\Data;

class Data
{

    public function __construct(){
        $this->config = server('db')->getmap('select name,`value` from system_config');
    }

    public function doConfig($name){
        return $this->config[$name];
    }

    //通过config函数进行调用
    public function doGetConfig($name){

        $name = saddslashes($name);
        $row = server('db')->getrow("select * from system_config where name = '$name'");
/*
0:数字
1:字符
2:文本
3:数组
4:枚举
*/
        switch($row['type']){
            case '0':
                return intval($row['value']);
                break;
            case '1':
            case '2':
                return $row['value'];
                break;
            case '3':
                //组 返回map
                $rc = explode("\n",$row['value']);
                $_g = [];
                foreach($rc as $key=>$value){
                    if(!empty($value)){
                        $_ar = explode(":",trim($value,"\r"));
                        $_g[$_ar[0]] = $_ar[1];
                    }
                }
                return $_g;
                break;
            case '4':
                //枚举 用于配置本身
                return $row['value'];
                break;
            default:
                //
                break;
        }
        return null;
    }


}

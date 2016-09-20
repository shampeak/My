<?php

namespace Ads\Msource\Traits;

/**
 * Created by PhpStorm.
 * User: shampeak
 * Date: 2016/7/17
 * Time: 3:39
 * ajax返回部件
 */

trait Strtomap
{

    /**
     * @param $key
     */
    public function strtomap($str = '')
    {
        $res = [];
        $ar = $this->_getArr($str);
        foreach($ar as $key=>$s){
            $_ar = explode(':',$s);
            if(!empty($_ar[0]))$res[$_ar[0]] = $_ar[1];
        }
        return $res;
    }

    public function _getArr($str,$chr="\n")
    {
        $arr = explode($chr,$str);
        foreach($arr as $key=>$value){
            $value = trim($value);
            if(empty($value)){
                unset($arr[$key]);
            }else{
                $arr[$key] = $value;
            }
        }
        return $arr;
    }



}

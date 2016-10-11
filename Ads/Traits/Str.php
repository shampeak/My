<?php

namespace Ads\Traits;

/**
 * Created by PhpStorm.
 * User: shampeak
 * Date: 2016/7/17
 * Time: 3:39
 * ajax返回部件
 */

trait Str
{

    /**
     * 针对字符型存储的数据,进行字符和数组转换函数
     * 切分字符默认为 "\n"
     *
     */
    private function find($find,$string)
    {
        if(strpos($string,$find)===false){
            return false;
        }else{
            return true;
        }
    }

    private function cut($strb,$stre,$content){
        $b= strpos($content,$strb);
        $c= strpos($content,$stre);
        $str = substr($content,$b+strlen($strb),$c-$b-strlen($strb));
        return $str;
    }

    private function kandiao($strb,$stre,$content){
        $b= strpos($content,$strb);
        $c= strpos($content,$stre);
        $str1 = substr($content,0,$b);
        $str2 = substr($content,$c+strlen($stre),strlen($stre));
        $str = $str1.$str2;
        return $str;
    }



}

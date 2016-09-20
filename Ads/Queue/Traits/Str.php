<?php

namespace Ads\Queue\Traits;

/**
 * Created by PhpStorm.
 * User: shampeak
 * Date: 2016/7/17
 * Time: 3:39
 * ajax返回部件
 */

trait Str
{

    private function cut($strb,$stre,$content){
        $b= strpos($content,$strb);
        $content = substr($content,$b+strlen($strb),strlen($content));
        $c= strpos($content,$stre);
        $content = substr($content,0,$c);
        return $content;
    }

//    private function kandiao($strb,$stre,$content){
//        $b= strpos($content,$strb);
//        $c= strpos($content,$stre);
//        $str1 = substr($content,0,$b);
//        $str2 = substr($content,$c+strlen($stre),strlen($stre));
//        $str = $str1.$str2;
//        return $str;
//    }

    private function find($find,$string)
    {
        if(strpos($string,$find)===false){
            return false;
        }else{
            return true;
        }
    }


}

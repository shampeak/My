<?php

namespace Ads\Traits;

/**
 * Created by PhpStorm.
 * User: shampeak
 * Date: 2016/7/17
 * Time: 3:39
 * ajax返回部件
 */

trait File
{

    public function getDir($path = '')
    {
        $list = [];
        if(is_dir($path)){
            $dirall = scandir($path);
            foreach($dirall as $v) {
                if ($v != '.' && $v != '..') {
                    if(is_dir($path.$v)){
                        $list[] = $v;          //keymap类型的
                    }
                }
            }
        }
        return $list;
    }

    public function getFilelist($path = '')
    {
        $list = [];
        if(is_dir($path)){
            $dirall = scandir($path);
            foreach($dirall as $v) {
                if ($v != '.' && $v != '..') {
                    if(is_file($path.$v)){
                        $list[] = $v;          //keymap类型的
                    }
                }
            }
        }
        return $list;
    }



}





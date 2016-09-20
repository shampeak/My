<?php

namespace Ads\Msource\Traits;

/**
 * Created by PhpStorm.
 * User: shampeak
 * Date: 2016/7/17
 * Time: 3:39
 * ajax返回部件
 */

trait Caiji
{

    public function Get_all_url($code){
        preg_match_all('/<a\s+href=["|\']?([^>"\' ]+)["|\']?\s*[^>]*>([^>]+)<\/a>/i',$code,$arr);
        return array('name'=>$arr[2],'url'=>$arr[1]);
    }

    public function getname($code){
        $ar = $this->Get_all_url($code);
        return $ar['name'];
    }
    public function geturl($code){
        $ar = $this->Get_all_url($code);
        return $ar['url'];
    }


    public function Htmlget($url = ''){
        $hash = md5($url);
        $path = substr($hash,0,2);
        $html = application('data')->path($path)->get($hash);
        if(empty($html)){
            $html = file_get_contents($url);
            //===========================================
            //编码转换
            $encode = mb_detect_encoding($html, array('GB2312','GBK','UTF-8'));
            if($encode=="GB2312")
            {
                $html = iconv("GBK","UTF-8",$html);
            }
            else if($encode=="GBK")
            {
                $html = iconv("GBK","UTF-8",$html);
            }
            else if($encode=="EUC-CN")
            {
                $html = iconv("GBK","UTF-8",$html);
            }
            else if($encode=="UTF-8")
            {
            }
            else//CP936
            {
                $html = iconv("GB2312//IGNORE","UTF-8",$html);
            }
            //===========================================
            application('data')->path($path)->set($hash,$html);
        }
        return $html;
    }

    private function get_url_content($url) {
        if(function_exists(curl_init)) {
            $ch = curl_init();
            $timeout = 5;
            curl_setopt ($ch, CURLOPT_URL, $url);
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            curl_setopt ($ch, CURLOPT_TIMEOUT, $timeout);
            $file_contents = curl_exec($ch);
            curl_close($ch);
        } else {
            $file_contents = file_get_contents($url);
        }
        return $file_contents;
    }



}

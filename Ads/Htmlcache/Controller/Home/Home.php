<?php
namespace Ads\Htmlcache\Controller\Home;

class Home extends BaseController
{
    public function __construct(){
        parent::__construct();
    }
    public function doIndex(){
    }



    public function doHtmlget($url = ''){
        $hash = md5($url);
        $path = substr($hash,0,2);
        $html = application('data')->path($path)->get($hash);
        if(empty($html)){
            $html = @file_get_contents($url);
            //echo $html;
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
                else if($encode=="UTF-8")
                {
                }
                else if($encode=="EUC-CN")
                {
                    $html = iconv("GBK","UTF-8",$html);
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

}

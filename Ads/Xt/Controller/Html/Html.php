<?php
namespace Ads\Xt\Controller\Html;

class Html {

    use \Ads\Traits\Data;
    use \Ads\Traits\Arr;
    use \Ads\Traits\File;
    use \Ads\Traits\PostRequest;

    public function __construct(){
    }


    public function doIndex(){




        return  server('Smarty')->ads('xt/html/index')->fetch('',[
            'list'  =>  $list
        ]);

    }

    public function doAddwd(){
        $path = config('DOCUMENT_ROOT_PATH');

        $dir = $this->getDir($path);
        $list = [];
        foreach($dir as $root){
            $dir2 = $this->getDir($path.$root.'/');
            foreach($dir2 as $key => $_dir){
                $documentroot = $path.$root.'/'.$_dir.'/';
                $filelist = $this->getFilelist($documentroot);
                foreach($filelist as $k => $v) {
                    $list[] = $root.'/'.$_dir.'/'.$v;
                }
            }
        }
//        D($list);       //获得所有文件列表


        foreach($list as $file){
            $arr = $this->getArr($file,'/');
            $filename = array_pop($arr);
            $filepath = $arr;
            D($filepath);
        }


        return '执行完成';
    }






}

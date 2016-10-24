<?php
namespace Ads\Document\Controller\Html;

class Html {

    use \Ads\Traits\Data;
    use \Ads\Traits\Arr;
    use \Ads\Traits\Str;
    use \Ads\Traits\PostRequest;

    public function __construct(){
    }


    public function doIndex(){

    }

    public function doListshow()
    {
        $dir = config('DOCUMENT_ROOT_PATH');
        $path = req('Get')['path'];
        $path = urldecode($path);
        $dir = $dir.$path.'/';

        //显示所有的文件
        //扫描下面的文件夹
        $list = [];
        if(is_dir($dir)){
            $dirall = scandir($dir);
            foreach($dirall as $v) {
                if ($v != '.' && $v != '..') {
                    $_v = $this->toutf8($v);
                    if(is_file($dir.$v)){
                        if($this->find('-',$_v)){
                            $ar = explode('-',$_v);
                            $_v = $ar[1];
                        }
                        $list[$v] = $_v;          //keymap类型的
                    }
                }
            }
        }

        return  server('Smarty')->ads('document/html/listshow')->fetch('',[
            'list' => $list,

        ]);
    }

    public function doList(){
        $dir = config('DOCUMENT_ROOT_PATH');
        $list = $this->booklist($dir);
        foreach($list as $key=>$value){
            $res[$key] = $this->doBookclm($dir,$key);
        }
        return  server('Smarty')->ads('document/html/list')->fetch('',[
            'list'  =>  $list,
            'res'   => $res
        ]);

    }

    public function doAddPost()
    {
        $dir = config('DOCUMENT_ROOT_PATH');
        //判断是目录名还是书名
        $list = $this->booklist($dir);
        foreach($list as $key=>$value){
            $res[$key] = $this->doBookclm($dir,$key);
        }




        $chr = req('Post')['cname'];
        $chr = urldecode($chr);
        $title = trim(urldecode(req('Post')['title']));

        if($list[$chr]){        //根据判断是book下面的class
            $root = $dir.$chr;
            $path = $root.'/'. iconv("utf-8","gb2312",$title).'/';
            mkdir($path);
            R('/man/?document/html/list');
        }

        $root = $dir.$chr;
        $file = $root.'/'. iconv("utf-8","gb2312",$title).'.md';
        $content = "## do something!!";
        file_put_contents($file,$content);
        R('/man/?document/html/list');

    }

    public function doAdd(){
        $dir = config('DOCUMENT_ROOT_PATH');
        $list = $this->booklist($dir);
        foreach($list as $key=>$value){
            $res[$key] = $this->doBookclm($dir,$key);
        }

        return  server('Smarty')->ads('document/html/add')->fetch('',[
            'list'  =>  $list,
            'res'   => $res
        ]);

    }

    public function doDocumentration(){
        return 123;
    }


    /**
     * ===========================================================
     */


    public function booklist($dir)
    {
        //扫描下面的文件夹
        $list = [];
        if(is_dir($dir)){
            $dirall = scandir($dir);
            foreach($dirall as $v) {
                if ($v != '.' && $v != '..') {
                    $_v = $this->toutf8($v);
                    if(is_dir($dir.$v)){
                        if($this->find('-',$_v)){
                            $ar = explode('-',$_v);
                            $_v = $ar[1];
                        }
                        $list[$v] = $_v;          //keymap类型的
                    }
                }
            }
        }
        return $list;
    }

    public function doBookclm($dir,$book = '')
    {
        $list = [];
        $bookpath = $dir.$book.'/';        //OK,获取到book路径
        if(is_dir($bookpath)){
            //扫描下面的文件夹
            $list = [];
            if(is_dir($bookpath)){
                $dirall = scandir($bookpath);
                foreach($dirall as $v) {
                    if ($v != '.' && $v != '..') {
                        $_v = $this->toutf8($v);
                        if(is_dir($bookpath.$v)){
                            //$list[] = $v;
                            if($this->find('-',$_v)){
                                $ar = explode('-',$_v);
                                $_v = $ar[1];
                            }
                            $list[$v] = $_v;          //keymap类型的
                        }
                    }
                }
            }
        }
        return $list;
    }




}

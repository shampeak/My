<?php
namespace Ads\Document\Controller\Page;

class Page {

    use \Ads\Traits\Data;
    use \Ads\Traits\Arr;
    use \Ads\Traits\Str;
    use \Ads\Traits\PostRequest;

    private $path = '../Document/';

    public function __construct(){
        $this->path = config('DOCUMENT_ROOT_PATH');
    }

    /**
     * 首页
     */
    public function doIndex(){

        $booklist = $this->booklist();        //读取title / description

        return  server('Smarty')->ads('document/page/index')->display('',[
            'booklist'=>$booklist
        ]);
    }

    public function doBook()
    {
        $book = req('Get')['book'];
        $book = urldecode($book);
        $lmlist = $this->doBookclm($book);      //根据bookchr 获取下面lm的list
        return  server('Smarty')->ads('document/page/book')->display('',[
            'booklist'=>$this->booklist(),
            'lmlist'=>$lmlist
        ]);
    }

    public function doLm()
    {
        //该栏目下所有的文章
        $book = req('Get')['book'];
        $book = urldecode($book);
        $lm = req('Get')['lm'];
        $lm = urldecode($lm);
        $lmlist = $this->doBookclm($book);      //根据bookchr 获取下面lm的list
        $wzlist = $this->doBookclmwz($book,$lm);

        return  server('Smarty')->ads('document/page/lm')->display('',[
            'booklist'=>$this->booklist(),
            'lmlist'=>$lmlist,
            'wzlist'=>$wzlist,

        ]);
    }

    public function doBookclmwz($book,$lm)
    {
        $list = [];
        $lmpath = $this->path.$book.'/'.$lm.'/';        //OK,获取到book路径

        if(is_dir($lmpath)){
            //扫描下面的文件夹
            $list = [];
            if(is_dir($lmpath)){
                $dirall = scandir($lmpath);

                foreach($dirall as $v) {
                    if ($v != '.' && $v != '..') {
                        $_v = $this->det($v);
                        if(is_file($lmpath.$v)){
                            //$list[] = $v;
                            if($this->find('-',$_v)){
                                $ar = explode('-',$_v);
                                $_v = $ar[1];
                            }
                            //去掉$_v的'.md'
                            $ar = explode('.',$_v);
                            $_v = $ar[0];
                            $list[$v] = $_v;          //keymap类型的
                        }
                    }
                }
            }
        }
        return $list;
    }

    public function doShow()
    {
        $book = req('Get')['book'];
        $book = urldecode($book);
        $lm = req('Get')['lm'];
        $lm = urldecode($lm);
        $ar = req('Get')['ar'];
        $ar = urldecode($ar);

        $booklist = $this->booklist();        //读取title / description
        $lmlist = $this->doBookclm($book);      //根据bookchr 获取下面lm的list
        $wzlist = $this->doBookclmwz($book,$lm);
        $arpath = $this->path.$book.'/'.$lm.'/'.$ar;        //OK,获取到book路径
        if(is_file($arpath)){
            $nr = file_get_contents($arpath);
            $nr = \Grace\Server\Server::getInstance()->make('Parsedown')->text($nr);
        }else{
            $this->ar = '';
            $nr = '';
        }
        return  server('Smarty')->ads('document/page/Show')->display('',[
            'booklist'=>$booklist,
            'lmlist'=>$lmlist,
            'wzlist'=>$wzlist,
            'nr'=>$nr
        ]);
    }

    /**
     * @param string $book
     *
     * @return array
     *
     * book 下面的栏目列表
     */
    public function doBookclm($book = '')
    {
        $list = [];
        $bookpath = $this->path.$book.'/';        //OK,获取到book路径
        if(is_dir($bookpath)){
            //扫描下面的文件夹
            $list = [];
            if(is_dir($bookpath)){
                $dirall = scandir($bookpath);
                foreach($dirall as $v) {
                    if ($v != '.' && $v != '..') {
                        $_v = $this->det($v);
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

    /**
     * @return array
     * 读取目录下的文件夹,生成book列表
     */
    public function booklist()
    {
        //扫描下面的文件夹
        $list = [];
        if(is_dir($this->path)){
            $dirall = scandir($this->path);
            foreach($dirall as $v) {
                if ($v != '.' && $v != '..') {
                    $_v = $this->det($v);
                    if(is_dir($this->path.$v)){
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

    public function det($key = '')
    {
        $encode = mb_detect_encoding($key, array('GB2312','GBK','UTF-8'));
        if($encode=="GB2312")
        {
            $key = iconv("GBK","UTF-8",$key);
        }
        else if($encode=="GBK")
        {
            $key = iconv("GBK","UTF-8",$key);
        }
        else if($encode=="UTF-8")
        {
        }
        else if($encode=="EUC-CN")
        {
            $key = iconv("GBK","UTF-8",$key);
        }
        else//CP936
        {
            $key = iconv("GB2312//IGNORE","UTF-8",$key);
        }
        return $key;

    }


}

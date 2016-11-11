<?php
namespace Ads\Jiebei\Controller\Page;

class Page {

    use \Ads\Traits\AjaxReturnHtml;

    public function __construct(){
        if(!Application('AdminAuth')->isLogin()){
            R('/man/loginuser');
        }
    }

    public function doAddPost()
    {
        $res = req('Post');
        app('db')->autoExecute('gupiao_index',$res,'INSERT');

        R('/addons/?gupiao/page/index');
    }

    public function doAdd()
    {
        server('Smarty')->ads('gupiao/page/add')->display('',[
        ]);
    }

    public function doIndex(){
//        $list = app('db')->getall('select * from gupiao_index order by id');
        return server('Smarty')->ads('Jiebei/page/index')->display('',[

        ]);
    }

    public function doDelete()
    {
        $code = req('Get')['code'];
        $id = req('Get')['id'];
        server('db')->query("delete from gupiao_opt where optId = '$id'");
        $url = "/addons/?gupiao/page/code&code=$code";
        $this->AjaxReturn([
            'url'=>$url
        ]);
    }

}

<?php
namespace Ads\Sw\Controller\Page;

class Page {

    public function __construct(){
    }

    /**
     * 首页
     */
    public function doIndex(){
        $id = intval(req('Get')['id']);

        $id = $id?:1;

        $row = server('db')->getrow("select * from sw where id = $id");
//D($row);

        server('Smarty')->ads('sw/page/index')->display('',[
            'id'    => $id,
            'row'   => $row
        ]);
    }

    //更改属性的碎片
    public function doSx(){
        server('Smarty')->ads('sw/page/sx')->display('',[
        ]);
    }
    public function doAddPost()
    {
        $res = req('Post');
        $res = saddslashes($res);
        server('db')->autoExecute('sw',$res,'INSERT');
        $id = server('db')->insert_id();
        $url = "/addons/?sw/page/index&id=$id";
        R($url);
    }

    public function doAdd(){
        $fl = adsdata('setup/data/type');
        server('Smarty')->ads('sw/page/add')->display('',[
            'fl'=>$fl
        ]);
    }


}

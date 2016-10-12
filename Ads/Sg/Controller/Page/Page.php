<?php
namespace Ads\Sg\Controller\Page;

class Page {

    public function __construct(){
    }

    public function doEditPost()
    {

        //保存数据，并且返回
        $chr    = req('Post')['chr'];
        $key    = 'Datady_'.$chr;
        $value  = req('Post')[$key];
        application('data')->set($key,$value);
        R("/addons/?sg/page/index&chr=$chr");
    }

    public function doEdit()
    {
        $chr    = req('Get')['chr'];
        $key    = 'Datady_'.$chr;
        $dt = application('data')->get($key);

        return  server('Smarty')->ads('sg/page/edit')->display('',[
            'dt'  =>  $dt
        ]);
    }

    public function doIndex(){

        $chr    = req('Get')['chr'];
        $key    = 'Datady_'.$chr;
        $dt = application('data')->get($key);

        $nr = \Grace\Server\Server::getInstance()->make('Parsedown')->text($dt);

        return  server('Smarty')->ads('sg/page/index')->display('',[
            'nr'  =>  $nr
        ]);
    }

}





















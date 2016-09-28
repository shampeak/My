<?php

namespace Ads\Setup\Controller\Home;

//hook
class BaseController{

    public function __construct(){
    }

    /**
     * @return array
     * 返回可以调用的api
     */
    public function doApi(){
        return [
        ];
    }


    public function doVersion(){
        return '1.0';
    }

    /**
     * @return array
     * 返回依赖关系
     */
    public function doDepend()
    {
        return [
            'asdf',
            'asdf',
        ];
    }

    public function doDependTable()
    {
        return [
            'Menu'
        ];
    }

    public function doMenu()
    {

        $res = [
            [
                'title' => '管理',
                'des'   => '前端 : 设置',
                'ads'   => 'setup/home/index',
                'hidden'=> 0,
                'child' => [
                    [ 'title' => '首页管理',
                        'des'   => '修改',
                        'ads'   => 'setup/html/edit',
                        'hidden'=> 0,
                        'sort'=>9
                    ],
                ]
            ]
        ];
        return $res;
    }

}
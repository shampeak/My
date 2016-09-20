<?php

namespace Ads\Msource\Controller\Home;

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
                'title' => 'M来源',
                'des'   => 'M来源',
                'ads'   => 'msource/html/index',
                'hidden'=> 0,
                'child' => [
                    [ 'title' => '列表',
                        'des'   => '列表',
                        'ads'   => 'msource/html/list',
                        'hidden'=> 0,
                        'sort'  =>30
                    ],
                    [ 'title' => '设置',
                        'des'   => '设置',
                        'ads'   => 'msource/html/edit',
                        'hidden'=> 0,
                    ],
                ]
            ]
        ];
        return $res;
    }

}

<?php

namespace Ads\Sw\Controller\Home;

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
                'title' => '思维',
                'des'   => '思维管理',
                'ads'   => 'sw/home/index',
                'hidden'=> 0,
                'child' => [
                    [ 'title' => '启航',
                        'des'   => '修改',
                        'ads'   => 'sw/html/index',
                        'hidden'=> 0,
                        'sort'=>9
                    ],
                ]
            ]
        ];
        return $res;
    }

}

<?php

namespace Ads\Document\Controller\Home;

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
                'title' => '文档管理',
                'des'   => '前端 : 设置',
                'ads'   => 'document/home/index',
                'hidden'=> 0,
                'child' => [
                    [ 'title' => '目录',
                        'des'   => '修改',
                        'ads'   => 'document/html/list',
                        'hidden'=> 0,
                        'sort'=>7
                    ],
                    [ 'title' => '添加',
                        'des'   => '修改',
                        'ads'   => 'document/html/add',
                        'hidden'=> 0,
                        'sort'=>6
                    ],
                    [ 'title' => '编写',
                        'des'   => '修改',
                        'ads'   => 'document/html/documentration',
                        'hidden'=> 1,
                        'sort'=>5
                    ],

                ]
            ]
        ];
        return $res;
    }


}

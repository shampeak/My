<?php

namespace Ads\Xt\Controller\Home;

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
                'title' => '习题',
                'des'   => '思维管理',
                'ads'   => 'xt/home/index',
                'hidden'=> 0,
                'child' => [
                    [ 'title' => '列表',
                        'des'   => '修改',
                        'ads'   => 'xt/html/index',
                        'hidden'=> 0,
                        'sort'=>9
                    ],
                    [ 'title' => '添加',
                        'des'   => '修改',
                        'ads'   => 'xt/html/add',
                        'hidden'=> 0,
                        'sort'=>8
                    ],
                    [ 'title' => '添加文档习题',
                        'des'   => '修改',
                        'ads'   => 'xt/html/addwd',
                        'hidden'=> 0,
                        'sort'=>8
                    ],
                    [ 'title' => '修改',
                        'des'   => '',
                        'ads'   => 'xt/html/edit',
                        'hidden'=> 1,
                        'sort'=>9
                    ],
                ]
            ]
        ];
        return $res;
    }

}

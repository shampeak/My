<?php

namespace Ads\Wx\Controller\Home;

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
                'title' => 'wx',
                'des'   => '管理菜单',
                'ads'   => 'wx/html/index',
                'hidden'=> 0,
                'child' => [
                    [ 'title' => '列表',
                        'des'   => '用户列表',
                        'ads'   => 'wx/html/list',
                        'hidden'=> 0,
                        'sort'  =>30
                    ],
                    [ 'title' => '接口设置',
                        'des'   => '修改',
                        'ads'   => 'wx/html/apisetup',
                        'hidden'=> 10,
                    ],
                    [ 'title' => '基础设置',
                        'des'   => '修改',
                        'ads'   => 'wx/html/setup',
                        'hidden'=> 0,
                    ],
                ]
            ]
        ];
        return $res;
    }

}

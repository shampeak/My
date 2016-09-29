<?php
namespace App\Controller;


class Addons extends BaseController
{

    public function __construct(){
        parent::__construct();
        if(!Application('AdminAuth')->isLogin()){
            R('/man/loginuser');
        }

    }

    /**
     * 响应
     */
    public function doIndexPost()
    {
        \App\Ads::Run();
    }

    /**
     * Addons
     */
    public function doIndex()
    {
        //前台调用
         \App\Ads::Run();     //路由like http://gst.so/?sdfsdf/sdf/dsf
    }

}

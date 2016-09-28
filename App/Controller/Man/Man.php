<?php
namespace App\Controller;


class Man extends BaseController
{

    public function __construct(){
        parent::__construct();
    }

    /**
     * 1 : 后台界面请求
     * 2 : 后台ads数据请求
     * 3 : 后台碎片请求
     */

    /**
     * 前端响应地址
     * like /man/res/?aa/dd/ss
     */
    public function doRes()
    {
        \App\Ads::Run();
    }

    public function doResPost()
    {
        \App\Ads::Run();
    }

    /**
     * 响应地址
     * Post
     * like /man/?aa/dd/ss
     */
    public function doIndexPost()
    {
        \App\Ads::Gui();
    }

    /**
     * 后台首页
     * 后台GUI
     * like /man/?aa/dd/ss
     */
    public function doIndex()
    {
        \App\Ads::Gui();
    }

    public function doLoginPost()
    {
        //前台调用
        \App\Ads::Run();
    }

    public function doLoginuser()
    {
        adsdata('gui/html/Login2');
    }


    /**
     * 后台首页
     */
    public function doLogin()
    {
        adsdata('gui/html/Login');
    }

    public function doLogout()
    {
        adsdata('gui/html/Logout');
    }


}

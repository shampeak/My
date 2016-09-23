<?php
namespace App\Controller;

class Weixin extends BaseController
{

    use \App\Traits\AjaxReturnHtml;

    public function __construct(){
        parent::__construct();
    }

    /**
     * 后台首页
     */
    public function doIndex()
    {
        echo 123;
    }

}

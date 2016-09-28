<?php
namespace App\Controller;

class Home extends BaseController
{

    use \App\Traits\AjaxReturnHtml;

    public function __construct(){
        parent::__construct();
        if(!Application('AdminAuth')->isLogin()){
            R('/man/loginuser');
        }

    }

    /**
     * 后台首页
     */
    public function doIndex()
    {

        $list = adsdata('setup/data/list');

        view('',[
            'list' => $list
        ]);

    }

}

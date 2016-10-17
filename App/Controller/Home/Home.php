<?php
namespace App\Controller;

class Home extends BaseController
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

        $list = adsdata('setup/data/list');

        view('',[
            'list' => $list
        ]);

    }

}

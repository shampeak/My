<?php
namespace Ads\Config\Controller\Home;

class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doIndex(){
        $dt = config('CONFIG_TYPE_LIST');
        D($dt);
    }


}

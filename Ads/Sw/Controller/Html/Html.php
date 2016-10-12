<?php
namespace Ads\Sw\Controller\Html;

class Html {

    use \Ads\Traits\Data;
    use \Ads\Traits\Arr;
    use \Ads\Traits\PostRequest;

    public function __construct(){
    }


    public function doIndex(){
        return 123;
//        return  server('Smarty')->ads('setup/html/edit')->fetch('',[
//            'list'  =>  $list
//        ]);
//
    }

}

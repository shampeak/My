<?php
namespace Ads\Gupiao\Controller\Widget;

class Widget {

    use \Ads\Traits\AjaxReturnHtml;

    public function __construct(){
    }

    //widget ads="gupiao/widget/top"
    public function doTop(){
        return  server('Smarty')->ads('gupiao/widget/top')->fetch('',[
        ]);
    }


}

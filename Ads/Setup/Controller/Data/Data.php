<?php
namespace Ads\Setup\Controller\Data;

class Data {

    use \Ads\Traits\Data;
    use \Ads\Traits\Arr;
    use \Ads\Traits\PostRequest;

    public function __construct(){
    }


    public function doList(){
        $list = $this->get("Nodelist");
        return $list;
    }


}

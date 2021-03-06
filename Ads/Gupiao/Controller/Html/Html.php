<?php
namespace Ads\Gupiao\Controller\Html;

class Html {

    use \Ads\Traits\Data;
    use \Ads\Traits\Arr;
    use \Ads\Traits\PostRequest;

    public function __construct(){
    }

    public function doIndex(){
    }

    public function doEditPost()
    {
        $list = req('Post')['list'];
        $list = empty($list)?[]:$list;
        //sort($list);

        $v['title'] = req('Post')['newtitle'];
        $v['des'] = req('Post')['newdes'];
        $v['url'] = req('Post')['newurl'];
        $list[] = $v;

        foreach($list as $key=>$value){
            if(empty($value['title']) && empty($value['des']) && empty($value['url'])){
                unset($list[$key]);
            }else{
                $newArr[$key] = $value['sort'];
            }
        }

        //排序
        array_multisort($newArr,SORT_ASC, $list);

        $this->set("Nodelist",$list);
        R('/man/?setup/html/edit');
    }

    public function doEdit(){
        $list = $this->get("Nodelist");
      //  d($list);
        return  server('Smarty')->ads('setup/html/edit')->fetch('',[
            'list'  =>  $list
        ]);

    }


}

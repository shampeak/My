<?php
namespace Ads\Mysetup\Controller\Html;

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
        $v['des']   = req('Post')['newdes'];
        $v['url']   = req('Post')['newurl'];
        $v['bgcolor'] = req('Post')['newbgcolor'];

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
        R('/man/?mysetup/html/edit');
    }

    public function doEdit(){
        $list = $this->get("Nodelist");
      //  d($list);
        $bgcolorlist = config('INDEX_BG_COLOR');

//D($list);
        return  server('Smarty')->ads('mysetup/html/edit')->fetch('',[
            'list'  =>  $list,
            'bgcolorlist'=>$bgcolorlist
        ]);

    }


}

<?php
namespace Ads\Setup\Controller\Html;

class Html {

    use \Ads\Traits\Data;
    use \Ads\Traits\Arr;
    use \Ads\Traits\PostRequest;

    public function __construct(){
    }

    public function doIndex(){
    }



    public function doListPost()
    {
        $res = req('Post')['Datalist'];
        $this->set("Datalist",$res);
        R('/man/?setup/html/list');
    }

    public function doList(){
        $res = $this->get("Datalist");
        //  d($list);
        return  server('Smarty')->ads('setup/html/list')->fetch('',[
            'res'  =>  $res
        ]);
    }




    public function doLxPost()
    {
        $res = req('Post')['Swlx'];
        $this->set("Swlx",$res);
        R('/man/?setup/html/lx');
    }
    
    public function doLx(){
        $res = $this->get("Swlx");
        //  d($list);
        return  server('Smarty')->ads('setup/html/lx')->fetch('',[
            'res'  =>  $res
        ]);

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

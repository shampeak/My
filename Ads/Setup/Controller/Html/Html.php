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
        $ListDataadsApplication = req('Post')['ListDataadsApplication'];
        $ListDataadsConfig = req('Post')['ListDataadsConfig'];
        $ListDataAds            = req('Post')['ListDataAds'];
        $ListDataAdshtml        = req('Post')['ListDataAdshtml'];
        $ListDataAdswidget      = req('Post')['ListDataAdswidget'];


        application('data')->set("ListDataadsApplication",$ListDataadsApplication);
        application('data')->set("ListDataadsConfig",$ListDataadsConfig);
        application('data')->set("ListDataAds",$ListDataAds);
        application('data')->set("ListDataAdshtml",$ListDataAdshtml);
        application('data')->set("ListDataAdswidget",$ListDataAdswidget);

        R('/man/?setup/html/list');
    }

    public function doList(){

        $ListDataadsApplication = application('data')->get("ListDataadsApplication");
        $ListDataadsConfig      = application('data')->get("ListDataadsConfig");
        $ListDataAds            = application('data')->get("ListDataAds");
        $ListDataAdshtml        = application('data')->get("ListDataAdshtml");
        $ListDataAdswidget      = application('data')->get("ListDataAdswidget");

        return  server('Smarty')->ads('setup/html/list')->fetch('',[
            'ListDataadsApplication'  =>  $ListDataadsApplication,
            'ListDataadsConfig' =>  $ListDataadsConfig,
            'ListDataAds'       =>  $ListDataAds,
            'ListDataAdshtml'   =>  $ListDataAdshtml,
            'ListDataAdswidget' =>  $ListDataAdswidget,
        ]);
    }


    public function doDyPost()
    {
        $res = req('Post')['Datadylist'];
        application('data')->set("Datadylist",$res);

        R('/man/?setup/html/dy');
    }

    /**
     * @return mixed
     * 单页内容
     */
    public function doDy(){
        $res = application('data')->get("Datadylist");
        return  server('Smarty')->ads('setup/html/dy')->fetch('',[
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
        R('/man/?setup/html/edit');
    }

    public function doEdit(){
        $list = $this->get("Nodelist");
      //  d($list);
        $bgcolorlist = config('INDEX_BG_COLOR');

//D($list);
        return  server('Smarty')->ads('setup/html/edit')->fetch('',[
            'list'  =>  $list,
            'bgcolorlist'=>$bgcolorlist
        ]);

    }


}

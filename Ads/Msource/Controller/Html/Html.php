<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-09-02
 * Time: 10:17
 */

namespace Ads\Msource\Controller\Html;


class Html
{

    use \Ads\Msource\Traits\Data;
    use \Ads\Msource\Traits\Arr;
    use \Ads\Msource\Traits\PostRequest;
    use \Ads\Msource\Traits\AjaxReturnHtml;
    use \Ads\Msource\Traits\Strtomap;
    use \Ads\Msource\Traits\Caiji;

    public function __construct()
    {
    }

    public function doIndex()
    {
    }

    public function doEditPost()
    {
        $data1     = req('Post')['moviesource1'];
        $data2   = req('Post')['moviesource2'];
        $data3   = req('Post')['moviesource3'];

        $data1     = $this->getStr($this->getArr($data1));
        $data2   = $this->getStr($this->getArr($data2));
        $data3   = $this->getStr($this->getArr($data3));

        $this->set('moviesource1',$data1);
        $this->set('moviesource2',$data2);
        $this->set('moviesource3',$data3);

        R('/man/?msource/html/edit');
    }

    public function doEdit()
    {
        return  server('Smarty')->ads('msource/html/edit')->fetch('',[
            'data1' => $this->get('moviesource1'),
            'data2' => $this->get('moviesource2'),
            'data3' => $this->get('moviesource3'),

        ]);
    }


    public function doList()
    {
//        application('data')->set('QueueChannelStepone',1);
//        $queuechannelstepone = application('data')->get('QueueChannelStepone');

       //$flit = $this->doListgetlist();
        return  server('Smarty')->ads('msource/html/list')->fetch('',[
            'flit'=>$flit
        ]);
    }


    /**
     * @return array
     * 第二阶段原始数据输出
     * 'msource/html/steptwodatainterface'
     */
    public function doSteptwodatainterface()
    {
        $flit = server('cache')->get('doSteptwodatainterface');
        if($flit){            return $flit;        }

        $ar = $null = [];
        $flit = $this->doListgetlist();
        //过滤数据
        $file = __DIR__.'/../../../Queue/Data/urllistnull.data';
        if (is_file($file)){
            $null = file_get_contents($file);
            $null = $this->getArr($null);
        }
        //扩展数据        $file = __DIR__.'/../../../Queue/Data/urllistext.data';
        $file = __DIR__.'/../../../Queue/Data/urllistext.data';
        if (is_file($file)){
            $ar = file_get_contents($file);
            $ar = $this->getArr($ar);
        }
        $flit = array_diff($flit,$null);
        $flit = array_merge($flit,$ar);

        $flit = server('cache')->set('doSteptwodatainterface',$flit,120);

        return $flit;
    }

     /**
     * @return mixed
     * 第二部,计算出来的原始数据和运行任务得到的数据
     */
    public function doSteptwodata()
    {
        $url = "http://v.youku.com/v_show/id_XMTA0Njg0NjUy.html";
        $html = $this->Htmlget($url);
        echo '<pre>';
        print_r($html);
        echo '</pre>';
        $flit = $this->doSteptwodatainterface();

        //
        $file = __DIR__.'/../../../Queue/Data/list.data';
        $ar = file_get_contents($file);
        $ar = $this->getArr($ar);
        $ar = array_unique($ar);
        sort($ar);
        return  server('Smarty')->ads('msource/html/steptwodata')->fetch('',[
           'flit'=>$flit,
            'ar'=>$ar
        ]);
    }

    /**
     * @return mixed
     * 原始数据和运行任务得到的数据
     */
    public function doSteponedata()
    {
        $ar = $null = [];
        //原始数据
        $flit = $this->doListgetlist();

        //扩展数据        $file = __DIR__.'/../../../Queue/Data/urllistext.data';
        $file = __DIR__.'/../../../Queue/Data/urllistext.data';
        if (is_file($file)){
            $ar = file_get_contents($file);
            $ar = $this->getArr($ar);
        }

        //过滤数据
        $file = __DIR__.'/../../../Queue/Data/urllistnull.data';
        if (is_file($file)){
            $null = file_get_contents($file);
            $null = $this->getArr($null);
        }
//D($null);


        return  server('Smarty')->ads('msource/html/steponedata')->fetch('',[
            'flit'  => $flit,
            'ar'    => $ar,
            'null'    => $null,
        ]);

    }


    /**
     * @return array
     * 被守护调用
     */
    public function doListgetlist()
    {
        $_url = $flit = [];
        $diqu = [
            'a_大陆',
            'a_香港',
            'a_台湾',
            'a_韩国',
            'a_日本',
            'a_美国',
            'a_法国',
            'a_英国',
            'a_德国',
            'a_意大利',
            'a_加拿大',
            'a_印度',
            'a_俄罗斯',
            'a_泰国',
            'a_其他',
        ];
        $leixing = [
            'g_武侠',
            'g_警匪',
            'g_犯罪',
            'g_科幻',
            'g_战争',
            'g_恐怖',
            'g_惊悚',
            'g_纪录片',
            'g_西部',
            'g_戏曲',
            'g_歌舞',
            'g_奇幻',
            'g_冒险',
            'g_悬疑',
            'g_历史',
            'g_动作',
            'g_传记',
            'g_动画',
            'g_儿童',
            'g_喜剧',
            'g_爱情',
            'g_剧情',
            'g_运动',
            'g_短片',
            'g_优酷出品',
        ];
//        $leixing
//        $diqu
//        =>url
        foreach($leixing as $value){
            foreach($diqu as $v){
                $_flit[] = $value.'_'.$v;
            }
        }
        $flit = $_flit;

        $niandai = [
            'r_2016',
            'r_2015',
            'r_2014',
            'r_2013',
            'r_2012',
            'r_2011',
            'r_2010',
            'r_2000',
            'r_1990',
            'r_1980',
            'r_1970',
            'r_-1969',
        ];
        $_flit = [];
        foreach($flit as $value){
            foreach($niandai as $v){
                $_flit[] = $value.'_'.$v;
            }
        }
        $flit = $_flit;

        $page = [
            'p_1',
        ];
        //通过程序获取分页
        $_flit = [];
        foreach($flit as $value){
            foreach($page as $v){
                $_flit[] = $value.'_'.$v;
            }
        }
        $flit = $_flit;
        $url = 'http://list.youku.com/category/show/c_96_#key#.html';
        foreach($flit as $key=>$value){
            $flit[$key] = str_replace('#key#',$value,$url);
        }
        return $flit;
    }


}
<?php
namespace Ads\Queue\Controller\Html;

class Html  {

    use \Ads\Queue\Traits\AjaxReturnHtml;
    use \Ads\Queue\Traits\Data;
    use \Ads\Queue\Traits\Caiji;
    use \Ads\Queue\Traits\Str;
    use \Ads\Queue\Traits\Arr;

    public function __construct(){
    }

    public function doIndex()
    {
    }

    /**
     * @param int $channel
     * 任务频道
     */
    public function doChannel($data)
    {

        $queuechannelstepone = application('data')->get('QueueChannelStepone');

        //$stop = $this->get('pressstop');
        if ($queuechannelstepone){
            //控制
            $data['channel']     = 1;
            $data['pressstop']   = 1;
            $data['delay']       = 100;
            $data['width']       = '100%';
            $data['msg']       = '已经执行完毕';
            return $data;
        }


        $source = adsdata('msource/html/listgetlist');
        //执行任务
        if($data['begin']){     //初始任务
            //控制
            $data['channel']     = 1;
            $data['begin']       = 0;
            $data['pressstop']   = 0;
            $data['delay']       = 10;
            $data['pressid']     = 0;        //初始
            $data['width']       = '0%';
            $data['total']       = count($source);
            $data['num']         = 0;
            $data['msg']         = "";
            $bid =         $this->get('pressdoid');
            if($bid)$data['pressid']  = intval($bid);
        }

        $this->set('pressdoid',$data['pressid']);

        //t-odo
        $html = $this->Htmlget($source[$data['pressid']]);
        if($this->find('很抱歉，小酷没有筛选到相关视频 ',$html)){
            $file = __DIR__.'/../../Data/urllistnull.data';
            file_put_contents($file,$source[$data['pressid']]."\n",FILE_APPEND);
        }else{
            //截取上下页的链接
            $html1 = $this->cut('<ul class="yk-pages">','</ul>',$html);
            $_list = $this->geturl($html1);
            array_unique($_list);
            foreach($_list as $url){
                $file = __DIR__.'/../../Data/urllistext.data';
                file_put_contents($file,$url."\n",FILE_APPEND);
            }

            //获取总数
            //$html1 = $this->cut('<span id="total_videonum">','</span>',$html);

            //获取所有的影片链接
//            $list = $this->geturl($html);
//            foreach($list as $key=>$value){
//                if ($this->find('http://v.youku.com/v_show/id_',$value)){
//                }else{
//                    unset($list[$key]);
//                }
//            }
//            sort($list);

        }


//D($html);
        $data['num']++;
        //生成下一个id
        $data['pressid']++;
        //计算百分比
        $data['width'] = intval(($data['pressid']*100)/count($source)).'%';
        $data['msg'] = $source[$data['pressid']];

        if($data['pressid']+1 >= count($source)){
            $data['pressstop']   = 1;
            application('data')->set('QueueChannelStepone',1);
            $this->set('pressdoid',"0");
        }
        return $data;
    }

    /*
    channel : 1,        //任务频道
    begin   : 1,        //开始标记
    pressstop : 0,      //结束标记
    pressid : 0,        //任务id
    width   : 0,        //百分比
    num     : 0,        //执行次数
    total   : 0,        //总数
    msg     : '',       //消息
    delay   : 1000      //延时时间
    */
    public function doTimerePost()
    {
        //==============================================
        //执行
        $data = $this->doChannel(req('Post'));
        //==============================================
        //$data['pressstop'] = 1;
//        $data['msg'] = "执行完成";
//        $data['delay'] = 1000;
//        $data['num']++;
//        $data['width'] = '60%';

        echo json_encode($data);
        exit;
    }

    public function doTimere()
    {
        return  server('Smarty')->ads('queue/html/Timere')->fetch('',[
        ]);
    }

    public function doList(){
        $url = "http://list.youku.com/category/show/c_96_g_战争_a_香港_r_1970_p_1.html";
        $url = "http://list.youku.com/category/show/c_96_g_武侠_a_香港_r_2010_p_1.html";
        $url = "http://list.youku.com/category/show/c_96_g_犯罪_a_美国_r_2016_p_1.html";


        //$html = $this->Htmlget($url);



        //1 分析页数
        /*


        */
        //5

        //list = http://v.youku.com/v_show/id_XODU2OTIwMjky.html


        return  server('Smarty')->ads('queue/html/list')->fetch('',[
        ]);
    }


    public function dogeturllisttext()
    {

    }

    public function dogeturllistnull()
    {

    }



}

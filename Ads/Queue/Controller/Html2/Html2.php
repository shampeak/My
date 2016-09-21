<?php
namespace Ads\Queue\Controller\Html2;

class Html2  {

    use \Ads\Queue\Traits\AjaxReturnHtml;
    use \Ads\Queue\Traits\Data;
    use \Ads\Queue\Traits\Caiji;
    use \Ads\Queue\Traits\Str;

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
        $source = adsdata('msource/html/steptwodatainterface');

        //执行任务
        if ($data['begin']) {     //初始任务
            $data['channel'] = 1;
            $data['begin'] = 0;
            $data['pressstop'] = 0;
            $data['delay'] = 10;
            $data['pressid'] = 0;        //初始
            $data['width'] = '0%';
            $data['total'] = count($source);
            $data['num'] = 0;
            $data['msg'] = "";
            $bid = $this->get('pressdoidtwo');
            if ($bid) {
                $data['pressid'] = intval($bid);
            }
        }
        $this->set('pressdoidtwo', $data['pressid']);
        //t-odo 缓存
        //$data['pressid'] = 0;
        $html = $this->Htmlget($source[$data['pressid']]);

        //获取地址,并且保存
        $list = $this->geturl($html);
        foreach($list as $key=>$value){
            if ($this->find('http://v.youku.com/v_show/id_',$value)){
                $this->Htmlget($value);             //缓存rul
            }else{
                unset($list[$key]);
            }
        }
        sort($list);

        foreach($list as $url){
            $file = __DIR__.'/../../Data/list.data';
            file_put_contents($file,$url."\n",FILE_APPEND);
        }


        //D($html);
        $data['num']++;
        //生成下一个id
        $data['pressid']++;
        $data['pressid'] = $data['pressid']+1000;
        //计算百分比
        $data['width'] = intval(($data['pressid'] * 100) / count($source)) . '%';
        $data['msg'] = $source[$data['pressid']];
        if ($data['pressid'] + 1 >= count($source)) {
            $data['pressstop'] = 1;
            application('data')->rootpath(__DIR__.'/../../../../Cache/Data/')->path('Default')->set('QueueChannelSteptwo', 1);
            $this->set('pressdoidtwo', "0");
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
        //结束过滤
        $queuechannelstepone = application('data')->get('QueueChannelSteptwo');
        if ($queuechannelstepone){
            $data['channel']     = 1;
            $data['pressstop']   = 1;
            $data['delay']       = 100;
            $data['width']       = '100%';
            $data['msg']       = '已经执行完毕';
            echo json_encode($data);
            exit;
        }

        //==============================================
        //执行
        $data = $this->doChannel(req('Post'));
        //==============================================
        echo json_encode($data);
        exit;
    }

    public function doTimere()
    {

        return  server('Smarty')->ads('queue/html2/Timere')->fetch('',[
        ]);
    }

}

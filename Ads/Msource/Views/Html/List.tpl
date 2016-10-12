<div class="row">
    <div class="col-md-6" >

        <h2>Step one</h2>
        <p>
            $file = pressstop.data
        </p>
        <h2>Step two</h2>
        <p>
        </p>

   第一支撑点,分析出
        <code>youkuid</code>

<pre>

//        application('data')->set('QueueChannelStepone',1);
        $queuechannelstepone = application('data')->get('QueueChannelStepone');

任务
对每个地址进行本地缓存
过滤掉没有数据的地址
同时 分离出maxpage
</pre>

    </div>


    <div class="col-md-6" >
        count :{$flit|count}<br>
            {foreach from=$flit key=key item=item}
                {$key}:{$item}<br>
            {/foreach}
    </div>
</div>
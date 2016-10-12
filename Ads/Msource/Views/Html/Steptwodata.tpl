<div class="row">
    <div class="col-md-12" >
        <h2>Step one</h2>
        <p>
            $file = pressstop.data
        </p>
    </div>
    <div class="col-md-5" >
        <h3>原始数据 [计算出来的]</h3>
        count :{$flit|count}<br>
        {foreach from=$flit key=key item=item}
            {$key}:{$item}<br>
        {/foreach}
    </div>

    <div class="col-md-5" >
        <h3>扩展数据 [去重]</h3>
        count :{$ar|count}<br>
        {foreach from=$ar key=key item=item}
            {$key}:<a href="{$item}" target="_blank">{$item}</a><br>
        {/foreach}


    </div>
</div>
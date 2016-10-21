<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{$res['description']}">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>{$res['title']}</title>
    <!-- Bootstrap -->
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
    <style>#te { padding-left: 0px;padding-right: 0px; }</style>
</head>
<body>


<div class="container-fluid">

    {include file='../Widget/Top.tpl'}


    <div class="row">
        <div class="col-xs-12" id="te">
            <div style="margin: 0px 0px 5px 0px;"></div>
            <h3>{$row['title']}{$row['code']}</h3>
            <hr>


            <h3>均价<small>{$jiaquanjun}</small></h3>

            <form method="post" action="/addons/?gupiao/page/check_group&code={$smarty.get.code}">
                <table class="table">
                    {foreach from=$list key=key item=item}
                        {if $item['optId']|in_array:$keylist}{else}
                            <tr>
                                <td {if $item['opt'] eq 'B'}class="danger"{else}class="success"{/if}>
                                    <input name="optgroup[]" value="{$item['optId']}" type="checkbox">
                                    {$item['createAt']|date_format:"%Y-%m-%d"} => {$item['num']}X{$item['price']} = {$item['num'] * $item['price']}
                                </td>
                                <td class="info" width="45">
                                    {if $item['opt'] eq 'B'}
                                        <a href="/addons/?gupiao/page/check_ground/&code={$smarty.get.code}&id={$item['optId']}">底仓</a>
                                    {else}
                                    {/if}
                                </td>
                            </tr>
                        {/if}
                    {/foreach}
                </table>
                <input type="hidden" name="code" value="{$smarty.get.code}">
                <button type="submit" class="btn btn-primary">组合</button>
            </form>

        </div>
        <div class="col-xs-12" id="te">
            <h3>已组合<small>{$yingli}</small></h3>
            <table class="table">

                {foreach from=$col key=key item=item}
                    <tr>
                        <td class="danger">
                            {foreach from=$item['group'] key=k item=i}
                                {if $list[$i]['opt'] eq 'B'}
                                    {$list[$i]['num']}X{$list[$i]['price']} = {$list[$i]['num'] * $list[$i]['price']}<br>
                                {/if}
                            {/foreach}
                        </td>
                        <td class="success">
                            {foreach from=$item['group'] key=k item=i}
                                {if $list[$i]['opt'] neq 'B'}
                                    {$list[$i]['num']}X{$list[$i]['price']} = {$list[$i]['num'] * $list[$i]['price']}<br>
                                {/if}
                            {/foreach}
                        </td>
                        <td>
                            {$item['qian']}
                        </td>
                        <td class="info" width="45"><a href="/addons/?gupiao/page/check_ungroup/&code={$smarty.get.code}&id={$item['id']}">解除</a></td>
                    </tr>
                {/foreach}
            </table>

        </div>

        <div class="col-xs-12" id="te">
            <h3>底仓<small>{$chengben}-><span class="red">{$chengben2}</span></small></h3>
            <table class="table">
                {foreach from=$ground key=key item=item}
                    <tr>
                        <td class="danger">{$item['createAt']|date_format:"%Y-%m-%d"} => {$item['num']}X{$item['price']} = {$item['num'] * $item['price']}</td>
                        <td class="info" width="45"><a href="/addons/?gupiao/page/check_unground/&code={$smarty.get.code}&id={$item['optId']}">解除</a></a></td>
                    </tr>
                {/foreach}
            </table>

        </div>



    </div>
</div>



</body>
</html>
<!--
class="active"
class="success"
class="danger"
class="info"
-->
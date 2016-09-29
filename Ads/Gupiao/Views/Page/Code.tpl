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
    <script src="/assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="/assets/js/Sham.js" type="text/javascript"></script>
    <style>#te { padding-left: 0px;padding-right: 0px; }</style>
</head>
<body>


<div class="container-fluid">

    {widget ads="gupiao/widget/top"}

    <div class="row">
        <div class="col-xs-12" id="te">
            <div style="margin: 0px 0px 5px 0px;"></div>
            <h3>{$row['title']}{$row['code']}</h3>
            <hr>

            <table class="table">
                <!--
                class="active"
                class="success"
                class="danger"
                class="info"
                -->
                {foreach from=$list key=key item=item}
                    <tr {if $item['opt'] neq 'B'}class="success"{else}class="danger"{/if}>
                        <td>{$item['createAt']|date_format:"%Y-%m-%d"}</td>
                        <td>{$item['opt']}</td>
                        <td>{$item['num']}</td>
                        <td>{$item['price']}</td>
                        <td><span class="glyphicon glyphicon-menu-right"></span>{$item['price'] * $item['num']}</td>
                        <td>
                            {if $item['type'] eq 'ground'}
                            {else}
                                {if $item['optId']|in_array:$keylist}
                                {else}
                                    <a class="shamget" comfirm="删除?" rel="/addons/?gupiao/page/delete/&code={$smarty.get.code}&id={$item['optId']}"><span class="glyphicon glyphicon-remove"></span></a>
                                {/if}
                            {/if}
                        </td>
                    </tr>
                {/foreach}
            </table>

        </div>



    </div>
</div>



</body>
</html>

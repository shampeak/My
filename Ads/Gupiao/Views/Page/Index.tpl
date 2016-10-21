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
    <style>#te { padding-left: 0px;padding-right: 0px; }</style>
</head>
<body>


<div class="container-fluid">

    <div class="row">
        <div class="col-md-12" id="te">

            <div class="list-group">
                {include file='../Widget/HeadINdex.tpl'}

                {foreach from=$list key=key item=item}
                    <a href="/addons/?gupiao/page/code&code={$item['code']}" class="list-group-item btn btn-primary btn-lg">{$item['title']}</a>
                {/foreach}
            </div>
        </div>
    </div>
</div>

<div class="list-group navbar-fixed-bottom">
    <a href="/addons/?gupiao/page/add" class="list-group-item btn btn-primary btn-lg ">添加新的</a>
</div>


</body>
</html>

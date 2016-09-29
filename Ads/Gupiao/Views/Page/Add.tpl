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

    <div class="row">

        <div class="col-xs-12" id="te">
            <div style="margin: 0px 0px 5px 0px;"></div>


            <form method="post" action="/addons/?gupiao/page/add">
                <!-- part1 -->
                <input name="code" type="hidden" class="form-control" placeholder="code" value="{$smarty.get.code}">
                <!-- part1 -->
                <div class="form-group">
                    <label for="exampleInputPassword1">名称</label>
                    <input name="title" type="text" class="form-control" placeholder="名称">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">代码</label>
                    <input name="code" type="text" class="form-control" placeholder="代码">
                </div>

                <!-- part1 -->
                <button type="submit" class="btn btn-default">Submit</button>
            </form>



        </div>



    </div>
</div>



</body>
</html>

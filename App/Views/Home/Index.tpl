<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Data Manage</title>
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
    <script src="/assets/js/jquery-1.11.1.min.js"></script>
    <style>
        .centaton {
            height:140px;
        }
        .pleft10 {
            padding-left: 10px;
        }
    </style>
</head>
<body>


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="page-header">
                <h1>Tables</h1>
            </div>
        </div>
        {foreach from=$list key=key item=item}
        <div class="col-sm-6 col-md-3 col-lg-2">
            <div class="thumbnail">
                <div class="caption centaton {$item['bgcolor']}">
                    <h3 class="glyphicon glyphicon-search "><a class="pleft10" href="{$item['url']}">{$item['title']}</a></h3>
                    <p>{$item['des']}</p>
                </div>
            </div>
        </div>
        {/foreach}
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="/assets/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="/assets/js/Sham.js"></script>
<script type="text/javascript">
    $(document).ready(function(e) {
    });
</script>
</body>
</html>

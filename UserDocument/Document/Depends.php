<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Application Document Map</title>
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
    <link href="/assets/css/dashboard.css" rel="stylesheet">
</head>

<body>
<?php include "Menu.php";?>


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">

            </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h2>Applications</h2>
            depends 可以通过depends方法获取到
            例如
<pre>
$depends = \Application\Application::getInstance()->make('Document')->Depends();
</pre>


            <?php
            $list = \Application\Application::getInstance()->obList();
            foreach($list as $key=>$value):
                $depends = \Application\Application::getInstance()->make($key)->Depends();
            ?>
            <h2><?=$key?> => <?=$value?></h2>
<pre>
<?php print_r($depends);?>
</pre>
<hr>
            <?php
            endforeach;
            ?>

            <footer class="footer">
                <hr>
                <p class="text-muted">@copy Shampeak.</p>
            </footer>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<script src="/assets/jquery-1.11.1.min.js"></script>
<script src="/assets/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="/assets/Sham.js"></script>
<script type="text/javascript">
    $(document).ready(function(e) {
    });
</script>
</body>
</html>

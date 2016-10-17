<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Application List</title>
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
    <link href="/assets/css/dashboard.css" rel="stylesheet">
</head>

<body>
<?php include "Menu.php";?>
<?php
//获取两个list
//D($listserver);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">

            </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h2>数据</h2>
<p>属于最底层,可以直接获取</p>
<hr>
            <h2>Server::ServerList</h2>
            所有的服务列表
<br>            $list = \Application\Server::getInstance()->obList();
            <hr>
<pre>
<?php
$listserver = Grace\Server\Server::getInstance()->obList();
print_r($listserver);
?>
</pre>

            <h2>Server::Config</h2>
            系统最底层配置信息<br>
            $res = Grace\Server\Server::getInstance()->Config('Config');
            <hr>
<pre>
<?php
$res = Grace\Server\Server::getInstance()->Config('Config');            // 底层配置 -> Config/Config.php
print_r($res);
?>
</pre>

            <h2>Application::ApplicationList</h2>
            应用列表<br>
            $list = \Application\Application::getInstance()->obList();
            <hr>
<pre>
<?php
$listapplication = \Application\Application::getInstance()->obList();
print_r($listapplication);
?>
</pre>

            <h2>Server::ApplicationConfig</h2>
            应用配置 必须与server的应用列表对应
            <br>$res = Grace\Server\Server::getInstance()->ApplicationConfig();
            <hr>
<pre>
//这两个必须相等
$res = \Application\Server::getInstance()->ApplicationConfig();
= \Application\Application::getInstance()->obList();
</pre>
<pre>
<?php
$res = Grace\Server\Server::getInstance()->Config('Application'); // 获取application配置  ->Config/Application.php
print_r($res);
?>
</pre>


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

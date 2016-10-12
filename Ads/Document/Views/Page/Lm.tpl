<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> {$lmlist[$smarty.get.lm|urldecode]} - {$booklist[$smarty.get.book|urldecode]} -文档</title>
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="list-group col-sm-12  col-md-12 main">
            <a href="/addons/?document/page/book&book={$smarty.get.book}" class="list-group-item active">
                首页 > {$booklist[$smarty.get.book|urldecode]} > {$lmlist[$smarty.get.lm|urldecode]}
            </a>

            {foreach from=$wzlist key=key item=item}
                <a href="/addons/?document/page/show&book={$smarty.get.book}&lm={$smarty.get.lm}&ar={$key|urlencode}" class="list-group-item">{$item}</a>
            {/foreach}

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

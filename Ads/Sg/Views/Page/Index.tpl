<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{$smarty.get.chr}</title>
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="list-group col-sm-12  col-md-12 main">
            <a href="/" class="list-group-item active">
                返回
            </a>
            <div style="padding: 10px">
                {$nr}
            </div>
        </div>

        <div class="list-group col-sm-12  col-md-12 main">
            <a href="/addons/?sg/page/edit&chr={$smarty.get.chr}" class="list-group-item">
                修改
            </a>
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

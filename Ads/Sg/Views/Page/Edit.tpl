<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>编辑 - {$smarty.get.chr}</title>
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
</head>

<body>





<div class="container-fluid">
    <form class="form-horizontal" method="post" action="/addons/?sg/page/edit">
    <div class="row">
        <div class="list-group col-sm-12  col-md-12 main">
            <a href="/addons/?sg/page/index&chr={$smarty.get.chr}" class="list-group-item active">
                返回 -> {$smarty.get.chr}
            </a>
        </div>

        <div style="padding: 10px">
            <div class="form-group col-sm-12">
                <label for="inputPassword3">{$smarty.get.chr}</label>
                <textarea name="Datady_{$smarty.get.chr}" class="form-control" rows="22">{$dt}</textarea>
            </div>
        </div>

        <div class="list-group col-sm-12  col-md-12 main">
            <input name="chr" type="hidden" value="{$smarty.get.chr}" class="form-control">
            <button type="submit" class=" list-group-item btn btn-default">修改</button>
            <footer class="footer">
                <hr>
                <p class="text-muted">@copy Shampeak.</p>
            </footer>
        </div>

    </div>
    </form>
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

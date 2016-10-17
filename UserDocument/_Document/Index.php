<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Application Document Index</title>
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
</head>

<body>


<div class="container-fluid">
    <div class="row">


		<div class="list-group col-sm-9 col-md-10 main">
            <a href="javascript:void(0)" class="list-group-item active">
            BookList
            </a>
            <?php
            foreach($booklistInfo as $key => $value):
            ?>
            <a href="<?=$entrancefile?>&book=<?=$key?>"  class="list-group-item"><?=$value['title']?></a>
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

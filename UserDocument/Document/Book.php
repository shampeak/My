<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Application Document <?=$book?></title>
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
        <div class="list-group col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

 			<h3>
            <?=$booklistInfo[$book]['title']?> 
            </h3>
            <h5><small><?=$booklistInfo[$book]['description']?></small><h5>
            
 			<?php
			//D($data);
			foreach($lmlist as $key=>$value):
				?>
				<a href="<?=$entrancefile?>&book=<?=$book?>&lm=<?=$value?>" class="list-group-item"><?=$value?></a>
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

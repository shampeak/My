<?php
/* Smarty version 3.1.30, created on 2016-10-17 11:23:41
  from "E:\phpleague\Grace\My\Ads\Sg\Views\Page\Edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5804443d8e1ee5_65192997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23e20cf00a4afd026e2cd9a9c3c0898e21e2a796' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Sg\\Views\\Page\\Edit.tpl',
      1 => 1476257360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5804443d8e1ee5_65192997 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>编辑 - <?php echo $_GET['chr'];?>
</title>
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
</head>

<body>





<div class="container-fluid">
    <form class="form-horizontal" method="post" action="/addons/?sg/page/edit">
    <div class="row">
        <div class="list-group col-sm-12  col-md-12 main">
            <a href="/addons/?sg/page/index&chr=<?php echo $_GET['chr'];?>
" class="list-group-item active">
                返回 -> <?php echo $_GET['chr'];?>

            </a>
        </div>

        <div style="padding: 10px">
            <div class="form-group col-sm-12">
                <label for="inputPassword3"><?php echo $_GET['chr'];?>
</label>
                <textarea name="Datady_<?php echo $_GET['chr'];?>
" class="form-control" rows="22"><?php echo $_smarty_tpl->tpl_vars['dt']->value;?>
</textarea>
            </div>
        </div>

        <div class="list-group col-sm-12  col-md-12 main">
            <input name="chr" type="hidden" value="<?php echo $_GET['chr'];?>
" class="form-control">
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
<?php echo '<script'; ?>
 src="/assets/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/bootstrap-3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/Sham.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(e) {
    });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}

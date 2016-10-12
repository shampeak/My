<?php
/* Smarty version 3.1.30, created on 2016-10-11 18:09:43
  from "E:\phpleague\Grace\My\Ads\Document\Views\Page\Show.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fcba67caee77_17782891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58048d2c4008aca02306f1c938a96cd7f851668f' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Document\\Views\\Page\\Show.tpl',
      1 => 1476180582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fcba67caee77_17782891 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $_smarty_tpl->tpl_vars['wzlist']->value[urldecode($_GET['ar'])];?>
 -> <?php echo $_smarty_tpl->tpl_vars['lmlist']->value[urldecode($_GET['lm'])];?>
  -> <?php echo $_smarty_tpl->tpl_vars['booklist']->value[urldecode($_GET['book'])];?>
</title>
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
</head>

<body>





<div class="container-fluid">
    <div class="row">
        <div class="list-group col-sm-12  col-md-12 main">
            <a href="/addons/?document/page/lm&book=<?php echo $_GET['book'];?>
&lm=<?php echo $_GET['lm'];?>
" class="list-group-item active">
                首页 > <?php echo $_smarty_tpl->tpl_vars['booklist']->value[urldecode($_GET['book'])];?>
 > <?php echo $_smarty_tpl->tpl_vars['lmlist']->value[urldecode($_GET['lm'])];?>
 -> <?php echo $_smarty_tpl->tpl_vars['wzlist']->value[urldecode($_GET['ar'])];?>

            </a>
            <div style="padding: 10px">
            <?php echo $_smarty_tpl->tpl_vars['nr']->value;?>

            </div>
            <footer class="footer">
                <hr>
                <p class="text-muted">@copy Shampeak.</p>
            </footer>
        </div>
    </div>
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

<?php
/* Smarty version 3.1.30, created on 2016-10-11 17:58:13
  from "E:\phpleague\Grace\My\Ads\Document\Views\Page\Ar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fcb7b57901c6_24784061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f475c262bf7e7c08cf3f9b356cfe08239c42044' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Document\\Views\\Page\\Ar.tpl',
      1 => 1476179757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fcb7b57901c6_24784061 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Application Document <?php echo '<?=';?>$lm<?php echo '?>';?> <?php echo '<?=';?>$ar<?php echo '?>';?></title>
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="list-group col-sm-9  col-md-10 main">
            <a href="/addons/?document/page/lm&book=<?php echo $_GET['book'];?>
&lm=<?php echo $_GET['lm'];?>
" class="list-group-item active">
                > 上一级
            </a>
            <h3>
                <?php echo $_smarty_tpl->tpl_vars['booklistInfo']->value[$_GET['book']]['title'];?>

            </h3>
            <h5><small><?php echo $_smarty_tpl->tpl_vars['booklistInfo']->value[$_GET['book']]['description'];?>
</small><h5>

                    <?php echo $_smarty_tpl->tpl_vars['nr']->value;?>

1
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

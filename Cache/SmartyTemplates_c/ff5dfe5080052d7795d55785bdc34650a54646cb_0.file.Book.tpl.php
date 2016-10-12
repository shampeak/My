<?php
/* Smarty version 3.1.30, created on 2016-10-11 18:03:56
  from "E:\phpleague\Grace\My\Ads\Document\Views\Page\Book.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fcb90cbaa533_11967274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff5dfe5080052d7795d55785bdc34650a54646cb' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Document\\Views\\Page\\Book.tpl',
      1 => 1476180208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fcb90cbaa533_11967274 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $_smarty_tpl->tpl_vars['booklist']->value[urldecode($_GET['book'])];?>
 - 文档</title>
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="list-group col-sm-12  col-md-12 main">
            <a href="/addons/?document/page/index" class="list-group-item active">
                首页 > <?php echo $_smarty_tpl->tpl_vars['booklist']->value[urldecode($_GET['book'])];?>
 >
            </a>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lmlist']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <a href="/addons/?document/page/lm&book=<?php echo $_GET['book'];?>
&lm=<?php echo urlencode($_smarty_tpl->tpl_vars['key']->value);?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
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

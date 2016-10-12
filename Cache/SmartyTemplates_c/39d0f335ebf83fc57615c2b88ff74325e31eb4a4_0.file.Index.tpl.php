<?php
/* Smarty version 3.1.30, created on 2016-10-12 11:37:36
  from "E:\phpleague\Grace\My\Ads\Sg\Views\Page\Index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fdb000a77a58_15521933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d0f335ebf83fc57615c2b88ff74325e31eb4a4' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Sg\\Views\\Page\\Index.tpl',
      1 => 1476243454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fdb000a77a58_15521933 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $_GET['chr'];?>
</title>
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
                <?php echo $_smarty_tpl->tpl_vars['nr']->value;?>

            </div>
        </div>

        <div class="list-group col-sm-12  col-md-12 main">
            <a href="/addons/?sg/page/edit&chr=<?php echo $_GET['chr'];?>
" class="list-group-item">
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

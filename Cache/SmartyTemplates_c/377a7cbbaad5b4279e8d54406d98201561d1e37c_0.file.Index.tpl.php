<?php
/* Smarty version 3.1.30, created on 2016-11-11 15:46:11
  from "E:\phpleague\Grace\My\Ads\Jiebei\Views\Page\Index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58257743ba7158_00158164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '377a7cbbaad5b4279e8d54406d98201561d1e37c' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Jiebei\\Views\\Page\\Index.tpl',
      1 => 1478850271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Widget/HeadINdex.tpl' => 1,
  ),
),false)) {
function content_58257743ba7158_00158164 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['res']->value['description'];?>
">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo $_smarty_tpl->tpl_vars['res']->value['title'];?>
</title>
    <!-- Bootstrap -->
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <style>#te { padding-left: 0px;padding-right: 0px; }</style>
</head>
<body>


<div class="container-fluid">

    <div class="row">
        <div class="col-md-12" id="te">

            <div class="list-group">
                <?php $_smarty_tpl->_subTemplateRender("file:../Widget/HeadINdex.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <a href="/addons/?gupiao/page/code&code=<?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
" class="list-group-item btn btn-primary btn-lg"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
        <div class="col-xs-6">
            <div class="list-group">
            <a href="/addons/?gupiao/page/opt&act=b&code=<?php echo $_GET['code'];?>
" type="button" class="btn btn-default btn-lg btn-block">债权</a>
            <a href="/addons/?gupiao/page/opt&act=s&code=<?php echo $_GET['code'];?>
" type="button" class="btn btn-default btn-lg btn-block">债务</a>
            </div>
        </div>

        <div class="col-xs-6">
            <div class="list-group">
            <a href="/addons/?gupiao/page/code&code=<?php echo $_GET['code'];?>
" type="button" class="btn btn-primary btn-lg btn-block">融资</a>
            <a href="/addons/?gupiao/page/check&code=<?php echo $_GET['code'];?>
" type="button" class="btn btn-primary btn-lg btn-block">资产</a>
            </div>
        </div>

        <div class="col-xs-6">
            <div class="list-group">
            <a href="/addons/?gupiao/page/code&code=<?php echo $_GET['code'];?>
" type="button" class="btn btn-primary btn-lg btn-block">网商</a>
            <a href="/addons/?gupiao/page/check&code=<?php echo $_GET['code'];?>
" type="button" class="btn btn-primary btn-lg btn-block">微众</a>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="list-group">
                <a href="/addons/?gupiao/page/opt&act=b&code=<?php echo $_GET['code'];?>
" type="button" class="btn btn-default btn-lg btn-block">债权</a>
                <a href="/addons/?gupiao/page/opt&act=s&code=<?php echo $_GET['code'];?>
" type="button" class="btn btn-default btn-lg btn-block">合计</a>
            </div>
        </div>

    </div>
</div>

<div class="list-group navbar-fixed-bottom">
    <a href="/addons/?gupiao/page/add" class="list-group-item btn btn-primary btn-lg ">添加新的</a>
</div>


</body>
</html>
<?php }
}

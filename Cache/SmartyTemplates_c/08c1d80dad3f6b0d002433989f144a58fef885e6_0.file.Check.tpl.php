<?php
/* Smarty version 3.1.30, created on 2016-10-21 10:06:25
  from "E:\phpleague\Grace\My\Ads\Gupiao\Views\Page\Check.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5809782125a0b0_41119888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08c1d80dad3f6b0d002433989f144a58fef885e6' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Gupiao\\Views\\Page\\Check.tpl',
      1 => 1477015571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Widget/Top.tpl' => 1,
  ),
),false)) {
function content_5809782125a0b0_41119888 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\phpleague\\Grace\\My\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php';
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
    <link href="/assets/css/color.css" rel="stylesheet">
    <style>#te { padding-left: 0px;padding-right: 0px; }</style>
</head>
<body>


<div class="container-fluid">

    <?php $_smarty_tpl->_subTemplateRender("file:../Widget/Top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <div class="row">
        <div class="col-xs-12" id="te">
            <div style="margin: 0px 0px 5px 0px;"></div>
            <h3><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];
echo $_smarty_tpl->tpl_vars['row']->value['code'];?>
</h3>
            <hr>


            <h3>均价<small><?php echo $_smarty_tpl->tpl_vars['jiaquanjun']->value;?>
</small></h3>

            <form method="post" action="/addons/?gupiao/page/check_group&code=<?php echo $_GET['code'];?>
">
                <table class="table">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['optId'],$_smarty_tpl->tpl_vars['keylist']->value)) {
} else { ?>
                            <tr>
                                <td <?php if ($_smarty_tpl->tpl_vars['item']->value['opt'] == 'B') {?>class="danger"<?php } else { ?>class="success"<?php }?>>
                                    <input name="optgroup[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['optId'];?>
" type="checkbox">
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['createAt'],"%Y-%m-%d");?>
 => <?php echo $_smarty_tpl->tpl_vars['item']->value['num'];?>
X<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 = <?php echo $_smarty_tpl->tpl_vars['item']->value['num']*$_smarty_tpl->tpl_vars['item']->value['price'];?>

                                </td>
                                <td class="info" width="45">
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['opt'] == 'B') {?>
                                        <a href="/addons/?gupiao/page/check_ground/&code=<?php echo $_GET['code'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['optId'];?>
">底仓</a>
                                    <?php } else { ?>
                                    <?php }?>
                                </td>
                            </tr>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </table>
                <input type="hidden" name="code" value="<?php echo $_GET['code'];?>
">
                <button type="submit" class="btn btn-primary">组合</button>
            </form>

        </div>
        <div class="col-xs-12" id="te">
            <h3>已组合<small><?php echo $_smarty_tpl->tpl_vars['yingli']->value;?>
</small></h3>
            <table class="table">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['col']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <tr>
                        <td class="danger">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['group'], 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['i']->value]['opt'] == 'B') {?>
                                    <?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['i']->value]['num'];?>
X<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['i']->value]['price'];?>
 = <?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['i']->value]['num']*$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['i']->value]['price'];?>
<br>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </td>
                        <td class="success">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['group'], 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['i']->value]['opt'] != 'B') {?>
                                    <?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['i']->value]['num'];?>
X<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['i']->value]['price'];?>
 = <?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['i']->value]['num']*$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['i']->value]['price'];?>
<br>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['qian'];?>

                        </td>
                        <td class="info" width="45"><a href="/addons/?gupiao/page/check_ungroup/&code=<?php echo $_GET['code'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">解除</a></td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>

        </div>

        <div class="col-xs-12" id="te">
            <h3>底仓<small><?php echo $_smarty_tpl->tpl_vars['chengben']->value;?>
-><span class="red"><?php echo $_smarty_tpl->tpl_vars['chengben2']->value;?>
</span></small></h3>
            <table class="table">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ground']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <tr>
                        <td class="danger"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['createAt'],"%Y-%m-%d");?>
 => <?php echo $_smarty_tpl->tpl_vars['item']->value['num'];?>
X<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 = <?php echo $_smarty_tpl->tpl_vars['item']->value['num']*$_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
                        <td class="info" width="45"><a href="/addons/?gupiao/page/check_unground/&code=<?php echo $_GET['code'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['optId'];?>
">解除</a></a></td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>

        </div>



    </div>
</div>



</body>
</html>
<!--
class="active"
class="success"
class="danger"
class="info"
--><?php }
}

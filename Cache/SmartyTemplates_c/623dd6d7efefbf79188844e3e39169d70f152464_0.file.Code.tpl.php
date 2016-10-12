<?php
/* Smarty version 3.1.30, created on 2016-09-29 11:48:20
  from "E:\phpleague\Grace\My\Ads\Gupiao\Views\Page\Code.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ec8f04a5c088_27508691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '623dd6d7efefbf79188844e3e39169d70f152464' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Gupiao\\Views\\Page\\Code.tpl',
      1 => 1475120893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ec8f04a5c088_27508691 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="/assets/js/jquery-1.11.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/assets/js/Sham.js" type="text/javascript"><?php echo '</script'; ?>
>
    <style>#te { padding-left: 0px;padding-right: 0px; }</style>
</head>
<body>


<div class="container-fluid">

    <?php echo smarty_function_widget(array('ads'=>"gupiao/widget/top"),$_smarty_tpl);?>


    <div class="row">
        <div class="col-xs-12" id="te">
            <div style="margin: 0px 0px 5px 0px;"></div>
            <h3><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];
echo $_smarty_tpl->tpl_vars['row']->value['code'];?>
</h3>
            <hr>

            <table class="table">
                <!--
                class="active"
                class="success"
                class="danger"
                class="info"
                -->
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <tr <?php if ($_smarty_tpl->tpl_vars['item']->value['opt'] != 'B') {?>class="success"<?php } else { ?>class="danger"<?php }?>>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['createAt'],"%Y-%m-%d");?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['opt'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['num'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
                        <td><span class="glyphicon glyphicon-menu-right"></span><?php echo $_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['num'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 'ground') {?>
                            <?php } else { ?>
                                <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['optId'],$_smarty_tpl->tpl_vars['keylist']->value)) {?>
                                <?php } else { ?>
                                    <a class="shamget" comfirm="删除?" rel="/addons/?gupiao/page/delete/&code=<?php echo $_GET['code'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['optId'];?>
"><span class="glyphicon glyphicon-remove"></span></a>
                                <?php }?>
                            <?php }?>
                        </td>
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
<?php }
}

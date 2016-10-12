<?php
/* Smarty version 3.1.30, created on 2016-09-21 10:35:46
  from "E:\phpleague\Grace\My\Ads\Msource\Views\Html\Steponedata.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e1f202e80210_36359714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3614333561e210c2f364b5e9f1310a304578ee8a' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Msource\\Views\\Html\\Steponedata.tpl',
      1 => 1474425341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e1f202e80210_36359714 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12" >
        <h2>Step one</h2>
        <p>
            $file = pressstop.data
        </p>
    </div>
    <div class="col-md-5" >
        <h3>原始数据 [计算出来的]</h3>
        count :<?php echo count($_smarty_tpl->tpl_vars['flit']->value);?>
<br>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['flit']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
            <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>

    <div class="col-md-5" >
        <h3>扩展数据</h3>
        count :<?php echo count($_smarty_tpl->tpl_vars['ar']->value);?>
<br>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ar']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
            <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        <h3>无效数据</h3>
        count :<?php echo count($_smarty_tpl->tpl_vars['null']->value);?>
<br>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['null']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
            <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </div>
</div><?php }
}

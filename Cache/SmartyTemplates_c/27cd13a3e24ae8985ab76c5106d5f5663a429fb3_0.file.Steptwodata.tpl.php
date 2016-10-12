<?php
/* Smarty version 3.1.30, created on 2016-09-21 14:16:43
  from "E:\phpleague\Grace\My\Ads\Msource\Views\Html\Steptwodata.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e225cb94a915_41207447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27cd13a3e24ae8985ab76c5106d5f5663a429fb3' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Msource\\Views\\Html\\Steptwodata.tpl',
      1 => 1474438600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e225cb94a915_41207447 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h3>扩展数据 [去重]</h3>
        count :<?php echo count($_smarty_tpl->tpl_vars['ar']->value);?>
<br>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ar']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
            <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
:<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a><br>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



    </div>
</div><?php }
}

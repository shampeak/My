<?php
/* Smarty version 3.1.30, created on 2016-10-24 18:01:38
  from "E:\phpleague\Grace\My\Ads\Document\Views\Html\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580ddc026387a3_97035219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f7ba51259fc2d09e4ffe1f1f5f50d1dfc05cc7f' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Document\\Views\\Html\\List.tpl',
      1 => 1477303295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580ddc026387a3_97035219 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- content -->
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-hover" id="dt1">
            <thead>
            <th></th>
            <th width="150">操作</th>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
                    <td>
                    </td>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->tpl_vars['key']->value], 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
                    <tr>
                        <td>　　　 ┗　 <a href="/man/?document/html/listshow&path=<?php echo urlencode($_smarty_tpl->tpl_vars['item']->value);
echo urlencode('/');
echo urlencode($_smarty_tpl->tpl_vars['k']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></td>
                        <td>
                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
        </table>
    </div>
    <div class="col-md-6 ">
    </div>
</div>


<?php }
}

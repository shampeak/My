<?php
/* Smarty version 3.1.30, created on 2016-10-20 16:30:20
  from "E:\phpleague\Grace\My\Ads\Xt\Views\Html\Index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5808809cce9e45_81009522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5341bf1c535c08b0ccfc18e3962178164787f7b1' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Xt\\Views\\Html\\Index.tpl',
      1 => 1472808410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5808809cce9e45_81009522 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- content -->
<div class="row">
    <div class="col-md-9">
        <table class="table table-striped table-hover" id="dt1">
            <thead>
            <th>ID</th>
            <th>组名</th>
            <th>chr</th>
            <th>描述</th>
            <th>排序</th>
            <th>active</th>
            <th width="150">操作</th>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['groupId'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['groupName'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['groupChr'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['des'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['sort'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['active'];?>
</td>
                    <td>
                        <a href="/man/?usergroup/html/edit&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['groupId'];?>
">修改</a>
                        <a class="shamget" rel="/man/?usergroup/html/delete&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['groupId'];?>
" comfirm="是否删除?">删除</a>
                    </td>
                </tr>
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

<?php
/* Smarty version 3.1.30, created on 2016-09-19 16:54:41
  from "E:\phpleague\Grace\My\Ads\Config\Views\Html\Man.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57dfa7d11afde8_42589482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f08752a0bd17d31ffbdc0a0828b18b4f7acb7a5' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Config\\Views\\Html\\Man.tpl',
      1 => 1474252676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57dfa7d11afde8_42589482 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- content -->
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-hover" id="dt1">
            <thead>
            <th>ID</th>
            <th>名称</th>
            <th width="80">类型</th>
            <th width="80">分组</th>
            <th>说明</th>
            <th>解释</th>
            <th>值选择范围</th>
            <th>值</th>
            <th width="80">状态</th>
            <th width="80">排序</th>
            <th width="150">操作</th>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['group'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['remark'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['extra'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['sort'];?>
</td>
                    <td>
                        <a href="/man/?config/html/edit&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">修改</a>
                        <a class="shamget" rel="/man/?config/html/delete&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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

<?php
/* Smarty version 3.1.30, created on 2016-09-19 16:02:24
  from "E:\phpleague\Grace\My\Ads\Menu\Views\Html\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57df9b905b49a8_52530032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b9f775baf936ef73661685dc3e9b3ada4b793d8' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Menu\\Views\\Html\\List.tpl',
      1 => 1473839035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57df9b905b49a8_52530032 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- content -->
<div class="row">
    <div class="col-md-4">
        <table class="table table-hover" id="dt1">
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['toplist']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                <tr <?php if ($_smarty_tpl->tpl_vars['item']->value['menuId'] == $_GET['topid']) {?>class="info"<?php }?>>
                    <td><a href="/man/?menu/html/list&topid=<?php echo $_smarty_tpl->tpl_vars['item']->value['menuId'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                    <td>[<?php echo $_smarty_tpl->tpl_vars['item']->value['ads'];?>
]</td>
                    <td>
                        <a href="/man/?menu/html/edit&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['menuId'];?>
">修改</a>
                        <a class="shamget" rel="/man/?menu/html/delete&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['menuId'];?>
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
    <div class="col-md-4">
    <?php if ($_GET['topid'] != '') {?>
        <table class="table table-hover" id="dt1">
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['seclist']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                <tr <?php if ($_smarty_tpl->tpl_vars['item']->value['menuId'] == $_GET['parentid']) {?>class="info"<?php }?>>
                    <td><a href="/man/?menu/html/list&topid=<?php echo $_GET['topid'];?>
&parentid=<?php echo $_smarty_tpl->tpl_vars['item']->value['menuId'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                    <td>[<?php echo $_smarty_tpl->tpl_vars['item']->value['ads'];?>
]</td>
                    <td>
                        <a href="/man/?menu/html/edit&topid=<?php echo $_GET['topid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['menuId'];?>
">修改</a>
                        <a class="shamget" rel="/man/?menu/html/delete&topid=<?php echo $_GET['topid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['menuId'];?>
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
    <?php }?>
    </div>
    <div class="col-md-4 ">
        <?php if ($_GET['parentid'] != '') {?>
            <table class="table table-hover" id="dt1">
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
                        <td>[<?php echo $_smarty_tpl->tpl_vars['item']->value['ads'];?>
]</td>
                        <td>
                            <a href="/man/?menu/html/edit&topid=<?php echo $_GET['topid'];?>
&parentid=<?php echo $_GET['parentid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['menuId'];?>
">修改</a>
                            <a class="shamget" rel="/man/?menu/html/delete&topid=<?php echo $_GET['topid'];?>
&parentid=<?php echo $_GET['parentid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['menuId'];?>
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
        <?php }?>
    </div>
</div>



<?php }
}

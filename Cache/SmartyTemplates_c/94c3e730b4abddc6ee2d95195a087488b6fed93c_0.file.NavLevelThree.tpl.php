<?php
/* Smarty version 3.1.30, created on 2016-09-19 15:53:19
  from "E:\phpleague\Grace\My\Ads\Menu\Views\Widget\NavLevelThree.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57df996facee68_11723704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94c3e730b4abddc6ee2d95195a087488b6fed93c' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Menu\\Views\\Widget\\NavLevelThree.tpl',
      1 => 1472637999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57df996facee68_11723704 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="nav nav-tabs" role="tablist" style="margin: 0px 0px 10px 0px;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_navlevelthree']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['hidden'] != 1) {?>
            <li role="presentation" <?php if ($_smarty_tpl->tpl_vars['item']->value['active'] != 0) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
"><span class="<?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
" ></span> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2016-10-24 17:30:32
  from "E:\phpleague\Grace\My\Ads\Document\Views\Html\Add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580dd4b88a8df0_11236926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e5268ec96f463987781fc1fa30372b53ef9eb29' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Document\\Views\\Html\\Add.tpl',
      1 => 1477301428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580dd4b88a8df0_11236926 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <form class="form-horizontal" method="post" action="/man/?document/html/add">
        <div class="col-md-6 ">


            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">路径</label>
                <div class="col-sm-10">
                    <select class="form-control" name="cname">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <option value="<?php echo urlencode($_smarty_tpl->tpl_vars['key']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->tpl_vars['key']->value], 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
                                <option value="<?php echo urlencode($_smarty_tpl->tpl_vars['key']->value);
echo urlencode('/');
echo urlencode($_smarty_tpl->tpl_vars['k']->value);?>
">　┗　 <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
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

                    </select>
                </div>
            </div>


            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input name="title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
" class="form-control"  placeholder="名称">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">添加</button>
                </div>
            </div>

        </div>

    </form>
</div>






<?php }
}

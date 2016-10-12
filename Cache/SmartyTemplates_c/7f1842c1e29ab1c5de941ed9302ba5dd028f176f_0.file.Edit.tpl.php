<?php
/* Smarty version 3.1.30, created on 2016-09-28 17:15:19
  from "E:\phpleague\Grace\My\Ads\Setup\Views\Html\Edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57eb8a272dca72_70819355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f1842c1e29ab1c5de941ed9302ba5dd028f176f' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Setup\\Views\\Html\\Edit.tpl',
      1 => 1475054116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57eb8a272dca72_70819355 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <form class="form-horizontal" method="post" action="/man/?setup/html/edit">
        <div class="col-md-6 ">

            <div class="page-header">
                <h5>List</h5>
            </div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input name="list[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][title]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['key']->value]['title'];?>
" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <input name="list[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][des]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['key']->value]['des'];?>
" class="form-control" placeholder="描述">
                </div>
            </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">访问地址</label>
                    <div class="col-sm-10">
                        <input name="list[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][url]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['key']->value]['url'];?>
" class="form-control" placeholder="访问地址">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">排序</label>
                    <div class="col-sm-10">
                        <input name="list[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][sort]" value="<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['key']->value]['sort'];?>
" class="form-control" placeholder="排序">
                    </div>
                </div>


                <hr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




            <div class="page-header">
                <h5>Add</h5>
            </div>


            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input name="newtitle" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['groupName'];?>
" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <input name="newdes" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['groupChr'];?>
" class="form-control" placeholder="描述">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">访问地址</label>
                <div class="col-sm-10">
                    <input  name="newurl" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['des'];?>
" class="form-control" placeholder="访问地址">
                </div>
            </div>

            <hr>



            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="hidden" name="groupId" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['groupId'];?>
">
                    <button type="submit" class="btn btn-default">修改</button>
                </div>
            </div>

        </div>

    </form>
</div>
<?php }
}

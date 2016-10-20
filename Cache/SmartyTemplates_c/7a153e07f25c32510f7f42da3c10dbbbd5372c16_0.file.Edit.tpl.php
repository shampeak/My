<?php
/* Smarty version 3.1.30, created on 2016-10-20 14:11:42
  from "E:\phpleague\Grace\My\Ads\Mysetup\Views\Html\Edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5808601e2ee353_01290223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a153e07f25c32510f7f42da3c10dbbbd5372c16' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Mysetup\\Views\\Html\\Edit.tpl',
      1 => 1476943897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5808601e2ee353_01290223 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <form class="form-horizontal" method="post" action="/man/?mysetup/html/edit">
        <div class="col-md-6 ">

            <div class="page-header">
                <h5>List</h5>
            </div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                <div class=" <?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['key']->value]['bgcolor'];?>
">
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
                    <label for="inputPassword3" class="col-sm-2 control-label">访问地址</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="list[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][bgcolor]">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bgcolorlist']->value, 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['key']->value]['bgcolor'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
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
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        </div>

        <div class="col-md-6 ">

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

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">访问地址</label>
                <div class="col-sm-10">
                    <select class="form-control" name="newbgcolor">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bgcolorlist']->value, 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
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

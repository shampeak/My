<?php
/* Smarty version 3.1.30, created on 2016-10-12 09:33:23
  from "E:\phpleague\Grace\My\Ads\Setup\Views\Html\Dy.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fd92e3201e57_40274189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd308af2b7b12a58f5ac0371ae8f70e3e52629ce7' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Setup\\Views\\Html\\Dy.tpl',
      1 => 1476236001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fd92e3201e57_40274189 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <form class="form-horizontal" method="post" action="/man/?setup/html/dy">
        <div class="col-md-6 ">

            <div class="page-header">
                <h5>单页内容索引</h5>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">  </label>
                <div class="col-sm-10">
                    <textarea name="Datadylist" class="form-control" rows="10"><?php echo $_smarty_tpl->tpl_vars['res']->value;?>
</textarea>
                    <p class="help-block">根据该索引，获取单页内容</p>
                </div>
            </div>

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

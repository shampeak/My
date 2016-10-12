<?php
/* Smarty version 3.1.30, created on 2016-09-29 17:41:26
  from "E:\phpleague\Grace\My\Ads\Setup\Views\Html\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ece1c681d402_78062799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '452f363198b92f33218204c17f4fbe83a33eb8b2' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Setup\\Views\\Html\\List.tpl',
      1 => 1475142084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ece1c681d402_78062799 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <form class="form-horizontal" method="post" action="/man/?setup/html/list">
        <div class="col-md-6 ">

            <div class="page-header">
                <h5>List</h5>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">类型 : </label>
                <div class="col-sm-10">
                    <textarea name="Datalist" class="form-control" rows="10"><?php echo $_smarty_tpl->tpl_vars['res']->value;?>
</textarea>
                    <p class="help-block">数据接口 测试 : http://my.so/addons/?aaddss</p>
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

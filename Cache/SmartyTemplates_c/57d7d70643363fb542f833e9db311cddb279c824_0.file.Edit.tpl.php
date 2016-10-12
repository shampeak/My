<?php
/* Smarty version 3.1.30, created on 2016-09-20 10:34:20
  from "E:\phpleague\Grace\My\Ads\Mclass\Views\Html\Edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e0a02c9c0908_18607026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57d7d70643363fb542f833e9db311cddb279c824' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Mclass\\Views\\Html\\Edit.tpl',
      1 => 1474338856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e0a02c9c0908_18607026 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12" >

        <form  class="form-horizontal" method="post" action="/man/?mclass/html/edit">

            <div class="form-group">

                <label for="inputEmail3" class="col-sm-1 control-label">类别设置</label>

                <div class="col-sm-3">
                    <label for="inputEmail3">大类</label>
                    <textarea name="mclassdatada" class="form-control" rows="20"><?php echo $_smarty_tpl->tpl_vars['datada']->value;?>
</textarea>
                </div>


                <div class="col-sm-3">
                    <label for="inputEmail3">小类</label>
                    <textarea name="mclassdataxiao" class="form-control" rows="20"><?php echo $_smarty_tpl->tpl_vars['dataxiao']->value;?>
</textarea>
                </div>

                <div class="col-sm-3">
                    <label for="inputEmail3">关系</label>
                    <textarea name="mclassdatarela" class="form-control" rows="20"><?php echo $_smarty_tpl->tpl_vars['datarela']->value;?>
</textarea>
                </div>

            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-default" value="提交">
                </div>
            </div>

        </form>

    </div>
</div>

<?php }
}

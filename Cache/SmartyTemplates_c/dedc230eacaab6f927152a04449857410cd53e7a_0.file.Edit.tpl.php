<?php
/* Smarty version 3.1.30, created on 2016-09-20 14:23:32
  from "E:\phpleague\Grace\My\Ads\Msource\Views\Html\Edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e0d5e4e1f7b9_14690910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dedc230eacaab6f927152a04449857410cd53e7a' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Msource\\Views\\Html\\Edit.tpl',
      1 => 1474352610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e0d5e4e1f7b9_14690910 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12" >

        <form  class="form-horizontal" method="post" action="/man/?msource/html/edit">

            <div class="form-group">
                <div class="col-sm-10">
                <label for="inputEmail3" class="control-label">来源索引</label>
                </div>
                <div class="col-sm-8">
                    <label for="inputEmail3">爬行一次</label><a class="btn btn-primary">任务</a>
                    <textarea name="moviesource1" class="form-control" rows="30"><?php echo $_smarty_tpl->tpl_vars['data1']->value;?>
</textarea>
                </div>


                <!-- div class="col-sm-3">
                    <label for="inputEmail3">2</label>
                    <textarea name="moviesource2" class="form-control" rows="30"><?php echo $_smarty_tpl->tpl_vars['data2']->value;?>
</textarea>
                </div -->

                <div class="col-sm-8">
                    <label for="inputEmail3">索引不爬行</label><a class="btn btn-primary">任务</a>
                    <textarea name="moviesource3" class="form-control" rows="30"><?php echo $_smarty_tpl->tpl_vars['data3']->value;?>
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

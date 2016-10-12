<?php
/* Smarty version 3.1.30, created on 2016-10-12 10:25:16
  from "E:\phpleague\Grace\My\Ads\Setup\Views\Html\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fd9f0c5c3c32_32785791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '452f363198b92f33218204c17f4fbe83a33eb8b2' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Setup\\Views\\Html\\List.tpl',
      1 => 1476238899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fd9f0c5c3c32_32785791 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="form-horizontal" method="post" action="/man/?setup/html/list">

    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h5>List</h5>
            </div>
        </div>

        <div class="col-md-6 ">
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="inputEmail3">Data : </label>
                    <textarea name="ListDataadsApplication" class="form-control" rows="10"><?php echo $_smarty_tpl->tpl_vars['ListDataadsApplication']->value;?>
</textarea>
                    <p class="help-block">调用 : application('data')->get($key)</p>
                </div>
            </div>




        </div>
        <div class="col-md-6 ">
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="inputEmail3">Config : </label>
                    <textarea name="ListDataadsConfig" class="form-control" rows="10"><?php echo $_smarty_tpl->tpl_vars['ListDataadsConfig']->value;?>
</textarea>
                    <p class="help-block">调用 : config($key)</p>
                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h5>Adsdata</h5>
            </div>
        </div>
        <div class="col-md-4 ">

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="inputEmail3">Adsdata_data : </label>
                    <textarea name="ListDataAds" class="form-control" rows="10"><?php echo $_smarty_tpl->tpl_vars['ListDataAds']->value;?>
</textarea>
                    <p class="help-block">数据接口 测试 : http://my.so/addons/?aaddss</p>
                </div>
            </div>


        </div>
        <div class="col-md-4 ">

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="inputEmail3">Adsdata_html : </label>
                    <textarea name="ListDataAdshtml" class="form-control" rows="10"><?php echo $_smarty_tpl->tpl_vars['ListDataAdshtml']->value;?>
</textarea>
                    <p class="help-block">数据接口 测试 : http://my.so/addons/?aaddss</p>
                </div>
            </div>

        </div>
        <div class="col-md-4 ">

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="inputEmail3">Adsdata_widget : </label>
                    <textarea name="ListDataAdswidget" class="form-control" rows="10"><?php echo $_smarty_tpl->tpl_vars['ListDataAdswidget']->value;?>
</textarea>
                    <p class="help-block">数据接口 测试 : http://my.so/addons/?aaddss</p>
                </div>
            </div>


        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                    <input type="hidden" name="groupId" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['groupId'];?>
">
                    <button type="submit" class="btn btn-primary">修改</button>
            </div>
        </div>
    </div>


</form>



<?php }
}

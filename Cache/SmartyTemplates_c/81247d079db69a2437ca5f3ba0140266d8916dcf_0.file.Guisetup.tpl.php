<?php
/* Smarty version 3.1.30, created on 2016-09-19 15:55:44
  from "E:\phpleague\Grace\My\Ads\Pm\Views\Html\Guisetup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57df9a008fc0e2_40392637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81247d079db69a2437ca5f3ba0140266d8916dcf' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Pm\\Views\\Html\\Guisetup.tpl',
      1 => 1474187635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57df9a008fc0e2_40392637 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="nav nav-tabs" style="margin: 0px 0px 10px 0px;" role="tablist">
    <li role="presentation">
        <a href="/man/?/pm/html/list">
            <span class="glyphicon glyphicon-home"></span>
            列表
        </a>
    </li>
    <li role="presentation">
        <a href="/man/?/pm/html/setup">
            <span class="glyphicon glyphicon-home"></span>
            设置
        </a>
    </li>
    <li  class="active"  role="presentation">
        <a href="/man/?/pm/html/guisetup">
            <span class="glyphicon glyphicon-home"></span>
            界面设置
        </a>
    </li>

</ul>

    <div class="row">
        <div class="col-md-12" >

            <form class="form-horizontal" method="post" action="/man/?/pm/html/guisetup">

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">面包屑</label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label>
                                <input type="radio" name="Breadcrumb" id="optionsRadios1" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['Breadcrumb'] == 1) {?>checked<?php }?>>
                                打开
                            </label>
                            <label>
                                <input type="radio" name="Breadcrumb" id="optionsRadios1" value="0" <?php if ($_smarty_tpl->tpl_vars['config']->value['Breadcrumb'] != 1) {?>checked<?php }?>>
                                关闭
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Tip</label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label>
                                <input type="radio" name="Tip" id="optionsRadios1" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['Tip'] == 1) {?>checked<?php }?>>
                                打开
                            </label>
                            <label>
                                <input type="radio" name="Tip" id="optionsRadios1" value="0" <?php if ($_smarty_tpl->tpl_vars['config']->value['Tip'] != 1) {?>checked<?php }?>>
                                关闭
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Footer</label>
                    <div class="col-sm-10">
                        <div class="radio">
                            <label>
                                <input type="radio" name="Footer" id="optionsRadios1" value="1" <?php if ($_smarty_tpl->tpl_vars['config']->value['Footer'] == 1) {?>checked<?php }?>>
                                打开
                            </label>
                            <label>
                                <input type="radio" name="Footer" id="optionsRadios1" value="0" <?php if ($_smarty_tpl->tpl_vars['config']->value['Footer'] != 1) {?>checked<?php }?>>
                                关闭
                            </label>
                        </div>
                    </div>
                </div>




                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">提交</button>
                    </div>
                </div>

            </form>



</div>
</div><?php }
}

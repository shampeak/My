<?php
/* Smarty version 3.1.30, created on 2016-09-19 16:17:14
  from "E:\phpleague\Grace\My\Ads\Usergroup\Views\Html\Add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57df9f0ade7c02_48061097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3144cee3d655ec0951a2efd8bdc11ef82603482b' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Usergroup\\Views\\Html\\Add.tpl',
      1 => 1472637999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57df9f0ade7c02_48061097 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <form class="form-horizontal" method="post" action="/man/?usergroup/html/add">
        <div class="col-md-6 ">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">组名</label>
                <div class="col-sm-10">
                    <input name="groupName" value="" class="form-control" placeholder="组名">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">标识</label>
                <div class="col-sm-10">
                    <input name="groupChr" value="" class="form-control" placeholder="标识">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">描述</label>
                <div class="col-sm-10">
                    <input  name="des" value="" class="form-control" placeholder="描述">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">排序</label>
                <div class="col-sm-10">
                    <input  name="sort" value="" class="form-control" placeholder="排序">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Active</label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="active" value="1" checked>
                            打开
                        </label>
                        <label>
                            <input type="radio" name="active" value="0" >
                            关闭
                        </label>
                    </div>
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

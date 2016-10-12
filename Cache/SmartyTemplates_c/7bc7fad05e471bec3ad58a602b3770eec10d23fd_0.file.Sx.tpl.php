<?php
/* Smarty version 3.1.30, created on 2016-09-29 16:46:28
  from "E:\phpleague\Grace\My\Ads\Sw\Views\Page\Sx.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ecd4e433bd11_66996966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bc7fad05e471bec3ad58a602b3770eec10d23fd' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Sw\\Views\\Page\\Sx.tpl',
      1 => 1475138784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ecd4e433bd11_66996966 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <form role="form">
        <div class="form-group">
            <label for="exampleInputEmail1">类型</label>
            <input type="text" class="form-control" placeholder="类型">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">排序</label>
            <input type="text" class="form-control" placeholder="排序">
            <p class="help-block">规则 倒序.</p>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Active</label>
            <div class="radio">
                <label>
                    <input type="radio" name="active" value="1" checked>
                    有效
                </label>
                <label>
                    <input type="radio" name="active" value="0" >
                    无效
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Final </label> <small>规则 倒序.</small>
            <div class="radio">
                <label>
                    <input type="radio" name="active" value="1" checked>
                    是
                </label>
                <label>
                    <input type="radio" name="active" value="0" >
                    否
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-default">提交</button>
    </form>
<?php }
}

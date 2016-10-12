<?php
/* Smarty version 3.1.30, created on 2016-09-29 11:50:55
  from "E:\phpleague\Grace\My\Ads\Gupiao\Views\Widget\Top.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ec8f9f7fca79_07038694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8744bfd0eed63980ea86c49f50e2d316a9ad3c6a' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Gupiao\\Views\\Widget\\Top.tpl',
      1 => 1475121053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ec8f9f7fca79_07038694 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-xs-12" id="te">
        <div style="margin: 0px 0px 5px 0px;"></div>
        <a href="/addons/?gupiao/page/index" type="button" class="btn btn-primary  btn-lg btn-block">返回</a>
        <div style="margin: 0px 0px 5px 0px;"></div>
    </div>
    <div class="col-xs-6">
        <a href="/addons/?gupiao/page/opt&act=b&code=<?php echo $_GET['code'];?>
" type="button" class="btn btn-default btn-lg btn-block">买入</a>
        <a href="/addons/?gupiao/page/opt&act=s&code=<?php echo $_GET['code'];?>
" type="button" class="btn btn-default btn-lg btn-block">卖出</a>
    </div>
    <div class="col-xs-6">
        <a href="/addons/?gupiao/page/code&code=<?php echo $_GET['code'];?>
" type="button" class="btn btn-primary btn-lg btn-block">历史</a>
        <a href="/addons/?gupiao/page/check&code=<?php echo $_GET['code'];?>
" type="button" class="btn btn-primary btn-lg btn-block">核对</a>
    </div>
</div><?php }
}

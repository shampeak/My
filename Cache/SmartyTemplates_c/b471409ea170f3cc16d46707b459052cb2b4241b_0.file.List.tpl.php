<?php
/* Smarty version 3.1.30, created on 2016-09-20 11:15:07
  from "E:\phpleague\Grace\My\Ads\Mclass\Views\Html\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e0a9bbee42c7_98281749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b471409ea170f3cc16d46707b459052cb2b4241b' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Mclass\\Views\\Html\\List.tpl',
      1 => 1474341306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e0a9bbee42c7_98281749 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-6" >
        <li><?php echo $_smarty_tpl->tpl_vars['title1']->value;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['title3']->value;?>
</li>
        <hr>
<pre>
movie
需求 : 根据小类ID,获取 大类ID

首页
获取大类id列表
根据大类id 获取小类列表
</pre>


    </div>


    <div class="col-md-6" >
        <h4>ADS : <?php echo $_smarty_tpl->tpl_vars['title1']->value;?>
</h4>
        <pre><?php echo $_smarty_tpl->tpl_vars['nr1']->value;?>
</pre>
        <h4>ADS : <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h4>
        <pre><?php echo $_smarty_tpl->tpl_vars['nr2']->value;?>
</pre>
        <h4>ADS : <?php echo $_smarty_tpl->tpl_vars['title3']->value;?>
</h4>
        <pre><?php echo $_smarty_tpl->tpl_vars['nr3']->value;?>
</pre>
    </div>
</div><?php }
}

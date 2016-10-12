<?php
/* Smarty version 3.1.30, created on 2016-09-21 10:23:01
  from "E:\phpleague\Grace\My\Ads\Msource\Views\Html\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e1ef0573e019_85486725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '808ac23d017a859d3869491a8b8fd7aa3525f101' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Msource\\Views\\Html\\List.tpl',
      1 => 1474423070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e1ef0573e019_85486725 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-6" >

        <h2>Step one</h2>
        <p>
            $file = pressstop.data
        </p>
        <h2>Step two</h2>
        <p>
        </p>

   第一支撑点,分析出
        <code>youkuid</code>

<pre>

//        application('data')->set('QueueChannelStepone',1);
        $queuechannelstepone = application('data')->get('QueueChannelStepone');

任务
对每个地址进行本地缓存
过滤掉没有数据的地址
同时 分离出maxpage
</pre>

    </div>


    <div class="col-md-6" >
        count :<?php echo count($_smarty_tpl->tpl_vars['flit']->value);?>
<br>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['flit']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div><?php }
}

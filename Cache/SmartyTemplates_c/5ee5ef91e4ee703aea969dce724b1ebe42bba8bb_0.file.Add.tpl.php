<?php
/* Smarty version 3.1.30, created on 2016-09-29 18:02:54
  from "E:\phpleague\Grace\My\Ads\Sw\Views\Page\Add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ece6cee95b64_95049109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ee5ef91e4ee703aea969dce724b1ebe42bba8bb' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Sw\\Views\\Page\\Add.tpl',
      1 => 1475143373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ece6cee95b64_95049109 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Data Manage</title>
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="/assets/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <style>
        .centaton {
            height:140px;
        }
        .pleft10 {
            padding-left: 10px;
        }
    </style>
</head>
<body>


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <ol class="breadcrumb">
            <li class="active">
                <span class="glyphicon glyphicon-home"></span>
                <a>Back</a> >
            </li>
        </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12">
                <h3>思维</h3>
                <hr>
        </div>


        <div class="col-sm-12 col-md-12">


                <form role="form" method="post" action="/addons/?sw/page/add">


                    <div class="form-group">
                        <label for="exampleInputEmail1"> Title</label>
                        <input name="title" type="text" class="form-control" placeholder="类型">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"> 描述</label>
                        <input name="des" type="text" class="form-control" placeholder="类型">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"> 类型</label>
                        <select class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fl']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <option name="type"  value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">排序</label>
                        <input name="sort"  type="text" class="form-control" placeholder="排序">
                        <p class="help-block">规则 倒序.</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Active</label>
                        <div class="radio">
                            <label>
                                <input name="active"  type="radio" value="1" checked>
                                有效
                            </label>
                            <label>
                                <input name="active"  type="radio" value="0" >
                                无效
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Final </label> <small>规则 倒序.</small>
                        <div class="radio">
                            <label>
                                <input name="final"  type="radio" value="1" checked>
                                是
                            </label>
                            <label>
                                <input name="final"  type="radio" value="0" >
                                否
                            </label>
                        </div>
                    </div>

                    <input name="pid"  type="hidden" value="<?php echo $_GET['id'];?>
" >
                    <button class="submit list-group-item btn btn-primary btn-lg ">属性</button>

                </form>

        </div>




    </div>
</div>

<!-- Bootstrap core JavaScript -->
<?php echo '<script'; ?>
 src="/assets/bootstrap-3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/Sham.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(e) {
    });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}

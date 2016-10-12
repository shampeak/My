<?php
/* Smarty version 3.1.30, created on 2016-09-29 17:04:17
  from "E:\phpleague\Grace\My\Ads\Sw\Views\Page\Index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ecd91142ed01_49214889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4444424ae69993620404c10651e60e4a3cbc0d8' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Sw\\Views\\Page\\Index.tpl',
      1 => 1475139855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ecd91142ed01_49214889 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption centaton">
                        <h3 class="glyphicon glyphicon-search "><a class="pleft10" href=""><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></h3>
                        <p><?php echo $_smarty_tpl->tpl_vars['row']->value['des'];?>
</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-8">
                <div class="thumbnail">
                    <div class="caption centaton">
                        <h3>内容</h3>
                        <p>123</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="panel panel-primary ">
                <div class="panel-body">
                    上一级
                </div>
            </div>
            <div class="panel panel-primary ">
                <div class="panel-body">
                    下一级
                </div>
            </div>
        </div>



        <div class="col-sm-12 col-md-12">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">操作</div>
                <!-- List group -->
                <ul class="list-group">
                    <a rel="/addons/?sw/page/sx&id=<?php echo $_GET['id'];?>
" class="shamboxfull list-group-item btn btn-primary btn-lg ">属性</a>
                    <a href="/addons/?sw/page/index&id=<?php echo $_GET['id'];?>
" class="list-group-item btn btn-primary btn-lg ">内容</a>
                    <a href="/addons/?sw/page/index&id=<?php echo $_GET['id'];?>
" class="list-group-item btn btn-primary btn-lg ">关系</a>
                    <a href="/addons/?sw/page/add&id=<?php echo $_GET['id'];?>
" class="list-group-item btn btn-primary btn-lg ">增加</a>
                </ul>
            </div>
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

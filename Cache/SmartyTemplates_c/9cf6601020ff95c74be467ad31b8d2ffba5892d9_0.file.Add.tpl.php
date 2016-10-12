<?php
/* Smarty version 3.1.30, created on 2016-09-29 13:49:01
  from "E:\phpleague\Grace\My\Ads\Gupiao\Views\Page\Add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ecab4dd90123_76318872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cf6601020ff95c74be467ad31b8d2ffba5892d9' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Gupiao\\Views\\Page\\Add.tpl',
      1 => 1475128139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ecab4dd90123_76318872 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['res']->value['description'];?>
">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo $_smarty_tpl->tpl_vars['res']->value['title'];?>
</title>
    <!-- Bootstrap -->
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
    <style>#te { padding-left: 0px;padding-right: 0px; }</style>
</head>
<body>


<div class="container-fluid">

    <div class="row">

        <div class="col-xs-12" id="te">
            <div style="margin: 0px 0px 5px 0px;"></div>


            <form method="post" action="/addons/?gupiao/page/add">
                <!-- part1 -->
                <input name="code" type="hidden" class="form-control" placeholder="code" value="<?php echo $_GET['code'];?>
">
                <!-- part1 -->
                <div class="form-group">
                    <label for="exampleInputPassword1">名称</label>
                    <input name="title" type="text" class="form-control" placeholder="名称">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">代码</label>
                    <input name="code" type="text" class="form-control" placeholder="代码">
                </div>

                <!-- part1 -->
                <button type="submit" class="btn btn-default">Submit</button>
            </form>



        </div>



    </div>
</div>



</body>
</html>
<?php }
}

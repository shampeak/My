<?php
/* Smarty version 3.1.30, created on 2016-10-21 10:06:12
  from "E:\phpleague\Grace\My\Ads\Gupiao\Views\Page\Opt.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58097814a07688_67270125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dcd600e559b77db3865734fc132bb979adf85b3' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Gupiao\\Views\\Page\\Opt.tpl',
      1 => 1477015544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Widget/Top.tpl' => 1,
  ),
),false)) {
function content_58097814a07688_67270125 (Smarty_Internal_Template $_smarty_tpl) {
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

    <?php $_smarty_tpl->_subTemplateRender("file:../Widget/Top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="row">
        <div class="col-xs-12" id="te">
            <div style="margin: 0px 0px 5px 0px;"></div>
            <h3><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];
echo $_smarty_tpl->tpl_vars['row']->value['code'];?>
</h3>

            <table class="table">
                <!--
                class="active"
                class="success"
                class="danger"
                class="info"
                -->
                <tr>
                    <td>
                        <?php if ($_GET['act'] == 'B') {?>
                            <h3>买入</h3>
                        <?php } else { ?>
                            <h3>卖出</h3>
                        <?php }?>
                    </td>
                </tr>

                <tr>
                    <td>


                        <form method="post" action="">
                            <!-- part1 -->
                            <input name="code" type="hidden" class="form-control" placeholder="code" value="<?php echo $_GET['code'];?>
">
                            <!-- part1 -->
                            <div class="form-group">
                                <label for="exampleInputPassword1">数量</label>
                                <input name="num" type="text" class="form-control" placeholder="数量">
                            </div>
                            <!-- part1 -->
                            <div class="form-group">
                                <label for="exampleInputPassword1">价格</label>
                                <input name="price" type="text" class="form-control" placeholder="价格">
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="opt" value="B" <?php if ($_GET['act'] == 'b') {?>checked<?php }?>>
                                    <span class="red">买入</span>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="opt" value="S"  <?php if ($_GET['act'] != 'b') {?>checked<?php }?>>
                                    <span class="green">卖出</span>
                                </label>
                            </div>


                            <!-- part1 -->
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>

                    </td>
                </tr>

            </table>


        </div>



    </div>
</div>



</body>
</html>
<?php }
}

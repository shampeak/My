<?php
/* Smarty version 3.1.30, created on 2016-09-28 17:32:41
  from "E:\phpleague\Grace\My\Ads\Gui\Views\Html\Login2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57eb8e399a2504_56484640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8855fac953ae21de3bd7fad77bda1acb32e65bda' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Gui\\Views\\Html\\Login2.tpl',
      1 => 1475055159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57eb8e399a2504_56484640 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <!-- Bootstrap core CSS -->
    <link href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #eee;
        }
        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin .checkbox {
            font-weight: normal;
        }
        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>

</head>

<body>

<div class="container">

    <form class="vu form-signin" >
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="请输入密码" required autofocus>
        <a class="adminlogin btn btn-lg btn-primary btn-block" >Sign in</a>
    </form>

</div> <!-- /container -->

<?php echo '<script'; ?>
 src="/assets/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/bootstrap-3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/Sham.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8">
    $(document).ready(function () {


        $('.adminlogin').click(function(){
            var tag = '.vu';
            $.ajax({
                type: "POST",
                url: '/man/?gui/html/login2',
                data: $(tag).serialize(),
                dataType:'json',
                success: function(data){
                    if(data.code > 0){
                        var JS = data.js;
                        eval(JS);
                    }else{
                        alert(data.msg);
                    }
                },
                error : function() {
                    alert("异常！");
                }
            });
        });

    });
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}

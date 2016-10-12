<?php
/* Smarty version 3.1.30, created on 2016-09-21 11:45:09
  from "E:\phpleague\Grace\My\Ads\Queue\Views\Html\Timere.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e20245b19266_22379728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62da07cfb13f90dfa7810f0afbe1e06d9d9e2e3d' => 
    array (
      0 => 'E:\\phpleague\\Grace\\My\\Ads\\Queue\\Views\\Html\\Timere.tpl',
      1 => 1474429507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e20245b19266_22379728 (Smarty_Internal_Template $_smarty_tpl) {
?>

<h3>定时执行 <small>任务 / 页面缓存 / 检查页面 / 生成page相关页面</small></h3>

<div class="progress">

    <div id="testpress" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
        <span class="sr-only">45% Complete</span>
    </div>
</div>

<table class="table table-hover" id="dt1">
    <tr>
        <td width="100">channel</td>
        <td><div id="progresschannel"></div></td>
        <td></td>
    </tr>
    <tr>
        <td>执行次数</td>
        <td><div id="progresscount"></div></td>
        <td></td>
    </tr>
    <tr>
        <td>延时时间</td>
        <td><div id="progressdelay"></div></td>
        <td></td>
    </tr>
    <tr>
        <td>消息</td>
        <td><div id="progressmsg"></div></td>
        <td></td>
    </tr>
    <tr>
        <td>提示</td>
        <td><div id="progressmsg221212">


                重新执行 需要删除文件
                pressdoid.data /
                urllisttext.data /
                urllistnull.data /
                pressstop.data



            </div></td>
        <td></td>
    </tr>


</table>

<a class="btn btn-primary cachebegin">开始</a>


<?php echo '<script'; ?>
 type="text/javascript">

    //清理方法 clearTimeout(test)
    function gonext(data){
        var _data = data;
        $.ajax({
            type: "Post",
            url: '/man/?queue/html/timere',
            data:data,
            dataType:'json',
            success: function(data){
                $("#testpress").css("width",data.width);
                $("#testpress").html(data.width);

                $("#progressmsg").html(data.msg);
                $("#progressdelay").html(data.delay);
                $("#progresschannel").html(data.channel);
                $("#progresscount").html(data.num);
                if(data.pressstop ==1){
                    return false;
                }else{
                    setTimeout(function(){
                        gonext(data);
                    },data.delay);
                }
            },
            error:function() {
                gonext(_data);
            }
        });
    }

    $(document).ready(function(e) {

        $(".cachebegin").click(function(){
            task=1;
            gonext({
                channel : 1,        //任务频道
                begin   : 1,        //开始标记
                pressstop : 0,
                pressid : 0,
                width   : 0,
                num     : 0,
                total   : 0,
                delay   : 0,
                msg     : '',
            });
        });

    });
<?php echo '</script'; ?>
>

<?php }
}

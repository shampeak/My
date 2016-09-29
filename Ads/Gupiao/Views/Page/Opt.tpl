<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{$res['description']}">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>{$res['title']}</title>
    <!-- Bootstrap -->
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
    <style>#te { padding-left: 0px;padding-right: 0px; }</style>
</head>
<body>


<div class="container-fluid">

    {widget ads="gupiao/widget/top"}

    <div class="row">
        <div class="col-xs-12" id="te">
            <div style="margin: 0px 0px 5px 0px;"></div>
            <h3>{$row['title']}{$row['code']}</h3>

            <table class="table">
                <!--
                class="active"
                class="success"
                class="danger"
                class="info"
                -->
                <tr>
                    <td>
                        {if $smarty.get.act eq 'B'}
                            <h3>买入</h3>
                        {else}
                            <h3>卖出</h3>
                        {/if}
                    </td>
                </tr>

                <tr>
                    <td>


                        <form method="post" action="">
                            <!-- part1 -->
                            <input name="code" type="hidden" class="form-control" placeholder="code" value="{$smarty.get.code}">
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
                                    <input type="radio" name="opt" value="B" {if $smarty.get.act eq 'b'}checked{/if}>
                                    <span class="red">买入</span>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="opt" value="S"  {if $smarty.get.act neq 'b'}checked{/if}>
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

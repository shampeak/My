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
    <script src="/assets/js/jquery-1.11.1.min.js"></script>
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
                            {foreach from = $fl key=key item=item}
                            <option name="type"  value="{$key}">{$item}</option>
                            {/foreach}
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

                    <input name="pid"  type="hidden" value="{$smarty.get.id}" >
                    <button class="submit list-group-item btn btn-primary btn-lg ">属性</button>

                </form>

        </div>




    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="/assets/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="/assets/js/Sham.js"></script>
<script type="text/javascript">
    $(document).ready(function(e) {
    });
</script>
</body>
</html>

<div class="row">
    <form class="form-horizontal" method="post" action="/man/?setup/html/list">
        <div class="col-md-6 ">

            <div class="page-header">
                <h5>List</h5>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">类型 : </label>
                <div class="col-sm-10">
                    <textarea name="Datalist" class="form-control" rows="10">{$res}</textarea>
                    <p class="help-block">数据接口 测试 : http://my.so/addons/?aaddss</p>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="hidden" name="groupId" value="{$row['groupId']}">
                    <button type="submit" class="btn btn-default">修改</button>
                </div>
            </div>

        </div>

    </form>
</div>

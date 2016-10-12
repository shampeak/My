<div class="row">
    <form class="form-horizontal" method="post" action="/man/?setup/html/dy">
        <div class="col-md-6 ">

            <div class="page-header">
                <h5>单页内容索引</h5>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">  </label>
                <div class="col-sm-10">
                    <textarea name="Datadylist" class="form-control" rows="10">{$res}</textarea>
                    <p class="help-block">根据该索引，获取单页内容</p>
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

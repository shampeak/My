
    <form role="form">
        <div class="form-group">
            <label for="exampleInputEmail1">类型</label>
            <input type="text" class="form-control" placeholder="类型">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">排序</label>
            <input type="text" class="form-control" placeholder="排序">
            <p class="help-block">规则 倒序.</p>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Active</label>
            <div class="radio">
                <label>
                    <input type="radio" name="active" value="1" checked>
                    有效
                </label>
                <label>
                    <input type="radio" name="active" value="0" >
                    无效
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Final </label> <small>规则 倒序.</small>
            <div class="radio">
                <label>
                    <input type="radio" name="active" value="1" checked>
                    是
                </label>
                <label>
                    <input type="radio" name="active" value="0" >
                    否
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-default">提交</button>
    </form>

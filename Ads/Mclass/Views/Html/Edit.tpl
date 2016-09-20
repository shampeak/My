<div class="row">
    <div class="col-md-12" >

        <form  class="form-horizontal" method="post" action="/man/?mclass/html/edit">

            <div class="form-group">

                <label for="inputEmail3" class="col-sm-1 control-label">类别设置</label>

                <div class="col-sm-3">
                    <label for="inputEmail3">大类</label>
                    <textarea name="mclassdatada" class="form-control" rows="20">{$datada}</textarea>
                </div>


                <div class="col-sm-3">
                    <label for="inputEmail3">小类</label>
                    <textarea name="mclassdataxiao" class="form-control" rows="20">{$dataxiao}</textarea>
                </div>

                <div class="col-sm-3">
                    <label for="inputEmail3">关系</label>
                    <textarea name="mclassdatarela" class="form-control" rows="20">{$datarela}</textarea>
                </div>

            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-default" value="提交">
                </div>
            </div>

        </form>

    </div>
</div>


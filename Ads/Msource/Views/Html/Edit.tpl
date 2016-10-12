<div class="row">
    <div class="col-md-12" >

        <form  class="form-horizontal" method="post" action="/man/?msource/html/edit">

            <div class="form-group">
                <div class="col-sm-10">
                <label for="inputEmail3" class="control-label">来源索引</label>
                </div>
                <div class="col-sm-8">
                    <label for="inputEmail3">爬行一次</label><a class="btn btn-primary">任务</a>
                    <textarea name="moviesource1" class="form-control" rows="30">{$data1}</textarea>
                </div>


                <!-- div class="col-sm-3">
                    <label for="inputEmail3">2</label>
                    <textarea name="moviesource2" class="form-control" rows="30">{$data2}</textarea>
                </div -->

                <div class="col-sm-8">
                    <label for="inputEmail3">索引不爬行</label><a class="btn btn-primary">任务</a>
                    <textarea name="moviesource3" class="form-control" rows="30">{$data3}</textarea>
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


<div class="row">
    <form class="form-horizontal" method="post" action="/man/?document/html/add">
        <div class="col-md-6 ">


            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">路径</label>
                <div class="col-sm-10">
                    <select class="form-control" name="cname">
                        {foreach from=$list key=key item=item}
                            <option value="{$key|urlencode}">{$item}</option>
                            {foreach from=$res[$key] key=k item=i}
                                <option value="{$key|urlencode}{'/'|urlencode}{$k|urlencode}">　┗　 {$i}</option>
                            {/foreach}
                        {/foreach}
                    </select>
                </div>
            </div>


            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input name="title" value="{$row['title']}" class="form-control"  placeholder="名称">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">添加</button>
                </div>
            </div>

        </div>

    </form>
</div>







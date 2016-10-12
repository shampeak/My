<div class="row">
    <form class="form-horizontal" method="post" action="/man/?setup/html/edit">
        <div class="col-md-6 ">

            <div class="page-header">
                <h5>List</h5>
            </div>

            {foreach from=$list key=$key item=$item}
                <div class=" {$list[$key]['bgcolor']}">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                        <input name="list[{$key}][title]" value="{$list[$key]['title']}" class="form-control" placeholder="Title">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <input name="list[{$key}][des]" value="{$list[$key]['des']}" class="form-control" placeholder="描述">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">访问地址</label>
                    <div class="col-sm-10">
                        <input name="list[{$key}][url]" value="{$list[$key]['url']}" class="form-control" placeholder="访问地址">
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">访问地址</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="list[{$key}][bgcolor]">
                            {foreach from=$bgcolorlist key=k item=i}
                                <option value="{$k}" {if $list[$key]['bgcolor'] eq $k}selected="selected"{/if}>{$i}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">排序</label>
                    <div class="col-sm-10">
                        <input name="list[{$key}][sort]" value="{$list[$key]['sort']}" class="form-control" placeholder="排序">
                    </div>
                </div>
                <hr>
                </div>
            {/foreach}

        </div>

        <div class="col-md-6 ">

            <div class="page-header">
                <h5>Add</h5>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input name="newtitle" value="{$row['groupName']}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <input name="newdes" value="{$row['groupChr']}" class="form-control" placeholder="描述">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">访问地址</label>
                <div class="col-sm-10">
                    <input  name="newurl" value="{$row['des']}" class="form-control" placeholder="访问地址">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">访问地址</label>
                <div class="col-sm-10">
                    <select class="form-control" name="newbgcolor">
                        {foreach from=$bgcolorlist key=k item=i}
                            <option value="{$k}">{$i}</option>
                        {/foreach}
                    </select>
                </div>
            </div>



            <hr>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="hidden" name="groupId" value="{$row['groupId']}">
                    <button type="submit" class="btn btn-default">修改</button>
                </div>
            </div>


        </div>

    </form>
</div>

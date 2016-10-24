
<!-- content -->
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-hover" id="dt1">
            <thead>
            <th></th>
            <th width="150">操作</th>
            </thead>
            <tbody>
            {foreach from=$list key=$key item=$item}
                <tr>
                    <td>{$item}</td>
                    <td>
                    </td>
                </tr>
                {foreach from=$res[$key] key=$k item=$i}
                    <tr>
                        <td>　　　 ┗　 <a href="/man/?document/html/listshow&path={$item|urlencode}{'/'|urlencode}{$k|urlencode}">{$i}</a></td>
                        <td>
                        </td>
                    </tr>
                {/foreach}
            {/foreach}
            </tbody>
        </table>
    </div>
    <div class="col-md-6 ">
    </div>
</div>



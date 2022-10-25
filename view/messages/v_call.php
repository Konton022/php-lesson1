<table class="table">
    <thead>
        <tr>
            <th>call_id</th>
            <th>phone</th>
            <th>datatime</th>
            <th>duration</th>
            <th>edit</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$call_id?></td>
            <td><?=$phone?></td>
            <td><?=$dt_call?></td>
            <td><?=$duration?></td>
            <td><a href="http:index.php?page=edit&id=<?=$call_id?>" class="btn btn-primary btn-sm">edit</a></td>
        </tr>
    </tbody>
</table>






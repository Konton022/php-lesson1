<main>
    <table class="table table-striped table-hover table-bordered table-sm">
        <thead>
            <tr class="">
            <th>id</th>
            <th>phone</th>
            <th>datatime</th>
            <th>duration</th>
            <th>call</th>
            <th>delete</th>
            </tr>
        </thead>
        <tbody class="">
            <?php 
            foreach($calls as $call): ?> 
                <tr>
                    <td><?=$call['call_id']?></td>
                    <td><?=$call['phone']?></td>
                    <td><?=$call['dt_call']?></td>
                    <td><?=$call['duration']?></td>
                    <td><a href="index.php?page=call&id=<?=$call['call_id']?>">read more...</a></td>
                </tr>                
            <?php endforeach; ?>
        </tbody> 
    </table>
</main>   


<div>    
    <? if($callAdded === true): ?>
         <div class="alert alert-success">
            The Call was added to db
         </div>
    <? endif; ?> 
    <table class="table table-striped table-hover table-bordered table-sm">
        <thead>
            <tr class="">
            <th>id</th>
            <th>phone</th>
            <th>datatime</th>
            <th>duration</th>
            <th>call</th>
            
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
                    <td><a href="<?=BASE_URL?>call/<?=$call['call_id']?>">read more...</a></td>
                </tr>                
            <?php endforeach; ?>
        </tbody> 
    </table>
</div>
  

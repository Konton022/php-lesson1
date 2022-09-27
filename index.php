<?php
    include_once(__DIR__.'/model/calls.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $params = [
            'phone' => $_POST['phone'],
            'duration' => rand(1, 1000),
            'dt_call' => date("Y-m-d H:i:s")
        ];
        $insert = addCall($params);
        header('Location:index.php');
    } 
    $calls = getCalls();   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Table of Calls</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="phone" id="phone" />
        <!-- <input type="number" name="duration" id="duration" /> -->
        <input type="submit" value="SEND">
    </form>

    <table class="table table-striped table-hover table-bordered table-sm">
        <thead>
            <tr class="">
            <th>id</th>
            <th>phone</th>
            <th>datatime</th>
            <th>duration</th>
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
                    <td><button name=<?=$call['call_id']?>>delete</button></td>
                </tr>                
            <?php endforeach; ?>
        </tbody>    
    </table>
</body>
</html>



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
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="phone" id="phone" />
        <!-- <input type="number" name="duration" id="duration" /> -->
        <input type="submit" value="SEND">
    </form>

    <table>
        <tr>
            <th>call_id</th>
            <th>Phone</th>
            <th>datatime</th>
            <th>duration</th>
        </tr>
        
            <?php 
            foreach($calls as $call): ?> 
                <tr>
                    <td><?=$call['call_id']?></td>
                    <td><?=$call['phone']?></td>
                    <td><?=$call['dt_call']?></td>
                    <td><?=$call['duration']?></td>
                </tr>                
            <?php endforeach; ?>
            
    </table>
</body>
</html>



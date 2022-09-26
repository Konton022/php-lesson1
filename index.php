<?php
    include_once(__DIR__.'/model/db.php');

    $sqlInsertCall = "INSERT INTO callTracker (phone, dt_call, duration) VALUES (:phone, :dt_call, :duration)";
    $sqlSelectCalls = "SELECT * FROM callTracker";
    $sqlSelectCallbyId = "SELECT * FROM callTracker WHERE call_id = :call_id";
    
    
    
    $query = dbQuery($sqlSelectCalls);
    $calls = $query->fetchAll();  
  
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $params = [
            'phone' => $_POST['phone'],
            'duration' => rand(1, 1000),
            'dt_call' => date("Y-m-d H:i:s")
        ];
        $insert = dbQuery($sqlInsertCall, $params);
        header('Location:index.php');
    }  
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
                foreach($calls as $call) {

                    echo "<tr><td>{$call['call_id']}</td><td>{$call['phone']}</td><td>{$call['dt_call']}</td><td>{$call['duration']}</td></tr>";
                }
            ?>
        
    </table>
</body>
</html>



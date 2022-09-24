<?php
    $db = new PDO ('mysql:host=localhost;dbname=mts_test_task', 'root', '' );
    $db->exec('SET NAMES UTF8');
    $sqlInsertCall = "INSERT INTO callTracker (phone, dt_call, duration) VALUES (:phone, :dt_call, :duration)";
    $sqlSelectCallAll = "SELECT * FROM callTracker";
    $sqlSelectCallbyId = "SELECT * FROM callTracker WHERE call_id = :call_id";
    
    function addCall($phone, $duration, $db, $sqlInsertCall) {
        $mysql_date_now = date("Y-m-d H:i:s");
        $query = $db->prepare($sqlInsertCall);
        $params = [
            'phone' => $phone,
            'dt_call' => $mysql_date_now,
            'duration' => $duration
        ];
        $query->execute($params);
    }

    function selectAllCalls($db, $sqlSelectCallAll) {
        $query = $db->query($sqlSelectCallAll)->fetchAll();
        
        return $query;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // echo '<pre>';
        //     print_r($_POST);
        // echo '</pre>';
        $phone = $_POST['phone'];
        // $duration = $_POST['duration'];
        $duration = rand(1, 1000);
        addCall($phone, $duration,$db, $sqlInsertCall);
        

    }

    $calls = selectAllCalls($db, $sqlSelectCallAll);

    
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



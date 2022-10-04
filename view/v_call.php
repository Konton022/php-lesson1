<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>detail info for <?=$oneCall['phone']?></title>
</head>
<body>
<div>
    <h1>call page</h1>
    <a href="index.php">back to main page</a>
    <table class="table">
        <thead>
            <tr>
                <th>call_id</th>
                <th>phone</th>
                <th>datatime</th>
                <th>duration</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$oneCall['call_id']?></td>
                <td><?=$oneCall['phone']?></td>
                <td><?=$oneCall['dt_call']?></td>
                <td><?=$oneCall['duration']?></td>
            </tr>
        </tbody>

    </table>
</div>
</body>
</html>




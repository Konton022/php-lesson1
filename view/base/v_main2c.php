<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?=$title?></title>
</head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-secondary text-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Calls</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=add">Add new call</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=contacts">Contacts</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1><?=$pageH1?></h1>
        <main>
            <div class="row">
                <div class="col col-4"><?=$pageLeft?></div>
                <div class="col col-8"><?=$content?></div>
            </div>
        </main>
    </div>

   </body>
</html>
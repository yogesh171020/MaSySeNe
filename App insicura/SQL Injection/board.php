<?php
    $loggedIn = true;

    $conn = new mysqli('localhost', 'root', '', 'login_database');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sicurezza e management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="margin-top:50px;">
    <div class="row">
        <div class="col-md-12" align="right">
            <a href="logout.php" class="btn btn-danger">Esci</a>
        </div>
    </div>
</div>
</body>
</html>
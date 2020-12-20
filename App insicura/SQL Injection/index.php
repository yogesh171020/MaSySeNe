<?php
session_start();

$loggedIn = false;

if (isset($_SESSION['loggedIn']) && isset($_SESSION['name'])) {
  $loggedIn = true;
}

    $db=mysqli_connect("localhost","root","","db_insicuro");  
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
    <style type="text/css">
        #registerModal input, #logInModal input {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="modal" id="logInModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pagina di accesso</h5>
            </div>
            <form name="login" action="" method="post">
            <div class="modal-body">
            <input class="form-control" type="text" name="email" placeholder="Email"><br>
            <input class="form-control" type="password" name="password" placeholder="Password"><br>
            </div>
            <div class="modal-footer">
                <input class="btn btn-warning" type="submit" name="submit" value="Accedi" style="color: black; width: 70px; height: 30px;">
                <button class="btn btn-default" data-dismiss="modal">Chiudi</button>
            </div>
            </form>

        </div>
    </div>
</div>

<div class="container" style="margin-top:50px;">
    <div class="row">
        <div class="col-md-12" align="right">
             <button class="btn btn-success" data-toggle="modal" data-target="#logInModal">Accedi</button> 
        </div>
    </div><br>

<?php
    if(isset($_POST['submit'])) {
  $count=0;
  $res=mysqli_query($db, "SELECT * FROM `users` WHERE email='$_POST[email]' && password='$_POST[password]';");
  $row= mysqli_fetch_assoc($res);
  $count=mysqli_num_rows($res);
  if($count==0)
  {
    ?>
      
    <?php
  }
  else
  {
    $_SESSION['login_user'] = $_POST['name'];
    ?>
    <script type="text/javascript"> 
    window.location="board.php"         
    </script>
    <?php
  }
      }
  ?>
</body>
</html>
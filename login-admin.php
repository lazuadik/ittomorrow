<?php
include("config.php");
if(isset($_POST['login'])&&!empty($_POST['login'])){
        $unameadmin = $_POST['unameadmin'];
        $password_admin = $_POST['passwordadmin'];
        $data = pg_query("select * from admin where unameadmin = '".pg_escape_string($_POST['unameadmin'])."' and passwordadmin ='".$password_admin."'");
        $login_check = pg_num_rows($data);
        if($login_check > 0) {
            header('Location: home-user.php');
        } else {
            header('Location: login.php?status=gagal');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Login | IT Tomorrow</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="register">
                <h2>Login Page</h2>
                <input type="text" placeholder="Nama Admin" name="unameadmin">
                <br>
                <input type="password" placeholder="Password" name="passwordadmin">
                <br>
                <br>
                <input type="submit" name="login" value="Login"></input>
            </div>
        </form>
        <br>
        <a href="login.php" style="text-align: center; text-decoration: none; color: black; margin-left: 140px;">Login as user</a>
    </div>
</body>
</html>

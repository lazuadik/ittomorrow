<?php
session_start();
include("config.php");
if(isset($_SESSION['namapeserta'])){
    header("Location: home-user.php");
    exit;
}

if(isset($_POST['login'])&&!empty($_POST['login'])){
        $namapeserta = $_POST['namapeserta'];
        $password_peserta = $_POST['passwordpeserta'];
        $data = pg_query("SELECT * from peserta where namapeserta = '".pg_escape_string($_POST['namapeserta'])."' and passwordpeserta ='".$password_peserta."'");
        $login_check = pg_num_rows($data);
        if($login_check > 0) {
            $_SESSION["login"] = true;
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
                <input type="text" placeholder="Nama Peserta" name="namapeserta">
                <br>
                <input type="password" placeholder="Password" name="passwordpeserta">
                <br>
                <br>
                <input type="submit" name="login" value="Login"></input>
            </div>
        </form>
        <br>
        <a href="login-admin.php" style="text-align: center; text-decoration: none; color: black; margin-left: 130px;">Login as admin</a>
    </div>
</body>
</html>
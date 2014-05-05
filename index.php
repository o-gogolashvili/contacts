<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Contacts </title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
<?php
    
    require('models/user.php');
    require('modules/config.php');
    require('modules/connect.php');
    
    session_start();

        if(!empty($_SESSION['mail'])) {
            print('Logged in with <b>'.$_SESSION['mail'].'</b>');
        }
        else {
            require('pages/home.html');
        }

    if(isset($_POST['signUp'])) {
        require('modules/signup.php');
    }
    if(isset($_POST['signIn'])) {
        require('modules/signin.php');
    }
?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> Contacts </title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/stylesheet.css">
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
            </div>
        </div>
    </body>
</html>
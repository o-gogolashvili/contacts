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
        <link rel="stylesheet" href="css/signup.css">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            
            require('models/user.php');
            require('modules/config.php');
            require('modules/connect.php');
            
            session_start();

                if(!empty($_SESSION['mail'])) {
                    require('pages/usercontent.php');
                }
                else {
                    require('pages/home.php');
                }
        ?>
    </body>
</html>
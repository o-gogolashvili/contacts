<?php
    
    require('models/user.php');

    if(isset($_POST['signUp'])) {
        require('modules/config.php');
        require('modules/connect.php');
        require('modules/signup.php');
    }
    if(isset($_POST['signIn'])) {
        //აქ დასამატებელია აუთენტიკაცია
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Contacts </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div>
            <form action="" method="post">
                <input name="mail" type="text" placeholder="E-Mail"/><br/>
                <input name="password" type="password" placeholder="Password"/><br/>
                <input name="signIn" type="submit" value="signIn"/><hr/>
            </form>
        </div>
        <div>
            <form action="" method="post">
                <input name="mail" type="text" placeholder="E-mail"/><br/>
                <input name="firstName" type="text" placeholder="First Name"/><br/>
                <input name="lastName" type="text" placeholder="Last Name"/><br/>
                <input name="password" type="password" placeholder="Password"/><br/>
                <input name="signUp"type="submit" value="signUp"/>
            </form>
        </div>
    </body>
</html>

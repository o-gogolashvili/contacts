<?php

    if(!empty($_POST['mail']) && !empty($_POST['password'])) {
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE mail ='".$mail."' AND password ='".md5($password)."'";
        if($result = mysql_query($query)) {
            $user = mysql_fetch_array($result);
            if(!empty($user)) {
                $_SESSION['mail'] = $user['mail'];
                $_SESSION['id'] = $user['id'];
                header('location: index.php');
            }
            else {
                print('<div class="alert alert-danger">Incorrect login details</div>');
            }
        }
    }
?>
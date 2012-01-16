<?php
    if ($user = Current_User::user()){
        echo 'Hello, <em>'.$user->username.'</em>'.anchor('main/home/logout', 'Logout');
    } else {
        echo anchor('main/login','Login');
        echo anchor('main/signup', 'Register');
    }
        
?>
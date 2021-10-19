<?php
    require 'database.php';
    $user = getUser($_POST['username']).fetch();
    if(!$user) {
        http_response_code(400);
        echo 'Non existent user';
        exit;
    }

    if(strcmp($_POST['passwordhash'], $user['passwordhash']) !== 0) {
        http_response_code(400);
        echo 'Wrong password !';
        exit;
    }

    $_COOKIE['sessionID'] = 'new session ID ' . time();
    http_response_code(201);
?>
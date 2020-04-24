<?php

    $loggedIn = false;

    $user = isset($_POST['user']) ? $_POST['user'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';

    $passwords = array(
        'user1' => 'pass1',
        'user2' => 'pass2',
        'user3' => 'pass3',
        'user4' => 'pass4',
        'user5' => 'pass5',
        'user6' => 'pass6',
        'user7' => 'pass7',
        'user8' => 'pass',
        'user9' => 'pass1',
        'user10' => 'pass10'
    );

    $message = '';


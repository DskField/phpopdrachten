<?php

    $authUsers = Array(
        "Hertog" => "test123",
        "David" => "siqueira123",
        "DskField" => "hardepokkoe1",
        "Sjonnie" => "kapperaniffo"
    );

    $success = false;

    foreach ($authUsers as $user => $pass) {
        if ($_POST['username'] == $user && $_POST['password'] == $pass) {
            session_start();

            $_SESSION['username'] = $_POST['username'];
            header('location: welkom.php');

            $success = true;
        }
    }

    if (!$success) {
        // $message = "Ongeldige username/wachtwoord
        // {$_POST['username']}, probeer het nog eens.";

        include "opdracht_6-1.php";

    }
    







    ?>
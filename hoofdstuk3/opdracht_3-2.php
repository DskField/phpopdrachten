<link rel="stylesheet" href="3-2.css">

<?php

    $trafficLightColor  = "groen";
    $ambulanceComing    = false;
    $driveOn            = true;

    if ($trafficLightColor == "rood" || $trafficLightColor == "oranje") {
        $driveOn = false;
    } else if ($ambulanceComing) {
        $driveOn = false;
    }

    if ($driveOn) {
        echo "<p class=\"green\"> U mag doorrijden </p>";
    } else {
        echo "<p class=\"red\"> U moet stoppen </p>";
    }
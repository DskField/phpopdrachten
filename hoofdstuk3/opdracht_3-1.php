<?php

    $event = "Elfstedentocht";
    $eventAlt = "Alvestêdetocht";
    $distance = 200;
    $compType = "schaatstocht";
    $terrain = "natuurijs";
    $org = "Koninklijke Vereniging De Friesche Elf Steden";
    $mainCity = "Leeuwarden"; // Main City instead of Capital
    $province = "Friesland";
    $compfreq = 15;
    $originYear = 1909;
    $maxFreq = 1;

    // Verhaal
    $verhaal = "De " . $event
        . " (Fries: " . $eventAlt
        . ") is een " . $distance
        . " kilometer lange " . $compType
        . " over " . $terrain
        . " die wordt georganiseerd door de " . $org
        . ". " . $mainCity
        . ", de hoofdstad van " . $province
        . ", is start-en aankomstplaats. De " . $event
        . " is inmiddels " . $compfreq
        . " maal verreden en werd voor het eerst in " . $originYear
        . " gereden en wordt maximaal " . $maxFreq
        . " keer per winter gehouden.";

    echo "<p>" . $verhaal . "</p>";
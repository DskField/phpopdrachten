<!DOCTYPE html>

<?php
require "../includes/moduleheader.php";
require "../hoofdstuk3/variabelen.php";
?>

<html lang="nl">

<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>
        Opdracht 4.4
    </title>
</head>

<body class="flex-verti">

<?php
include "../includes/header.php";
?>

<!-- Container voor onder de header -->
<div class="maincont flex-horizon">

    <?php
    require "../includes/menu.php"
    ?>

    <!-- Uitwerkingen -->
    <main id="wrapper">
        <h2>
            Uitwerkingen
        </h2>

        <p>
            <?php

                echo "<h3> Taak 1 </h3>";
                date_default_timezone_set("Europe/Amsterdam");

                for ($i = 0; $i < 7; $i++) {
                    $weekdayEN = Date("D", strtotime("+$i days"));
                    $weekdayNL = null;
                    $day = Date("d-m-Y", strtotime("+$i days"));


                    switch ($weekdayEN) {
                        case "Mon":
                            $weekdayNL = "Maandag";
                            break;
                        case "Tue":
                            $weekdayNL = "Dinsdag";
                            break;
                        case "Wed":
                            $weekdayNL = "Woensdag";
                            break;
                        case "Thu":
                            $weekdayNL = "Donderdag";
                            break;
                        case "Fri":
                            $weekdayNL = "Vrijdag";
                            break;
                        case "Sat":
                            $weekdayNL = "Zaterdag";
                            break;
                        case "Sun":
                            $weekdayNL = "Zondag";
                            break;
                    }

                    echo "Dag " . $i . " is " . $weekdayNL . " " . $day . "<br />";
                }

                echo "<br /> <hr>";

                echo "<h3> Taak 2 </h3>";

                for ($x = 0; $x < 7; $x++) {
                    $weekdayEN = Date("D", strtotime("+$x days"));
                    $dayStr = null;
                    $day = Date("d-m-Y", strtotime("+$i days"));

                    echo "Dag " . $i . " is " . $weekdayNL . " " . $day . "<br />";
                }

            ?>
        </p>
    </main>

</div>

<?php
include "../includes/footer.php"
?>

</body>

</html>
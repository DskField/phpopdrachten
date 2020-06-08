<!DOCTYPE html>

<?php
require "../../includes/moduleheader.php";

// Sessie voor puntensysteem
$_SESSION['stand'] = array(0,0);
?>

<html lang="nl">

<head>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <title>
        Opdracht 6.2
    </title>
</head>

<body class="flex-verti">

<?php
include "../../includes/variabelen.php";
include "../../includes/header.php";
?>

<!-- Container voor onder de header -->
<div class="maincont flex-horizon">

    <?php
    require "../../includes/menu.php"
    ?>

    <!-- Uitwerkingen -->
    <main id="wrapper">
        <h2>
            Uitwerkingen
        </h2>

        <section>
            <h2> Opdracht 6.2 </h2>

            <form id="gameFrm" method="get" action="opdracht_6-2.php">
                <div class="float">
                    <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen">
                    <img src="images/steen.jpg">
                </div>

                <div class="float">
                    <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier">
                    <img src="images/papier.jpg">
                </div>

                <div class="float">
                    <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar">
                    <img src="images/schaar.jpg">
                </div>
            </form>

        </section>

        <section id="result">
            <?php

                // Showcase de keuze van de gebruiker
                if (isset($_GET['keuze'])) {

                    echo "Jij koos: <img src='images/{$_GET['keuze']}.jpg'>";

                    // Opties voor computer
                    $opties = [
                        'steen', 'papier', 'schaar'
                    ];

                    $keuzeComp = rand(0,2);
                    // Keuze van computer
                    echo "De computer koos: <img src='images/{$opties[$keuzeComp]}.jpg'>";

                    // Winnaar bepalen
                    switch ($keuzeComp) {

                        // Computer kiest steen
                        case 0:
                            switch ($_GET['keuze']) {
                                case 'steen':
                                    echo "<p>Gelijkspel!</p>";
                                    break;

                                case 'papier':
                                    echo "<p>Punt voor jou!</p>";
                                    $_SESSION['stand'][0] +=1;
                                    break;

                                case 'schaar':
                                    echo "<p>Punt voor de computer!</p>";
                                    $_SESSION['stand'][1] +=1;
                                    break;
                            }
                            break;

                        // Computer kiest papier
                        case 1:
                            switch ($_GET['keuze']) {
                                case 'steen':
                                    echo "<p>Punt voor de computer!</p>";
                                    $_SESSION['stand'][1] +=1;
                                    break;

                                case 'papier':
                                    echo "<p>Gelijkspel!</p>";
                                    break;

                                case 'schaar':
                                    echo "<p>Punt voor jou!</p>";
                                    $_SESSION['stand'][0] +=1;
                            }
                            break;

                        // Computer kiest schaar
                        case 2:
                            switch ($_GET['keuze']) {
                                case 'steen':
                                    echo "<p>Punt voor jou</p>";
                                    $_SESSION['stand'][0] +=1;
                                    break;

                                case 'papier':
                                    echo "<p>Punt voor de computer!</p>";
                                    $_SESSION['stand'][1] +=1;
                                    break;

                                case 'schaar':
                                    echo "<p>Gelijkspel!</p>";
                                    break;
                            }
                    }

                    // Punten laten zien
                    echo "Huidige stand:\nJij: {$_SESSION['stand'][0]}\nComputer: {$_SESSION['stand'][1]}";
                }

            ?>

        </section>
    </main>

</div>

<?php
include "../../includes/footer.php"
?>

</body>

</html>
<!DOCTYPE html>

<?php
require "../includes/moduleheader.php";
require "../hoofdstuk3/variabelen.php";
?>

<html lang="nl">

<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>
        Opdracht 4.3
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
                echo "Vandaag is rood";
            ?>
        </p>
    </main>

</div>

<?php
include "../includes/footer.php"
?>

</body>

</html>
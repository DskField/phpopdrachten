<!DOCTYPE html>

<?php
require "../../includes/moduleheader.php"
?>

<html lang="nl">

<head>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <title>
        Opdracht 6.1
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
            <h2> Opdracht 6.1 </h2>

            <form action="checklogin.php" method="post">

                <table>
                    <tr>
                        <td>
                            <label for="tfUserName">Username:</label>
                        </td>
                        <td>
                            <input type="text" name="username" id="tfUserName">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="tfUserPassword">Password:</label>
                        </td>
                        <td>
                            <input type="password" name="password" id="tfUserPassword">
                        </td>
                    </tr>

                </table>

                <br />

                <input type="submit" value="Versturen">

            </form>

        </section>
    </main>

</div>

<?php
include "../../includes/footer.php"
?>

</body>

</html>
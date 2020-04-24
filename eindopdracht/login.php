<?php
include "script.php";
?>

<!DOCTYPE html>

<?php
require "../includes/moduleheader.php";
?>

<html lang="nl">

<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>
        Eindopdracht periode 3
    </title>
</head>

<body class="flex-verti">

<?php
include "../hoofdstuk3/variabelen.php";
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

        <section class="flex-verti flex-center">
            <h1 class="big">
                Bergheen
            </h1>

            <?php
                foreach ($passwords as $username => $password) {
                    echo "Key= " . $password;

                    if (strcmp($user, $username) && strcmp($pass, $password)) {

                    }
                }

                if (!$loggedIn) {
                    echo
                    '<p>
                    Login om onze adresgegevens + openingstijden te zien
                    </p>
        
                    <form method="post" action="login.php">
                        <table>
        
                            <tr>
                                <td>
                                    <label for="user">
                                        Username
                                    </label>
                                </td>
                                <td>
                                    <input type="text" name="user" id="user" placeholder="username">
                                </td>
                            </tr>
        
                            <tr>
                            
                                <td>
                                    <label for="pass">
                                        Password
                                    </label>
                                </td>
                                <td>
                                    <input type="text" name="pass" id="pass" placeholder="password">
                                </td>
                            </tr>
        
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" value="Login">
                                </td>
                            </tr>
        
                        </table>
                    </form>';
                    // Einde if-statement
                }
                else
                {

                    echo '
                    <p>
                        Je bent ingelogd!
                    </p>
                    ';
                }
            ?>


        </section>
    </main>

</div>

<?php
include "../includes/footer.php"
?>

</body>

</html>
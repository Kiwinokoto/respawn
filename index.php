<?php
# Acces variables de sessions + debug
include("inc/session_start_debug.php");

# elements et infos
include("inc/number1.php");

// $_SESSION["firstTime"] = true;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Shinigami Corp</title>
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <div class="container">
            <!-- Logo Section (top left)-->
                <?php include("inc/logo.php"); ?>

            <!-- Employee Account Section (Top Right) -->
                <?php include("inc/perso.php"); ?>

            <!-- Menu Options Section -->
            <div class="menu-options">
                <ul>
                    <li><a href="single.php">Start Single Player Game</a></li>
                    <li><a href="#">Start Multiplayer Game</a></li>
                    <li><a href="#">Options/ stats?</a></li>
                    <li><a href="#">Quit</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>

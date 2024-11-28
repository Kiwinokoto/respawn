<?php
# Acces variables de sessions + debug
include("inc/session_start_debug.php");

?>

<!-- Employee Account Section (Top Right) -->
<div class="perso">
    <!-- Main info -->
    <a href="perso_form.php">
        <p>Employee #1</p>
        <p>Name: <?php echo htmlspecialchars($_SESSION["number1"]["name"]); ?></p>
        <p>Job: <?php echo htmlspecialchars($_SESSION["number1"]["job"] . " lvl: 1"); ?></p>
    </a>

    <!-- Credits -->
     <div class="bump">
        <p class="credit">
            <?php echo htmlspecialchars($_SESSION["number1"]["credit"]. " credits"); ?>
        </p>
    </div>

    <!-- Important Messages Section -->
    <div class="important">
        <p class="bump">IMPORTANT</p>
        <p>
            <a href="review.php"><span class="blinking">1 day left until review</span></a>
        </p>
    </div>

</div>


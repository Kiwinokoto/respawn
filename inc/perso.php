<?php
# Acces variables de sessions + debug
include("inc/session_start_debug.php");

?>

<!-- Employee Account Section (Top Right) -->
<div class="perso">
    <a href="perso_form.php">
        <p>Employee #1</p>
        <p>Name : <?php echo htmlspecialchars($_SESSION["number1"]["name"]); ?></p>
        <p>Job : <?php echo htmlspecialchars($_SESSION["number1"]["job"]); ?></p>
    </a>

    <?php
        # Acces important messages
        # review
        # ... ?
        include("important.php");
    ?>
</div>


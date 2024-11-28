<?php
# Acces variables de sessions + debug
include("inc/session_start_debug.php");

$_SESSION["number1"] =
[
    "name" => "Undefined", // please enter a name
    "number" => 1,
    "job" => "Rebirth specialist",
    "lvl" => 1,
    "started" => 1 // day ago
];

?>
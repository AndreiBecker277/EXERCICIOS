<?php

$A = $_POST["A"];
$B = $_POST["B"];

$a_gol = $_POST["A_gol"];
$b_gol = $_POST["B_gol"];


if (
    !empty($_POST["A"]) && isset($_POST["A"]) &&
    !empty($_POST["B"]) && isset($_POST["B"]) &&
    !empty($_POST["A_gol"]) && isset($_POST["A_gol"]) &&
    !empty($_POST["B_gol"]) && isset($_POST["B_gol"])
) {
    if ($a_gol > $b_gol) {
        echo "O $A Ganhou a Partida!";

    }
    if ($a_gol > $b_gol) {
        echo "O $B Ganou a partida!";
    } else {
        echo "empataram a partida!";
    }
} else {
    echo "O $B Ganhou a partida!";
    header("refresh:3,ApostaForm.php");
}

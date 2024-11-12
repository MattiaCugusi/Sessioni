<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indovina Numero</title>
</head>
<body>

    <?php
    if (!isset($_SESSION["giocate"])){
        $_SESSION["giocate"] = 0;
    }

    if (!isset($_SESSION["vittorie"])){
        $_SESSION["vittorie"] = 0;
    }
        

   
    ?>
    

    <?php
    $_SESSION["giocate"]++;
    $numRand = rand(1,20);
    echo "<div style='text-align: center; border: 1px solid black; width: 60%; margin: auto'>";
    echo "<h1>Il numero generato e': " . $numRand . "</h1>";
    $numIns = $_GET["num"];
    echo "<h1>Numero inserito dall' utente: " . $numIns . "</h1>";

    if ($numRand == $numIns){
        echo "<h2 style='color: green'>HAI INDOVINATO!!</h2>";
        $_SESSION["vittorie"]++;
    }else{
        echo "<h2 style='color: red'>HAI SBAGLIATO!!</h2>";
    }
    echo "<p>Giocate effettuate: " . $_SESSION["giocate"] . "</p>";
    echo "<p>Vittorie: " . $_SESSION["vittorie"] . "</p>";
    echo "<p><a href='./scelta.html'>ritenta la giocata</a></p>";
    echo "</div>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indovina Numero</title>
</head>
<body>
    
    <?php
    $numRand = rand(1,20);
    echo "<div style='text-align: center; border: 1px solid black; width: 60%; margin: auto'>";
    echo "<h1>Il numero generato e': " . $numRand . "</h1>";
    $numIns = $_GET["num"];
    echo "<h1>Numero inserito dall' utente: " . $numIns . "</h1>";

    if ($numRand == $numIns){
        echo "<h2 style='color: green'>HAI INDOVINATO!!</h2>";
    }else{
        echo "<h2 style='color: red'>HAI SBAGLIATO!!</h2>";
    }
    echo "<p><a href='./scelta.html'>ritenta la giocata</a></p>";
    echo "</div>";
    ?>
</body>
</html>
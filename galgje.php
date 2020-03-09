<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Galgje
        </title>
        <link href="styling.css" rel="stylesheet"/>
    </head>
  <body>

    <h1 class="title">Welcome To The Galg</h1>

    <form class="" action="galgje.php" method="post">
      <input type="text" name="playerInput" placeholder="A t/m Z" maxlength="1">
      <input type="submit" name="submit gok" value="Gok knop">
    </form>

<?php
    $gameWord = $_SESSION["gameWord"];

    //check gebruiker input
if (isset($_POST["playerInput"])) {
        $playerInput = $_POST["playerInput"];
        $guessedGameWord = $_SESSION["guessedGameWord"];
        $score = $_SESSION["score"];
        $wrongGuess = $_SESSION["wrongGuess"];

        //goed geraden
    if (strpos($gameWord, $playerInput) !== false) {
            $index = strpos($gameWord, $playerInput);
            $guessedGameWord[$index] = $playerInput;
            //check of je gewonnen hebt
        if (!in_array("_", $guessedGameWord)) {
                echo "Je Hebt Gewonnen <pre>";
                echo "<a href='startpagina.php'>speel opnieuw</a> <pre>";
        }
    } else {
            //als fout gegokt +1
            $score++;
            array_push($wrongGuess, $playerInput);

            //je hebt verloren
        if ($score === 10) {
                echo "Jammer je hebt een smurft gedood <pre>";
                echo "<a href='startpagina.php'>speel opnieuw</a> <pre>";
                echo "het goeden woord was: $gameWord <pre>";
        }
    }
} else {
        //alleen eerste keer
        $lengthGameWord = strlen($gameWord);
        $guessedGameWord = array_fill(0, $lengthGameWord, "_");
        $score = 0;
        $wrongGuess = array();
}

    //print het gegokten woord
foreach ($guessedGameWord as $index => $character) {
        echo "$character ";
}
    // print fout gegokt
        echo "<pre>";
        echo "Wrong Guesses:";
foreach ($wrongGuess as $index => $character) {
        echo "$character ";
}
    echo "<pre>";

    //plaatjes laten zien
    switch ($score) {
case 0:
            break;
case 1:
        echo "<img src= 'image/galgje1.jpeg'>";
            break;
case 2:
        echo "<img src= 'image/galgje2.jpeg'>";
            break;
case 3:
        echo "<img src= 'image/galgje3.jpeg'>";
            break;
case 4:
        echo "<img src= 'image/galgje4.jpeg'>";
            break;
case 5:
        echo "<img src= 'image/galgje5.jpeg'>";
            break;
case 6:
        echo "<img src= 'image/galgje6.jpeg'>";
            break;
case 7:
        echo "<img src= 'image/galgje7.jpeg'>";
            break;
case 8:
        echo "<img src= 'image/galgje8.jpeg'>";
            break;
case 9:
        echo "<img src= 'image/galgje9.jpeg'>";
            break;
case 10:
        echo "<img src= 'image/galgje10.jpeg'>";
            break;
    }
    $_SESSION["guessedGameWord"] = $guessedGameWord;
    $_SESSION["score"] = $score;
    $_SESSION["wrongGuess"] = $wrongGuess;
    ?>

  </body>
</html>

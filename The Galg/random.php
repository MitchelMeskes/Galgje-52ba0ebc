<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Galgje</title>
      <link href="styling.css" rel="stylesheet"/>
  </head>
  <body>

  <h1 class="title">Welcome To The Galg</h1>
    <br>
    <h3>Click the button if you want to play with a random word!</h3>
    <a  class="center" href="galgje.php" methods="POST">Play With Random Word</a>

    <?php
    $form = true;

      $gameWord = array
        ("costume","death","action","drawing",
        "compact","skip","weight",
        "profile","script",
        "guitar","iron","lifestyle",
        "art","year","wind","key",
        "place","visual","nightmare",
        "shark","car","consultation","glare");

        $index = rand(0,count($gameWord)-1);
        $_SESSION["gameWord"] = $gameWord[$index];

   ?>

  </body>
</html>

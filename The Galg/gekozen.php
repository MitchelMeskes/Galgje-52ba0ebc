<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="styling.css" rel="stylesheet"/>
  </head>
  <body>
      <h1 class="title">Welcome To The Galg</h1>
      <br>
      <h3 class="middle">Choose The Word You Want To Play With!</h3>
    <br>
    <form class="inputstyle" method="post" action="galgje.php">
      <input type="text" name="gameWord" value="" placeholder="Choose A Word">
      <input type="submit" name="submit" value="submit">
    </form>

  </body>
</html>

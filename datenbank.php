<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Rent a Tesla | Rent</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">

  </head>

  <body>
    <!-- Main Header der ganzen Seite -->

    <header>
      <h1>Rent a Tesla</h1>
    </header>

    <nav>
      <ul>
        <li><a href="/Home.php">Home</a></li>
		<li><a href="/Rent.php">Rent</a></li>
        <li><a href="#">RAT PRO</a></li>
        <li><a href="/kontakt.php">Kontakt</a></li>
      </ul>

     </nav>

    <!-- Hauptseiten kontent-->
    <main>

    </main>

    <!-- Unterzeile -->

    <footer>
      <p>©Copyright 2018 by nobody. All rights reversed.</p>
    </footer>

  </body>
</html>

<?php

$model = $_GET["car"];
$farbe = $_GET["color"];

echo "$model in farbe $farbe";

echo "$user_id";

?>




















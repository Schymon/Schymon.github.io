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
		<article>
			<h1>Miete eine Tesla!</h1>
			<p>Unser Service bietet das Model S und das Model X in verschiedenen Variationen an.</p><br>
		</article>
		
		<h1>Hier mieten:</h1>
	  
		<form action="/datenbank.php" method="get" >
		
			<select name="car">
				<option value="none">Model</option>
				<option value="none">------</option>
				<option value="modelS">ModelS</option>
				<option value="modelX">ModelX</option>
				<option value="model3">Model3</option>
				<option value="roadster">Roadster</option>
			</select><br><br>
		
			<select name="color">
				<option value="none">Farbe</option>
				<option value="none">------</option>
				<option value="red">R</option>
				<option value="green">G</option>
				<option value="blue">B</option>
			</select><br><br>
			
			<input type="submit" value="Jetzt Mieten">
		</form>

    </main>

    <!-- Unterzeile -->

    <footer>
      <p>©Copyright 2018 by nobody. All rights reversed.</p>
    </footer>

  </body>
</html>

<?php

$cookie_userid = $_COOKIE["userzahl"]; 
echo "Der Inhalt des Cookies: $cookie_userid"; 

?>





















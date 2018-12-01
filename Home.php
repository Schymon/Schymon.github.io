<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Rent a Tesla | Home</title>
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
        <li><a href="/Home.php" method="post">Home</a></li>
		<li><a href="/Rent.php" method="post">Rent</a></li>
        <li><a href="#">RAT PRO</a></li>
        <li><a href="/kontakt.php">Kontakt</a></li>
      </ul>

       <!-- Suchleiste der ganzen Webside -->

       <form>
         <input type="search" name="q" placeholder="Durchsuchen">
         <input type="submit" value="Suchen!">
       </form>
     </nav>

    <!-- Hauptseiten kontent-->
    <main>

		<!-- the aside content can also be nested within the main content -->
		<aside>
			<h2>Weitere Links</h2>

			<ul>
				<li><a href="https://Tesla.com">Tesla.com</a></li>
			</ul>
		</aside>

    </main>

    <!-- Unterzeile -->

    <footer>
		<p>©Copyright 2018 by nobody. All rights reversed.</p>
	  
		<input type="hidden" id="user_id" name="user_id" value="$user_id">
		
    </footer>

  </body>
</html>



<?php
	
if($idnummer == 0) 
{
	$idnummer = rand(1000,9999); #zufalls generator
	setcookie("userzahl","$idnummer",0); 
}
else
{
	$idnummer = $idnummer;
}

$idnummer = 0;
	
	
setcookie("userzahl","$idnummer",0); 
$cookie_userid = $_COOKIE["userzahl"]; 
echo "Der Inhalt des Cookies: $cookie_userid"; 

?>




















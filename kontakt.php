<html>
  <head>
    <meta charset="utf-8">

    <title>Rent a Tesla | Kontakt</title>
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

			<div id="content">
		<h1>Personen</h1>
		<p>Hier íst die Liste</p>

<?php 
		$username = "schymon"; 
		$password = "3072e223"; 
		$host = "db4free.net:3306"; 
		$dbname = "schnappi"; 

		$db_link = mysqli_connect("$host", "$username", "$password", "$dbname");
		
		if(!$db_link)
		{
			die("<p>Verbindung fehlgeschlagen</p>");
		}
		
		//---------------
		
		$db_res = mysqli_query($db_link, "SELECT `Vorname`, `Nachname`, `Alter` FROM Kontakte") 
			or die("Fehler: " . mysqli_error($db_link));
		
		echo "<table border=1>";
		while($row = mysqli_fetch_array($db_res)) 
		{
			echo "<tr>";
			echo '<td>' . $row['Vorname'] . '</td>';
			echo '<td>' . $row['Nachname'] . '</td>';
			echo '<td>' . $row['Alter'] . '</td>';
			echo "</tr>";
		}
		echo "</table>";
?>
	</div>

    </main>

    <!-- Unterzeile -->

    <footer>
      <p>©Copyright 2018 by nobody. All rights reversed.</p>
    </footer>

  </body>
</html>





















<html>
<meta charset="windows-1250"/>
<meta charset="ISO-8859-2"/>
<meta charset="UTF-8"/>
<head>
<title>
 Speed &#9762
</title>

<style>
h1 {font-size: 55px; display: inline; text-indent: 600; word-spacing: 20;margin-left: 150}
h2 {text-align: center;}
p {font-size: 15px; font-style: oblique; font-weight: italic; font-weight: bold;}
table {margin: 40; color: white; opacity: 0.70}
</style>
<link rel="Stylesheet" type="text/css" href="https://v-ie.uek.krakow.pl/~s176968/style2.css" />
</head>
<body>

 <div id="container1">
 <div id="title">
 <h1><font face="fantasy" color="#8C1717" size="10"> Wypożyczalnia samochodów</font></h1>
 </div>
 <div id="login">
 
 
 <?php  
 if (isset($_SESSION['login'])) { ?>
 <h2><u>Jesteś zalogowany</u></br></h2>
 <form action="logout1.php" method='post' align="right" vspace="50">
<input type="image" name="logout" width="120" height="30" align="middle" src="http://g.gazetaprawna.pl/gp/img_flamenco/whitePage/buttonLogout.png"></input>
</form>
 <?php ;} else { ?>
		<h2><u>Logowanie użytkownika</u></br></h2>
		<p><form method="POST" action="log.php"></p>
		<p>Login:<input type="text" name="login"
		style="background-color: #BDB76B"/></p>
		<p>Hasło:<input type="password" name="haslo" style="background-color: #BDB76B"/>
		<input type="image" width="40" height="40" align="right" hspace="20" src="http://cdn.mysitemyway.com/etc-mysitemyway/icons/legacy-previews/icons-256/simple-red-square-icons-business/128632-simple-red-square-icon-business-key11-sc48.png"/>
		</p></form></br> <?php ;}?>
 </div>
</div>

<div id="container2">
<div id="main">
 <ul id="menu">
 <li><a href="https://v-ie.uek.krakow.pl/~s176968/main2.php">Strona główna</a></li>
 <li><a href="https://v-ie.uek.krakow.pl/~s176968/sklep2.php">Sklep</a></li>
 <li><a href="https://v-ie.uek.krakow.pl/~s176968/koszyk2.php">Koszyk</a></li>
 <li><a href="https://v-ie.uek.krakow.pl/~s176968/kontakt2.php">Kontakt</a></li>
</ul></br>
<div id="two"><font size="5" face="georgia">
<?php
		$connection = mysql_connect('sbazy.uek.krakow.pl','s176968','uM4AEpzd');
		$db = mysql_select_db('s176968', $connection);
		mysql_select_db('s176968');

		mysql_select_db('s176968');
		$zapytanie = "SELECT * FROM `koszyk` GROUP BY id";
		$idzapytania = mysql_query($zapytanie);
		
		

		echo '<table border="1" cellpadding="5" cellspacing="5" background="transparent" frame="void" color="white">

		<tr><th>Samochod</th><th>Cena za dobę</th><th>Zdjecie</th><th>Ilość dni</th><th>Suma</th><th></th><th></th></tr>';
		while($row = mysql_fetch_array($idzapytania)) {
		echo "<tr valign='middle'><td>{$row['samochodk']}</td><td>{$row['cena24k']}</td><td><center><img src='{$row['zdjk']}' width='auto' height='84'/></center></td>
		<td><form action='liczbadni.php' method='post'>Podaj liczbe dni: </br><input type='text' name='liczbadni'/><input type='hidden' name='id' value='{$row['id']}' /><input type='submit' value='Potwierdź' style='margin-left: 10';/></form></td>
		<td>{$row['liczbadni']}</td>
		<td></td>
		</tr>";
		}
		echo '</table>';
		
?>

		<form action="count.php" method='post'>
		<fieldset width="600px">
		<legend>Płatność:</legend>
		Imie: <input type="text" name="imie">
		Email: <input type="text" name="email">
		Kwota do zapłaty: <input type="text" name="kwota">
		<input type="submit" name="submit" value="Potwierdź zamówienie" style="margin-left: 10;"/>
		</fieldset>
		</form>
			
		
</div>
</div>
<div id="reklama">
<p>miejsce na reklame i inne bzdety</p>
</div>
</div>

<div id="stopka">
<h2>Marcioszka <sup>&reg</sup></h2>
</div>
</body>
</html>

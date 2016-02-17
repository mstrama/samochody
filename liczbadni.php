<?php

$connection = mysql_connect('sbazy.uek.krakow.pl','s176968','uM4AEpzd');
$db = mysql_select_db('s176968', $connection);
mysql_select_db('s176968');

$liczbadni = $_POST['liczbadni'];
$id = $_POST['id'];


$query1 = "UPDATE `koszyk` SET liczbadni='$liczbadni' WHERE id='$id'";
$result1 = mysql_query($query1);

echo $liczbadni;
echo $id;

header('Location: koszyk2.php');

?>

<?php require './fonctions.php';

$pdo = new PDO('mysql:host=localhost;dbname=gsb_frais', 'root', '');

$id="e24";

$sql = 'SELECT typevisiteur FROM visiteur WHERE visiteur.id='.$id;
print ($pdo->query($sql)); 
 



?>
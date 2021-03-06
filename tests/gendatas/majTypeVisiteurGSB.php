<?php 

function getLesVisiteur ($pdo){
    $req = 'select nom, prenom, typevisiteur from visiteur where visiteur.typevisiteur = "medical"';
    $res = $pdo->query($req);
    $lesLignes = $res->fetchAll();
    echo'on est là';
    return $lesLignes;
    }

$pdo = new PDO('mysql:host=localhost;dbname=gsb_frais', 'root', '');


$myArray =    getLesVisiteur ($pdo);
print_r($myArray);
echo gettype($myArray);

 



?>
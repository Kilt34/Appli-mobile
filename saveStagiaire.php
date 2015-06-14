<?php
require_once('./BDD.php');

global $link;

$query =  "INSERT INTO Stagiaire VALUES ('','" . $_GET['nom'] . "','" . $_GET['prenom'] . "','" . $_GET['dateNaissance'] . "','" . $_GET['universite'] . "','" . $_GET['specialite'] . "',0)";

// Exécution de la requête
$result = mysql_query($query, $link);

// Vérification du résultat
// Ceci montre la requête envoyée à MySQL ainsi que l'erreur. Utile pour déboguer.
if (!$result) {
	$message  = 'Requête invalide : ' . mysql_error() . "\n";
	$message .= 'Requête complète : ' . $query;
	die($message);
}

// Utilisation du résultat
echo json_encode(mysql_fetch_assoc(mysql_query('SELECT * FROM Stagiaire WHERE id=' . mysql_insert_id(), $link)));
?>
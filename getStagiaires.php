<?php
require_once('./BDD.php');

global $link;

$query = "SELECT * FROM Stagiaire";

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
$json = [];
while ($row = mysql_fetch_assoc($result)) {
	$json[] = $row;
}

echo json_encode($json);
?>
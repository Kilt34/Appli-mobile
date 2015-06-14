<?php
require_once('./BDD.php');

global $link;
$query =  "DELETE from Stagiaire WHERE id=" . $_GET['id'];
// Exécution de la requête
$result = mysql_query($query, $link);

// Vérification du résultat
// Ceci montre la requête envoyée à MySQL ainsi que l'erreur. Utile pour déboguer.
if (!$result) {
	$message  = 'Requête invalide : ' . mysql_error() . "\n";
	$message .= 'Requête complète : ' . $query;
	die($message);
}

echo '{}';
?>
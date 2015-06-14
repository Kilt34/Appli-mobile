echo "C'est bon !!!";

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
		while ($row = mysql_fetch_assoc($result)) {
			
			echo "<br/>" . $row['id'] . " " . $row['nom'];
			// Va affiher : 1 Filou
		}
		
		$query =  "INSERT INTO Stagiaire VALUES ('','Robert','Claude','13-04-1959','Science','Assistant',0)";
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
		while ($row = mysql_fetch_assoc($result)) {
			
			echo "<br/>" . $row['id'] . " " . $row['nom'];
			// Va affiher : le nouveau stagiaire
		}
		
			$query =  "INSERT INTO Stagiaire VALUES ('','Robert','Claude','13-04-1959','Science','Assistant',0)";
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
		while ($row = mysql_fetch_assoc($result)) {
			
			echo "<br/>" . $row['id'] . " " . $row['nom'];
			// Va affiher : le nouveau stagiaire
		}
		$query =  "INSERT INTO Stagiaire VALUES ('','Robert','Claude','13-04-1959','Science','Assistant',0)";
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
		while ($row = mysql_fetch_assoc($result)) {
			
			echo "<br/>" . $row['id'] . " " . $row['nom'];
			// Va affiher : le nouveau stagiaire
		}
		
		$query =  "DELETE from Stagiaire WHERE id=30";
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
		while ($row = mysql_fetch_assoc($result)) {
			
			echo "<br/>" . $row['id'] . " " . $row['nom'];
			// Va supprimer le stagiaire
		}
		
		$query =  "UPDATE Stagiaire SET prenom ='Adrien' WHERE nom='Filou'";
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
		while ($row = mysql_fetch_assoc($result)) {
			
			echo "<br/>" . $row['id'] . " " . $row['nom'];
			// Va supprimer le stagiaire
		}
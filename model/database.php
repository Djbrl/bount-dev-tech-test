<?php

	$db_host = "localhost";
	$dbname = "basebountdev";
	$user = "root";
	$pwd = "";

	try {
		$db = new PDO("mysql:host=".$db_host.";dbname=".$dbname, $user, $pwd);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connexion réussie à la base de données.";
	} catch (PDOException $e) {
		die('Erreur'.$e->getMessage());
	}

?>
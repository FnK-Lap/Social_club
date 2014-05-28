<?php


if ($_POST['action'] == 'new_statut') {
	session_start();

	require_once ('../tools/dbTools.php');
	require_once ('../includes/config.php');

	dbConnect($dbConfig);

	// Models
	require_once ('../models/statutModel.php');
	require_once ('../models/userModel.php');

	// ORM
	require_once ('../models/table.class.php');
	require_once ('../models/statut.class.php');

	$errors = checkStatutsForm('new');

	if (empty($errors)) {
		newStatut($_SESSION['id_user'], $_POST['statut']);
		echo htmlspecialchars($_POST['statut']);
	}else{
		echo false;
	}

	
}

?>
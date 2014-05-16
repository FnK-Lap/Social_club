<?php

require_once ('includes/config.php');

/*
**	Définition des differentes actions possibles
**	sur une page
*/
if (!empty($_GET['action'])) {
	$action = $_GET['action'];
}
else{
	// L'action par default est a null
	$action = 'home';
}

dbConnect($dbConfig);

if (file_exists('controllers/'.$legalActions[$action].'Controller.php')) {
	include 'controllers/'.$legalActions[$action].'Controller.php';
}else{
	die('404');
}

?>
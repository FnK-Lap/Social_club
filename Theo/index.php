<?php
session_start();
//session_destroy();

require_once ('includes/config.php');
require_once ('libs/smarty/Smarty.class.php');

// On instancie Smarty
$Smarty = new Smarty();

if (empty($_SESSION['id_user'])) { // Verif si utilisateur est connectée
	$is_connected = false;
}
else{
	$is_connected = true;
}

/*
**	Définition des differentes actions possibles
**	sur une page
*/
if (!empty($_GET['action']) && array_key_exists($_GET['action'], $legalActions)) {
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

$Smarty->display('views/header.tpl');
$Smarty->display('views/templates/'.$template.'.tpl');
$Smarty->display('views/footer.tpl');

?>
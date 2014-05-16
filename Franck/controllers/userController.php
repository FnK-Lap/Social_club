<?php

require_once ('models/userModel.php');

if ($action == 'home') {
	$user = getUserInfos('1');

	$Smarty->assign('user', $user);
	
	$template = 'home';
}
elseif ($action == 'register' && isset($_GET['token'])) {
	$token = $_GET['token'];

	$result = checkToken($token);


	if ($result != true) {
		// La personne n'est pas authorise a s'inscrire
		echo "Inscription non Authorisee";
		$errors = checkUserForm('register');
	}else{
		// La personne est authorise a s'inscrire
		echo "Inscription Authorisee";
	}
}


?>
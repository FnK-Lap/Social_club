<?php

require_once ('models/userModel.php');

if ($action == 'home') {
	if ($is_connected == true) {
		$user = getUserInfos($_SESSION['id_user']);

		$Smarty->assign('user', $user);
		
		$template = 'home';
	}else{
		sendInvitation('franck.lapeyre@supinternet.fr', $invitationMessage, $salt);
		echo "cc";
		$template = 'login';
	}
	
}
elseif ($action == 'register' && isset($_GET['token'])) {
	$token = $_GET['token'];

	$result = checkToken($token, $tokenValidity);


	if ($result != true) {
		// La personne n'est pas authorise a s'inscrire
		echo "Inscription non Authorisee";
		
	}else{
		// La personne est authorise a s'inscrire
		echo "Inscription Authorisee";
		/*
		**	Le formulaire a ete envoye
		*/
		if (!empty($_POST)) {

			$errors = checkUserForm('register');
			if (empty($errors)) {
				register($_POST['prenom'], $_POST['nom'], $_POST['email'], $_POST['pass'], $_POST['date']);
				$template = 'login';
			}else{
				$template = 'signin';
				$Smarty->assign('errors', $errors);
			}
		}else{
			$template = 'signin';
		}
	}
}
elseif ($action == 'login') {
	if ($is_connected == true) {
		$user = getUserInfos($_SESSION['id_user']);

		$Smarty->assign('user', $user);

		$template = 'home';
	}else{
		if (!empty($_POST)) 
		{
			$errors = checkUserForm('login');

			if (!empty($errors)) 
			{
				$template = "login";
			}
			else
			{
				$user = getUserInfos($_SESSION['id_user']);

				$Smarty->assign('user', $user);

				$template = 'home';
			}
		}
		else  
		{
			$template = "login";
		}
	}
		
}elseif ($action == 'profil') {
	if ($is_connected == true) {
		$user = getUserInfos($_SESSION['id_user']);

		$Smarty->assign('user', $user);

		$template = 'profil';
	}else{
		die('Faire la 404');
	}
}
elseif ($action == 'logout') {
	if ($is_connected == true) {
		$template = 'login';
		logout();
	}
	else{
		$template = 'login';
	}
}


?>
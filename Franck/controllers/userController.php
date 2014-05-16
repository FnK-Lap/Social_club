<?php

require_once ('models/userModel.php');

if ($action == 'home') {
	if ($is_connected == true) {
		$user = getUserInfos('1');

		$Smarty->assign('user', $user);
		
		$template = 'home';
	}else{
		$template = 'login';
	}
	
}
elseif ($action == 'register' && isset($_GET['token'])) {
	$token = $_GET['token'];

	$result = checkToken($token);


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
		$template = 'home';
	}else{
		if (!empty($_POST)) 
		{
			$erros = checkUserForm('login');

			if (!empty($errors)) 
			{
				$template = "login";
			}
			else
			{
					$template = "home";
			}
		}
		else  
		{
			$template = "login";
		}
	}
		
}


?>
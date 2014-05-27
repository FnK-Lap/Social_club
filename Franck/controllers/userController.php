<?php

// Models
require_once ('models/userModel.php');
require_once ('models/statutModel.php');

// ORM
require_once ('models/table.class.php');
require_once ('models/token.class.php');
require_once ('models/user.class.php');
require_once ('models/statut.class.php');
require_once ('models/photo.class.php');

if ($action == 'home') {
	if ($is_connected == true) {

		$user = getUserInfos($_SESSION['id_user']);
		
		$friends = getUserFriends($_SESSION['id_user']);

		$friendsStatuts = getFriendsStatuts($_SESSION['id_user']);

		$allUsers = getAllUsers();
	

		$Smarty->assign('user', $user);
		$Smarty->assign('friends',$friends);
		$Smarty->assign('friendsStatuts', $friendsStatuts);
		$Smarty->assign('allUsers', $allUsers);

		$template = 'home';
	}else{
		// Debug, envoie de mail d'invitation
		//sendInvitation('franck.lapeyre@supinternet.fr', $invitationMessage, $salt);
		$template = 'login';
	}
	
}
elseif ($action == 'register' && isset($_GET['token'])) {
	if ($is_connected != true) {
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
					echo "REMOVE TOKEN";
					register($_POST['prenom'], $_POST['nom'], $_POST['email'], $_POST['pass'], $_POST['date']);
					removeToken($token);
					$template = 'login';
				}else{
					$template = 'signin';
					$Smarty->assign('errors', $errors);
				}
			}else{
				$template = 'signin';
			}
		}
	}else{
		$user = getUserInfos($_SESSION['id_user']);
		
		$friends = getUserFriends($_SESSION['id_user']);

		$friendsStatuts = getFriendsStatuts($_SESSION['id_user']);

		$allUsers = getAllUsers();
	

		$Smarty->assign('user', $user);
		$Smarty->assign('friends',$friends);
		$Smarty->assign('friendsStatuts', $friendsStatuts);
		$Smarty->assign('allUsers', $allUsers);
		
		$template = 'home';
	}
	
}
elseif ($action == 'login') {
	if ($is_connected == true) {
		$user = getUserInfos($_SESSION['id_user']);

		$friends = getUserFriends($_SESSION['id_user']);

		$friendsStatuts = getFriendsStatuts($_SESSION['id_user']);

		$allUsers = getAllUsers();

		$Smarty->assign('user', $user);
		$Smarty->assign('friends',$friends);
		$Smarty->assign('friendsStatuts', $friendsStatuts);
		$Smarty->assign('allUsers', $allUsers);

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

				$friends = getUserFriends($_SESSION['id_user']);

				$friendsStatuts = getFriendsStatuts($_SESSION['id_user']);

				$allUsers = getAllUsers();

				$Smarty->assign('user', $user);
				$Smarty->assign('friends',$friends);
				$Smarty->assign('friendsStatuts', $friendsStatuts);
				$Smarty->assign('allUsers', $allUsers);

				$template = 'home';
			}
		}
		else  
		{
			$template = "login";
		}
	}
		
}
elseif ($action == 'profil') {
	if ($is_connected == true) {
		$user = getUserInfos($_SESSION['id_user']);

		$friends = getUserFriends($_SESSION['id_user']);

		$Smarty->assign('user', $user);

		$Smarty->assign('friends',$friends);

		$template = 'profil';
	}else{
		$template = '404';
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
elseif ($action == 'reset_pass') {
	if ($is_connected != true) {
		$template = 'reset';
	}else{
		$template = '404';
	}
}
else{
	$template = '404';
}


?>
<?php



if (isset($action) && $action == 'home') {
	// Models
	require_once ('models/userModel.php');
	require_once ('models/statutModel.php');
	require_once ('models/photoModel.php');
	// ORM
	require_once ('models/table.class.php');
	require_once ('models/token.class.php');
	require_once ('models/user.class.php');
	require_once ('models/statut.class.php');
	require_once ('models/photo.class.php');
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
	// Models
	require_once ('models/userModel.php');
	require_once ('models/statutModel.php');
	require_once ('models/photoModel.php');
	// ORM
	require_once ('models/table.class.php');
	require_once ('models/token.class.php');
	require_once ('models/user.class.php');
	require_once ('models/statut.class.php');
	require_once ('models/photo.class.php');
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
	// Models
	require_once ('models/userModel.php');
	require_once ('models/statutModel.php');
	require_once ('models/photoModel.php');
	// ORM
	require_once ('models/table.class.php');
	require_once ('models/token.class.php');
	require_once ('models/user.class.php');
	require_once ('models/statut.class.php');
	require_once ('models/photo.class.php');
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
elseif (!empty($_POST['action']) && $_POST['action'] == 'new_description') {
		session_start();

		require_once ('../tools/dbTools.php');
		require_once ('../includes/config.php');
		dbConnect($dbConfig);

		// Models
		require_once ('../models/userModel.php');
		require_once ('../models/statutModel.php');

		// ORM
		require_once ('../models/table.class.php');
		require_once ('../models/token.class.php');
		require_once ('../models/user.class.php');
		require_once ('../models/statut.class.php');
		require_once ('../models/photo.class.php');


	$errors = checkDescriptionForm('new');

	if (empty($errors)) {
		newDescription($_SESSION['id_user'], $_POST['description']);
		echo $_POST['description'];
	}else{
		echo false;
	}
}
elseif ($action == 'profil') {
	// Models
	require_once ('models/userModel.php');
	require_once ('models/statutModel.php');
	require_once ('models/photoModel.php');
	// ORM
	require_once ('models/table.class.php');
	require_once ('models/token.class.php');
	require_once ('models/user.class.php');
	require_once ('models/statut.class.php');
	require_once ('models/photo.class.php');
	if ($is_connected == true) {
		$user = getUserInfos($_SESSION['id_user']);

		$friends = getUserFriends($_SESSION['id_user']);

		$myPictures = getUserPictures($_SESSION['id_user']);

		$errors = "";

		$Smarty->assign('user', $user);

		$Smarty->assign('friends',$friends);

		$Smarty->assign('myPictures', $myPictures);

		$Smarty->assign('errors', $errors);

		$template = 'profil';
	}else{
		$template = '404';
	}
}
elseif ($action == 'logout') {
	// Models
	require_once ('models/userModel.php');
	require_once ('models/statutModel.php');
	require_once ('models/photoModel.php');
	// ORM
	require_once ('models/table.class.php');
	require_once ('models/token.class.php');
	require_once ('models/user.class.php');
	require_once ('models/statut.class.php');
	require_once ('models/photo.class.php');
	if ($is_connected == true) {
		$template = 'login';
		logout();
	}
	else{
		$template = 'login';
	}
}else{
	$template = '404';
}


?>
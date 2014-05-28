<?php



if (isset($action) && $action == 'home') {
	// Models
	require_once ('models/userModel.php');
	require_once ('models/statutModel.php');

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

		$friends_requests = getFriendsRequest($_SESSION['id_user']);
	

		$Smarty->assign('user', $user);
		$Smarty->assign('friends',$friends);
		$Smarty->assign('friendsStatuts', $friendsStatuts);
		$Smarty->assign('allUsers', $allUsers);
		$Smarty->assign('friends_requests', $friends_requests);
	
		$template = 'home';
	}else{
		// Debug, envoie de mail d'invitation
		//sendInvitation('franck.lapeyre@supinternet.fr', $invitationMessage, $salt);
		$template = 'login';
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
elseif ($action == 'register' && isset($_GET['token'])) {
	// Models
	require_once ('models/userModel.php');
	require_once ('models/statutModel.php');

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

		$friends_requests = getFriendsRequest($_SESSION['id_user']);
	

		$Smarty->assign('user', $user);
		$Smarty->assign('friends',$friends);
		$Smarty->assign('friendsStatuts', $friendsStatuts);
		$Smarty->assign('allUsers', $allUsers);
		$Smarty->assign('friends_requests', $friends_requests);

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

				$friends_requests = getFriendsRequest($_SESSION['id_user']);
			

				$Smarty->assign('user', $user);
				$Smarty->assign('friends',$friends);
				$Smarty->assign('friendsStatuts', $friendsStatuts);
				$Smarty->assign('allUsers', $allUsers);
				$Smarty->assign('friends_requests', $friends_requests);

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
	// Models
	require_once ('models/userModel.php');
	require_once ('models/statutModel.php');

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

		$friends_requests = getFriendsRequest($_SESSION['id_user']);
	

		$Smarty->assign('user', $user);
		$Smarty->assign('friends',$friends);
		$Smarty->assign('friendsStatuts', $friendsStatuts);
		$Smarty->assign('allUsers', $allUsers);
		$Smarty->assign('friends_requests', $friends_requests);
		
		$template = 'profil';
	}else{
		$template = '404';
	}
}
elseif ($action == 'logout') {
	// Models
	require_once ('models/userModel.php');
	require_once ('models/statutModel.php');

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
}
elseif ($action == 'users') {
	// Models
	require_once ('models/userModel.php');
	require_once ('models/statutModel.php');

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

				$friends_request = getFriendsRequest($_SESSION['id_user']);

				$Smarty->assign('user', $user);
				$Smarty->assign('friends',$friends);
				$Smarty->assign('friendsStatuts', $friendsStatuts);
				$Smarty->assign('allUsers', $allUsers);
				$Smarty->assign('friends_request', $friends_request);

		$template = 'users';
	}else{
		$template = '404';
	}
}
elseif ($action == 'request_friend') 
{
	// Models
	require_once ('models/userModel.php');
	require_once ('models/statutModel.php');

	// ORM
	require_once ('models/table.class.php');
	require_once ('models/token.class.php');
	require_once ('models/user.class.php');
	require_once ('models/statut.class.php');
	require_once ('models/photo.class.php');
		$id_friend = $_GET['id'];
		$id = $_SESSION['id_user'];
		$result = request_friend($id,$id_friend);
		$user = getUserInfos($_SESSION['id_user']);

		$friends = getUserFriends($_SESSION['id_user']);

		$friendsStatuts = getFriendsStatuts($_SESSION['id_user']);

		$allUsers = getAllUsers();

		$friends_request = getFriendsRequest($_SESSION['id_user']);

		$Smarty->assign('user', $user);
		$Smarty->assign('friends',$friends);
		$Smarty->assign('friendsStatuts', $friendsStatuts);
		$Smarty->assign('allUsers', $allUsers);
		$Smarty->assign('friends_request', $friends_request);

		$template = 'user';

}

elseif ($action == 'add_friend') 
{
	// Models
	require_once ('models/userModel.php');
	require_once ('models/statutModel.php');

	// ORM
	require_once ('models/table.class.php');
	require_once ('models/token.class.php');
	require_once ('models/user.class.php');
	require_once ('models/statut.class.php');
	require_once ('models/photo.class.php');
	$id_friend = $_GET['id_friend'];
	$id = $_SESSION['id_user'];
	$result = addFriend($id,$id_friend);



				$user = getUserInfos($_SESSION['id_user']);

				$friends = getUserFriends($_SESSION['id_user']);

				$friendsStatuts = getFriendsStatuts($_SESSION['id_user']);

				$allUsers = getAllUsers();

				$friends_request = getFriendsRequest($_SESSION['id_user']);

				$Smarty->assign('user', $user);
				$Smarty->assign('friends',$friends);
				$Smarty->assign('friendsStatuts', $friendsStatuts);
				$Smarty->assign('allUsers', $allUsers);
				$Smarty->assign('friends_request', $friends_request);

				$template = 'home';
}
elseif ($action == 'refuse_friend') 
{
	// Models
	require_once ('models/userModel.php');
	require_once ('models/statutModel.php');

	// ORM
	require_once ('models/table.class.php');
	require_once ('models/token.class.php');
	require_once ('models/user.class.php');
	require_once ('models/statut.class.php');
	require_once ('models/photo.class.php');
	$id_friend = $_GET['id_friend'];
	$id = $_SESSION['id_user'];
	$result = refuseFriend($id,$id_friend);



				$user = getUserInfos($_SESSION['id_user']);
		
				$friends = getUserFriends($_SESSION['id_user']);

				$friendsStatuts = getFriendsStatuts($_SESSION['id_user']);

				$allUsers = getAllUsers();

				$friends_requests = getFriendsRequest($_SESSION['id_user']);

				$Smarty->assign('user', $user);
				$Smarty->assign('friends',$friends);
				$Smarty->assign('friendsStatuts', $friendsStatuts);
				$Smarty->assign('allUsers', $allUsers);
				$Smarty->assign('friends_requests', $friends_requests);
	
				$template = "home";
}


else{
	$template = '404';
}


?>
<?php


if (!empty($action) && $action == 'new_message' && !empty($_GET['id'])) {
	require_once ('models/userModel.php');
	require_once ('models/messageModel.php');
	require_once ('models/statutModel.php');

	require_once ('models/table.class.php');
	require_once ('models/user.class.php');
	require_once ('models/statut.class.php');
	require_once ('models/photo.class.php');
	require_once ('models/message.class.php');
		
	if ($is_connected == true) {

		$user = getUserInfos($_SESSION['id_user']);

		$friendInfos = getUserInfos($_GET['id']);

		$friends = getUserFriends($_SESSION['id_user']);

		$Smarty->assign('user', $user);

		$Smarty->assign('friendInfos', $friendInfos);

		$Smarty->assign('friends',$friends);

		$errors = checkMessageForm('send_message');

		if (empty($errors)) {
			sendMessage($_GET['id'], $_POST['message-content']);
		}
		
		$template = 'new_message';
	}else{
		$template = '404';
	}
}
elseif ($action = 'message') {
	if (!empty($_POST['action']) && $_POST['action'] == 'send_message') {
		session_start();

		require_once ('../tools/dbTools.php');
		require_once ('../includes/config.php');

		dbConnect($dbConfig);

		// Models
		require_once ('../models/messageModel.php');
		require_once ('../models/userModel.php');

		// ORM
		require_once ('../models/table.class.php');
		require_once ('../models/message.class.php');
		require_once ('../models/user.class.php');

		$errors = checkMessageForm('new');

		var_dump($errors);
		if (empty($errors)) {
			$message = $_POST['message'];
			$idReceiver = $_POST['receiver'];

			sendMessage($idReceiver, $message);

		}

	}
	elseif (!empty($_POST['action']) && $_POST['action'] == 'receive_message') {
		session_start();

		require_once ('../tools/dbTools.php');
		require_once ('../includes/config.php');

		dbConnect($dbConfig);

		// Models
		require_once ('../models/messageModel.php');
		require_once ('../models/userModel.php');

		// ORM
		require_once ('../models/table.class.php');
		require_once ('../models/message.class.php');
		require_once ('../models/user.class.php');
	
		$conversation = userConversationMessage($_SESSION['id_user'], $_POST['receiver']);
		
		$message = array();
		foreach ($conversation as $value) {
			if ($value->get_id_receiver() == $_SESSION['id_user']) {
				$message[] = array('receive', $value->get_content(), $value->get_id());
			}else{
				$message[] = array('send', $value->get_content(), $value->get_id());
			}
		}
		echo json_encode($message);
	}
	elseif (!empty($_POST['action']) && $_POST['action'] == 'delete_message') {
		session_start();

		require_once ('../tools/dbTools.php');
		require_once ('../includes/config.php');

		dbConnect($dbConfig);

		// Models
		require_once ('../models/messageModel.php');
		require_once ('../models/userModel.php');

		// ORM
		require_once ('../models/table.class.php');
		require_once ('../models/message.class.php');
		require_once ('../models/user.class.php');

		deleteMessage($_POST['id']);
	}
	else{
		require_once ('models/userModel.php');
		require_once ('models/messageModel.php');
		require_once ('models/statutModel.php');

		require_once ('models/table.class.php');
		require_once ('models/user.class.php');
		require_once ('models/statut.class.php');
		require_once ('models/photo.class.php');
		require_once ('models/message.class.php');

		$user = getUserInfos($_SESSION['id_user']);

		$friends = getUserFriends($_SESSION['id_user']);

		$friendsStatuts = getFriendsStatuts($_SESSION['id_user']);

		$userConversations = userConversations($_SESSION['id_user']);

		$allUsers = getAllUsers();

		$Smarty->assign('user', $user);
		$Smarty->assign('friends', $friends);
		$Smarty->assign('friendsStatuts', $friendsStatuts);
		$Smarty->assign('userConversations', $userConversations);
		$Smarty->assign('allUsers', $allUsers);
		

		$template = 'message';
	}
}



?>
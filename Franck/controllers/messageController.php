<?php

require_once ('models/userModel.php');
require_once ('models/messageModel.php');

require_once ('models/table.class.php');
require_once ('models/user.class.php');
require_once ('models/statut.class.php');
require_once ('models/photo.class.php');
require_once ('models/message.class.php');

if ($action = 'message') {

	$user = getUserInfos($_SESSION['id_user']);

	$friends = getUserFriends($_SESSION['id_user']);

	$userConversations = userConversations($_SESSION['id_user']);

	$allUsers = getAllUsers();

	

	$Smarty->assign('user', $user);
	$Smarty->assign('friends', $friends);
	$Smarty->assign('userConversations', $userConversations);
	$Smarty->assign('allUsers', $allUsers);

	$template = 'message';
}

?>
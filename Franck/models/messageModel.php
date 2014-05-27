<?php

function checkMessageForm($form)
{
	global $errors_no;

	$errors = array();

	if ($form = 'new') {
		$content = $_POST['message'];
		$idReceiver = $_POST['receiver'];

		if (empty($content)) {
			$errors['message'] = $errors_no['MESE'];
		}
		$result = checkIfFriend($_SESSION['id_user'], $idReceiver);

		if ($result == false) {
			$errors['message'] = $errors_no['MESN'];
		}
	}

	return $errors;
}

function sendMessage($idReceiver, $message)
{
	$Message = new Message();
	$Message->set_id_sender($_SESSION['id_user']);
	$Message->set_id_receiver($idReceiver);
	$Message->set_date(date('Y-m-d H:i:s'));
	$Message->set_content($message);
	$Message->save();
}

function getUserMessages($idUser)
{
	$query = "SELECT * FROM `messages` WHERE id_sender = ".intval($idUser)." OR id_receiver = ".intval($idUser)." ORDER BY messages.date ASC";

	$result = dbFetchAllAssoc($query);

	$userMessages = array();

	if ($result != false) {
		foreach ($result as $message) {
			$Message = new Message();
			foreach ($message as $key => $messageInfo) {
				$setter = 'set_'.$key;
				$Message->$setter($messageInfo);

			}
			$userMessages[] = $Message;
		}
		return $userMessages;

	}else{
		return false;
	}

}

function userConversations($idUser)
{
	$userMessages = getUserMessages($idUser);

	$userConversations = array();

	if ($userMessages != false) {
		foreach ($userMessages as $message) {
			if ($message->get_id_sender() != $idUser) {
				$userConversations[$message->get_id_sender()][] = $message;
			}elseif ($message->get_id_receiver() != $idUser) {
				$userConversations[$message->get_id_receiver()][] = $message;
			}
		}

		return $userConversations;

	}else{
		return false;
	}
	
}

function userConversationMessage($idSender, $idReceiver)
{
	$conversations = userConversations($idSender);

	if ($conversations != false) {
		foreach ($conversations as $key => $value) {
			if ($key == $idReceiver) {
				$messages = $value;
			}
		}
		return $messages;
	}else{
		return false;
	}

}

?>
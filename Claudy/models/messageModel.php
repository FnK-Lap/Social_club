<?php

function getUserMessages($idUser)
{
	$query = "SELECT * FROM `messages` WHERE id_sender = ".intval($idUser)." OR id_receiver = ".intval($idUser)." ORDER BY messages.date ASC";

	$result = dbFetchAllAssoc($query);

	$userMessages = array();

	foreach ($result as $message) {
		$Message = new Message();
		foreach ($message as $key => $messageInfo) {
			$setter = 'set_'.$key;
			$Message->$setter($messageInfo);

		}
		$userMessages[] = $Message;
	}

	return $userMessages;
}

function userConversations($idUser)
{
	$userMessages = getUserMessages($idUser);

	$userConversations = array();

	foreach ($userMessages as $message) {
		if ($message->get_id_sender() != $idUser) {
			$userConversations[$message->get_id_sender()][] = $message;
		}elseif ($message->get_id_receiver() != $idUser) {
			$userConversations[$message->get_id_receiver()][] = $message;
		}
	}

	return $userConversations;
}

?>
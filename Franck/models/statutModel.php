<?php

function checkStatutsForm($form)
{
	global $errors_no;

	$errors = array();

	if ($form = 'new') {
		$content = $_POST['statut'];

		if (empty($content)) {
			$errors['statut'] = $errors_no['STAE'];
		}
		if (strlen($content) > 160) {
			$errors['statut'] = $errors_no['STAL'];
		}
	}

	return $errors;
}

function getUserStatuts($id)
{
	$userStatuts = array();
	$Statuts = new Statut();
	$Statuts->set_id_user($id);
	$nbStatut = $Statuts->hydrate('id_user');
	if ($nbStatut != false) {
		$nbStatut = count($nbStatut);
	}else{
		$nbStatut = 0;
	}
	for ($i=0; $i < $nbStatut; $i++) { 
		$userStatuts[$i] = new Statut();
		$userStatuts[$i]->set_id_user($id);
		$userStatuts[$i]->hydrate('id_user', $i);
	}

	return $userStatuts;
}

function newStatut($idUser, $content)
{
	$Statuts = new Statut();
	$Statuts->set_content($content);
	$Statuts->set_date(date('Y-m-d H:i:s'));
	$Statuts->set_id_user($idUser);
	$Statuts->save();
}

function getAllStatuts()
{
	$statuts = array();
	$query = "SELECT * FROM `statuts` ORDER BY `statuts`.`date` ASC";
	$result = dbFetchAllAssoc($query);
	if ($result != false) {
		foreach ($result as $key => $statut) {
			$Statuts = new Statut();
			$Statuts->set_id($statut['id']);
			$Statuts->hydrate();
			$statuts[] = $Statuts;
		}
		return $statuts;
	}else{
		return false;
	}
			
}

function getFriendsStatuts($idUser)
{
	$friendsStatuts = array();
	$friends = getUserFriends($idUser);
	$statuts = getAllStatuts();
	if ($statuts != false) {
		foreach ($statuts as $statut) {
			if ($friends != false) {
				foreach ($friends as $friend) {
					if ($statut->get_id_user() == $friend->get_id()) {
						$friendsStatuts[] = $statut;
					}
				}
			}
		}
	}
	
	return $friendsStatuts;

}


?>
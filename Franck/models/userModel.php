<?php


// Check les formulaire Users
function checkUserForm($form)
{
	global $errors_no, $salt;

	$errors = array();

	if ($form == 'register') {

		$prenom = $_POST['prenom'];
		$nom = $_POST['nom'];
		$date = $_POST['date'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$verif_password = $_POST['verif_pass'];

		// Prenom
		if (empty($prenom)) {
			$errors['prenom'] = $errors_no['PREE'];
		}elseif (!preg_match('/[a-z]/i', $prenom)) {
			$errors['prenom'] = $errors_no['PREL'];
		}
		// Nom
		if (empty($nom)) {
			$errors['nom'] = $errors_no['NOME'];
		}elseif (!preg_match('/[a-z]/i', $nom)) {
			$errors['nom'] = $errors_no['NOML'];
		}
		// Date naissance
		if (empty($date)) {
			$errors['date'] = $errors_no['DATE'];
		}elseif (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $date)) {
			$errors['date'] = $errors_no['DATF'];
		}
		// Email
		if (empty($email)) {
			$errors['email'] = $errors_no['EMAE'];
		}elseif (!preg_match('/^[a-z0-9._-]+@[a-z0-9]+.[a-z]+$/i', $email)) {
			$errors['email'] = $errors_no['EMAF'];
		}
		// Password
		if (empty($password)) {
			$errors['password'] = $errors_no['PASE'];
		}elseif (strlen($password) < 8) {
			$errors['password'] = $errors_no['PASM'];
		}
		// Verif Password
		if (empty($verif_password)) {
			$errors['verif_password'] = $errors_no['VPAE'];
		}elseif ($verif_password != $password) {
			$errors['verif_password'] = $errors_no['VPAD'];
		}

		// Utilisateur deja inscrit
		$result = checkUserExist($email);
		if ($result != false) {
			$errors['email'] = $errors_no['EMAD'];
		}
		
	}
	elseif ($form == 'login') 
	{
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		$result = checkUserExist($email);

		if ($result[0]['password'] == sha1($pass.$salt))
		{
			$_SESSION['id_user'] = $result[0]['id'];
		}else{
			$errors['email'] = $errors_no['EMAN'];
		}
	}
	elseif ($form == 'reset_pass') {
		$User = new User();
		$User->set_id($_SESSION['id_user']);
		$User->hydrate();

		if (empty($_POST['last_password'])) {
			$errors['last_password'] = $errors_no['LASE'];
		}elseif (sha1($_POST['last_password'].$salt) != $User->get_password()) {
			$errors['last_password'] = $errors_no['LASD'];
		}

		if (empty($_POST['new_password'])) {
			$errors['new_password'] = $errors_no['NEWE'];
		}elseif (strlen($_POST['new_password']) < 8) {
			$errors['new_password'] = $errors_no['NEWL'];
		}

		if (empty($_POST['pass'])) {
			$errors['pass'] = $errors_no['RPAE'];
		}elseif ($_POST['pass'] != $_POST['new_password']) {
			$errors['pass'] = $errors_no['PASD'];
		}
	}

	return $errors;
}

function getAllUsers()
{
	$users = array();
	$query = 'SELECT * FROM `users`';
	$result = dbFetchAllAssoc($query);
	foreach ($result as $key => $user) {
		$users[$key] = new User();
		$users[$key]->set_id($user['id']);
		$users[$key]->hydrate();
	}

	return $users;
}

// Recupere toute les infos de l'utilisateur
function getUserInfos($id)
{
	$User = new User();
	$User->set_id($id);
	$User->hydrate();

	return $User;
}

function checkIfUserIdExist($id)
{
	$query = "SELECT * FROM `users` WHERE id = ".intval($id);

	$result = dbFetchAllAssoc($query);

	if ($result != false) {
		return true;
	}else{
		return false;
	}
}

// recupere touts les amis de l'utilisateur
function getUserFriends($id)
{
	$query = 'SELECT id_user1, id_user2 FROM `users_friends` WHERE `id_user1` = "'.$id.'" OR `id_user2` = "'.$id.'"';

	$result = dbFetchAllAssoc($query);

	if ($result != false) {
		foreach ($result as $key => $value){ //premier tableau resortie de la bdd		
			foreach ($value as $key => $id_Friend) { // resortir les id en string 
				if ($id_Friend != $id) {
					$Friends = new User();
					$Friends->set_id($id_Friend);
					$Friends->hydrate();
					$friends[] = $Friends; // ajout de l'objet $Friends dans le tableau $friends
				}
			}
		}
		return $friends;	
	}		
	
}

function checkIfFriend($idUser, $idUser2)
{
	$query = "SELECT * FROM `users_friends` WHERE (id_user1 = ".intval($idUser)." OR id_user2 = ".intval($idUser).") AND (id_user1 = ".intval($idUser2)." OR id_user2 = ".intval($idUser2).")";
	
	$result = dbFetchAllAssoc($query);

	if ($result != false) {
		return true;
	}else{
		return false;
	}
}

// Enregistre un utilisateur en BDD
function register($prenom, $nom, $email, $password, $date_naissance)
{
	global $salt;
	$User = new User();
	$User->set_prenom($prenom);
	$User->set_nom($nom);
	$User->set_email($email);
	$User->set_password(sha1($password.$salt));
	$User->set_date_naissance($date_naissance);
	$User->set_id_avatar(1);
	$User->set_date_inscription(date('Y-m-d H:i:s'));
	$User->save();
}

function resetPassword($newPass)
{
	$User = new User();
	$User->set_id($_SESSION['id_user']);
	$User->hydrate();
	$User->set_password($newPass);
	$User->save();
}

// Envoie une invitation avec un token unique 
function sendInvitation($destinataire, $message, $salt)
{
	// Instance de la class Token
	$Token = new Token();
	// Creation et cryptage du token unique
	$token = sha1(uniqid().$salt);
	// On envoie le mail
	$result = mail($destinataire, 'Invitation au Social Club', $message.$token, 'From: no-reply@socialclub.fr');
	// Si le mail est envoye on save le token en BDD

	if ($result == true) {
		$Token->set_token($token);
		$Token->set_date(date('Y-m-d H:i:s'));
		$Token->save();
	}
}

// Verifie la validite du token
function checkToken($token, $tokenValidity)
{
	global $link;
	$result = dbFetchAllAssoc("SELECT * FROM `tokens` WHERE token = '".mysqli_real_escape_string($link, $token)."'");

	if ($result != false) {
		$date = new DateTime($result[0]['date']);
		$datelimit = new DateTime($result[0]['date']);
		$datelimit->add(new DateInterval($tokenValidity));
		if ($datelimit->format('Y-m-d H:i:s') > date('Y-m-d H:i:s')) {
			return true;
		}else{
			removeToken($token);
		}
	}

	return false;
}

function removeToken($token)
{
	$Token = new Token();
	$Token->set_token($token);
	$Token->hydrate('token');
	$Token->delete();
}


function checkUserExist($email)
{
	global $link;

	$query = 'SELECT * FROM `users`WHERE `email`="'.mysqli_real_escape_string($link,$email).'"';

	$result = dbFetchAllAssoc($query);

	return $result;
}

function logout()
{
	unset($_SESSION['id_user']);
	session_destroy();
}






?>
<?php

require_once ('models/table.class.php');
require_once ('models/token.class.php');
require_once ('models/user.class.php');

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

		$result=checkUserExist($email);
		var_dump($result);
		if ($result[0]['password'] == sha1($pass.$salt))
		{
			$_SESSION['id_user'] = $result[0]['id'];
		}
	}

	return $errors;
}


// Recupere toute les infos de l'utilisateur
function getUserInfos($id)
{
	$User = new User();
	$User->set_id($id);
	$User->hydrate();
	
	return $User;
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


// Envoie une invitation avec un token unique 
function sendInvitation($destinataire, $message, $salt)
{
	// Instance de la class Token
	$Token = new Token();
	// Creation et cryptage du token unique
	$token = sha1(uniqid().$salt);
	// On envoie le mail
	$result = mail($destinataire, 'Invitation au Social Club', 
		'Bonjour, \n
		Dieu vous invite à rejoindre son Social Club ! \n\n
		Veuillez cliquer sur ce lien afin de vous inscrire : 
		http://localhost:8888/PHP/Social%20club/Social_club/Franck/index.php?action=register&token='.$token);

	// Si le mail est envoye on save le token en BDD
	if ($result == true) {
		$Token->set_token($token);
		$Token->set_date(date('Y-m-d H:i:s'));
		$Token->save();
	}
}

// Verifie la validite du token
function checkToken($token)
{
	global $link;
	$result = dbFetchAllAssoc("SELECT * FROM `tokens` WHERE token = '".mysqli_real_escape_string($link, $token)."'");

	if ($result != false) {
		$date = new DateTime($result[0]['date']);
		$datelimit = new DateTime($result[0]['date']);
		$datelimit->add(new DateInterval('P2D'));
		if ($datelimit->format('Y-m-d H:i:s') > date('Y-m-d H:i:s')) {
			return true;
		}
	}

	return false;
}

function checkUserExist($email)
{
	global $link;

	$query = 'SELECT * FROM `users`WHERE `email`="'.mysqli_real_escape_string($link,$email).'"';

	$result = dbFetchAllAssoc($query);

	return $result;
}




?>
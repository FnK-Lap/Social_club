<?php

require_once ('models/table.class.php');
require_once ('models/token.class.php');
require_once ('models/user.class.php');

// Check les formulaire Users
function checkUserForm($form)
{
	if ($form == 'register') {
		$pseudo = $_POST['pseudo'];
		$prenom = $_POST['prenom'];
		$nom = $_POST['nom'];
		$date = $_POST['date'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$verif_password = $_POST['verif_password'];
		// Pseudo
		if (empty($pseudo)) {
			$errors['pseudo'] = $errors_no['R01E'];
		}
		// Prenom
		if (empty($prenom)) {
			$errors['prenom'] = $errors_no['R02E'];
		}elseif (!preg_match('/[a-z]/i', $prenom)) {
			$errors['prenom'] = $errors_no['R02C'];
		}

		// Si aucune erreur
		if (empty($errors)) {
			
		}
	}
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
function register($pseudo, $prenom, $nom, $email, $password, $date_naissance)
{
	$User = new User();
	$User->set_pseudo($pseudo);
	$User->set_prenom($prenom);
	$User->set_nom($nom);
	$User->set_email($email);
	$User->set_password($password);
	$User->set_date_naissance($date_naissance);
	$User->set_prenom($prenom);
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



?>
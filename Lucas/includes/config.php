<?php

require_once ('tools/dbTools.php');

$dbConfig = array(
		'host' => 'localhost',
		'user' => 'root',
		'password' => 'root',
		'dbName' => 'social_club'
	);

$legalActions = array(
		'home'	=>	'user',
		'register' => 'user',
		'login' => 'user',
		'profil' => 'user',
		'logout' => 'user',
		'message' => 'user',
		'404' => 'user'
	);


// Creation d'un salt pour le cryptage
$salt = 'bVy437#1mWdo-;';

$errors_no = array(
		'PSEE' => 'Le pseudo est vide',
		'PREE' => 'Le prénom est vide',
		'PREL' => 'Le prénom doit contenir que des lettres',
		'NOME' => 'Le nom est vide',
		'NOML' => 'Le nom ne doit contenir que des lettres',
		'DATE' => 'La date de naissance est vide',
		'DATF' => 'La date de naissance est invalide',
		'EMAE' => 'L\'email est vide',
		'EMAF' => 'L\'email est invalide',
		'PASE' => 'Le password est vide',
		'PASM' => 'Le password doit faire minimum 8 caracteres',
		'VPAE' => 'La vérification du password est vide',
		'VPAD' => 'Les passwords sont différents',
		'EMAD' => 'Un utilisateur utilise deja cet email',
		'EMAN' => 'Votre email ou votre password est incorrect',
	);

$invitationMessage = "Bonjour,\nDieu vous invite à rejoindre son Social Club !\nVeuillez cliquer sur ce lien afin de vous inscrire : \nhttp://localhost:8888/PHP/Social%20club/Social_club/Franck/index.php?action=register&token=";

// Validite du token
// P = plus
// Y = year,	M = month,	D = day,	
$tokenValidity = 'P2D';

?>
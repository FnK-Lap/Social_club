<?php

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
		'reset_pass' => 'user',
		'users' => 'user',
		'request_friend'=>'user',
		'add_friend'=>'user',
		'refuse_friend'=>'user',
		'send_invit' => 'user',
		'message' => 'message',
		'new_message' => 'message',
		'addPicture' => 'photo',
		'deletePicture' => 'photo',
		'addProfilePicture' => 'photo'
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
		'STAE' => 'Le statut est vide',
		'STAL' => 'Le statut depasse les 160 caracteres',
		'MESE' => 'Le message est vide',
		'MESN' => 'L\'utilisateur n\'est pas amis avec vous',
		'LASE' => 'L\'ancien password est vide',
		'LASD' => 'L\'ancien password est different',
		'NEWE' => 'Le nouveau password est vide',
		'NEWL' => 'Le nouveau password doit faire minimum 8 caracteres',
		'RPAE' => 'La verification du pass est vide',
		'PASD' => 'Les password sont differents'

	);

$invitationMessage = "Bonjour,\nDieu vous invite à rejoindre son Social Club !\nVeuillez cliquer sur ce lien afin de vous inscrire : \nhttp://localhost:8888/PHP/Social%20club/Social_club/Franck/index.php?action=register&token=";

// Validite du token
// P = plus
// Y = year,	M = month,	D = day,	
$tokenValidity = 'P2D';

?>
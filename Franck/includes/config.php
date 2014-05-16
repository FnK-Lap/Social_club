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
	);


?>
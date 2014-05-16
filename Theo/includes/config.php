<?php

require_once ('tools/dbTools.php');

$dbConfig = array(
		'host' => 'localhost',
		'user' => 'root',
		'password' => '',
		'dbName' => 'social_club'
	);

$legalActions = array(
		'home'	=>	'user',
		'register' => 'user',
		'login' => 'user'
	);


// Creation d'un salt pour le cryptage
$salt = 'bVy437#1mWdo-;';

$errors_no = array(
		'R01E' => 'Le pseudo est vide',
		'R02E' => 'Le prénom est vide',
		'R02C' => 'Le prénom doit contenir que des lettres',
	);


?>
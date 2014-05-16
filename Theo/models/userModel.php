<?php

require_once ('models/table.class.php');
require_once ('models/user.class.php');


function userInfo()
{
	$user = new User();
	$user->set_id(1);
	$user->hydrate();
	return $user;
}

?>
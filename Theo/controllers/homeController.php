<?php

require_once ('models/userModel.php');

$_SESSION['id'] = 1;

$userInfo = userInfo(1);

var_dump($userInfo);

?>
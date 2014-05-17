<?php

/* * * * * * * * * * * * * * * * * * * * * * * * */
/*												 */
/*	Fichier Tools permettant de gerer une BDD 	 */
/*												 */
/* * * * * * * * * * * * * * * * * * * * * * * * */

function dbConnect($dbConfig = null){
	global $link;
	if ($dbConfig == null) {
		$link = mysqli_connect('localhost', 'root', 'root', 'social_club') or die(mysqli_connect_error());
	}else{
		$link = mysqli_connect($dbConfig['host'], $dbConfig['user'], $dbConfig['password'], $dbConfig['dbName']) or die(mysqli_connect_error());
	}
}

function dbQuery($query, $link = null)
{
	global $link;
	if ($link == null) {
		echo "YUUUP";
		$link = mysqli_connect('localhost', 'root', 'root', 'cinema') or die(mysqli_connect_error());
	}
	$result = mysqli_query($link, $query) or die("Error " . mysqli_error($link));
	return $result;
}

function dbFetchAllAssoc($query, $link = null)
{
	$result = dbQuery($query, $link);
	if (mysqli_num_rows($result) == 0) {
		return false;
	}else{
		while ($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
	}

	return $data;
}

function last_insert_id()
{
	global $link;

	return mysqli_insert_id($link);
}

?>
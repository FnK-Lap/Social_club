<?php
	function getUserPictures($id) {
		$myPictures = array();
		$query = ' 	SELECT 	*
					FROM 	`photos`
					WHERE 	id_user='.$id.' 
				';
		$myPictures = dbFetchAllAssoc($query);
		return $myPictures;
	}
?>
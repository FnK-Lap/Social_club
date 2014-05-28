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

	function newAvatar()
	{
		$User = new User();
		$User->set_id($_SESSION['id_user']);
		$User->hydrate();
		$avatar = $User->get_avatar();
		$avatar->set_photo($_POST['photoPath']);
		$avatar->hydrate('photo');
		$User->set_id_avatar($avatar->get_id());
		$User->save();
	}
?>
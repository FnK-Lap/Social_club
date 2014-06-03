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

	function deletePhoto($path)
	{
		$Photo = new Photo();
		$Photo->set_photo($path);
		$Photo->hydrate('photo');
		$User = new User();
		$User->set_id($_SESSION['id_user']);
		$User->hydrate();
		if ($User->get_id_avatar() == $Photo->get_id()) {
			$User->set_id_avatar(1);
			$User->save();
		}
		$Photo->delete();

	}

	function getAllPhotos()
	{
		$query = "SELECT * FROM `photos` WHERE id_user != ".$_SESSION['id_user']." ORDER BY 'photos.date'";
		
		$result = dbFetchAllAssoc($query);

		return $result;
	}
?>
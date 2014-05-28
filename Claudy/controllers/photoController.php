<?php
// Models
require_once ('models/userModel.php');
require_once ('models/statutModel.php');
require_once ('models/photoModel.php');
// ORM
require_once ('models/table.class.php');
require_once ('models/token.class.php');
require_once ('models/user.class.php');
require_once ('models/statut.class.php');
require_once ('models/photo.class.php');

	if ($action = 'addPicture') {
		global $link; //need $link for mysqli_real_escape_string($link, $to_escape)
		$legalExts = array("gif", "jpeg", "jpg", "png");
		$tmp = explode(".", $_FILES['files']['name']);
		$ext = end($tmp);

		if ((($_FILES["files"]["type"] 	== 	"image/gif")
		|| ($_FILES["files"]["type"] 	== 	"image/jpeg")
		|| ($_FILES["files"]["type"] 	== 	"image/jpg")
		|| ($_FILES["files"]["type"] 	== 	"image/pjpeg")
		|| ($_FILES["files"]["type"] 	== 	"image/x-png")
		|| ($_FILES["files"]["type"] 	== 	"image/png"))
		&& ($_FILES["files"]["size"] 	< 	1048576) // === 1Mb
		&& in_array($ext, $legalExts)) {
			if ($_FILES['files']['error'] > 0) {
				$errors = "Error on picture upload.";
			} else {
				if (file_exists("images/".$_FILES['files']['name'])) {
					$errors = $_FILES['files']['name']." already exists.";
				} else {
					if (!empty($_POST['photo_description'])) {
						$description = mysqli_real_escape_string($link, $_POST['photo_description']);
					} else {
						$description = NULL;
					}
					move_uploaded_file($_FILES['files']['tmp_name'], "images/".$_FILES['files']['name']);
					$path = "images/".$_FILES['files']['name'];
					$query = '	INSERT INTO `photos` 
									( `id`, `description`, `date_upload`, `id_user`, `photo`)
								VALUES 
									(NULL, "'.$description.'", "'.date('Y-m-d H:i:s').'", "'.$_SESSION["id_user"].'", "'.$path.' ")
					 		';
					dbQuery($query);
				}
			}
		} else {
			$errors = "Invalid file.";
		}

		$user 		= getUserInfos($_SESSION['id_user']);
		$friends 	= getUserFriends($_SESSION['id_user']);
		$myPictures = getUserPictures($_SESSION['id_user']);

		$Smarty->assign('myPictures', 	$myPictures);
		$Smarty->assign('user', 		$user);
		$Smarty->assign('friends',		$friends);
		$Smarty->assign('errors', 		$errors);

		$template = 'profil';

	} else if ($action = 'deletePicture') {
		echo '<script>alert(\'zulu\');</script>';
		if (isset($_POST['deletePicture'])) {
			echo '<script>alert(\'ZULU\');</script>';
			$path 	= $_POST['photoPath'];
			$query 	=	'DELETE FROM `photos` 
						 WHERE 	photo='.$path.' 
						 AND 	id_user='.$_SESSION['id_user'].'
						';
		}
		
		$user 		= getUserInfos($_SESSION['id_user']);
		$friends 	= getUserFriends($_SESSION['id_user']);
		$myPictures = getUserPictures($_SESSION['id_user']);
		$errors 	= "";

		$Smarty->assign('myPictures', 	$myPictures);
		$Smarty->assign('user', 		$user);
		$Smarty->assign('friends',		$friends);
		$Smarty->assign('errors', 		$errors);
		$template = 'profil';

	} else if ($action = 'addProfilePicture') {
		//code

		$Smarty->assign('myPictures', 	$myPictures);
		$Smarty->assign('user', 		$user);
		$Smarty->assign('friends',		$friends);
		$Smarty->assign('errors', 		$errors);
		$template = 'profil';

	} else {
		$template = '404';
	}
?>
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
	
	if ($action == 'addProfilePicture') {
		if (!empty($_GET['id'])) {
			if (checkIfUserIdExist($_GET['id']) == false) {
				$template = '404';
			}else{
				if (checkIfFriend($_SESSION['id_user'], $_GET['id'])) {
					$template = 'profil';
				}else{
					$template = 'profil-lite';
				}

				$profil = getUserInfos($_GET['id']);
				$profilFriends = getUserFriends($_GET['id']);
			}
			
		}else{
			$profil = getUserInfos($_SESSION['id_user']);
			$profilFriends = getUserFriends($_SESSION['id_user']);
			$template = 'profil';
		}

		$allUsers = getAllUsers();
		$friendsStatuts = getFriendsStatuts($_SESSION['id_user']);
		$user 		= getUserInfos($_SESSION['id_user']);
		$friends 	= getUserFriends($_SESSION['id_user']);
		$myPictures = getUserPictures($_SESSION['id_user']);
		$errors = '';

		if (!empty($_POST['photoPath'])) {
			newAvatar();
			if (!empty($_GET['id'])) {
			if (checkIfUserIdExist($_GET['id']) == false) {
				$template = '404';
			}else{
				if (checkIfFriend($_SESSION['id_user'], $_GET['id'])) {
					$template = 'profil';
				}else{
					$template = 'profil-lite';
				}

				$profil = getUserInfos($_GET['id']);
				$profilFriends = getUserFriends($_GET['id']);
			}
			
		}else{
			$profil = getUserInfos($_SESSION['id_user']);
			$profilFriends = getUserFriends($_SESSION['id_user']);
			$template = 'profil';
		}

		$allUsers = getAllUsers();
		$friendsStatuts = getFriendsStatuts($_SESSION['id_user']);
		$user 		= getUserInfos($_SESSION['id_user']);
		$friends 	= getUserFriends($_SESSION['id_user']);
		$myPictures = getUserPictures($_SESSION['id_user']);
		$errors = '';

		}
		$Smarty->assign('myPictures', 	$myPictures);
		$Smarty->assign('user', 		$user);
		$Smarty->assign('friends',		$friends);
		$Smarty->assign('errors', 		$errors);
		$Smarty->assign('profilFriends',$profilFriends);
		$Smarty->assign('profil', 	$profil);
		$Smarty->assign('friendsStatuts',$friendsStatuts);
		$Smarty->assign('allUsers',$allUsers);
		$template = 'profil';

	} 
	elseif ($action == 'addPicture') {

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
									(NULL, "'.$description.'", "'.date('Y-m-d H:i:s').'", "'.$_SESSION["id_user"].'", "'.$path.'")
					 		';
					dbQuery($query);
				}
			}
		} else {
			$errors = "Invalid file.";
		} 


		if (!empty($_GET['id'])) {
			if (checkIfUserIdExist($_GET['id']) == false) {
				$template = '404';
			}else{
				if (checkIfFriend($_SESSION['id_user'], $_GET['id'])) {
					$template = 'profil';
				}else{
					$template = 'profil-lite';
				}

				$profil = getUserInfos($_GET['id']);
				$profilFriends = getUserFriends($_GET['id']);
			}
			
		}else{
			$profil = getUserInfos($_SESSION['id_user']);
			$profilFriends = getUserFriends($_SESSION['id_user']);
			$template = 'profil';
		}
		
		$allUsers = getAllUsers();
		$friendsStatuts = getFriendsStatuts($_SESSION['id_user']);
		$user 		= getUserInfos($_SESSION['id_user']);
		$friends 	= getUserFriends($_SESSION['id_user']);
		$myPictures = getUserPictures($_SESSION['id_user']);
		$errors = '';
		
		
		

		$Smarty->assign('myPictures', 	$myPictures);
		$Smarty->assign('profil', 	$profil);
		$Smarty->assign('profilFriends', 	$profilFriends);
		$Smarty->assign('user', 		$user);
		$Smarty->assign('friends',		$friends);
		$Smarty->assign('errors', 		$errors);
		$Smarty->assign('friendsStatuts',$friendsStatuts);
		$Smarty->assign('allUsers',$allUsers);

		$template = 'profil';

	} else if ($action == 'deletePicture') {
		deletePhoto($_POST['photoPath']);
		unlink($_POST['photoPath']);

		if (!empty($_GET['id'])) {
			if (checkIfUserIdExist($_GET['id']) == false) {
				$template = '404';
			}else{
				if (checkIfFriend($_SESSION['id_user'], $_GET['id'])) {
					$template = 'profil';
				}else{
					$template = 'profil-lite';
				}

				$profil = getUserInfos($_GET['id']);
				$profilFriends = getUserFriends($_GET['id']);
			}
			
		}else{
			$profil = getUserInfos($_SESSION['id_user']);
			$profilFriends = getUserFriends($_SESSION['id_user']);
			$template = 'profil';
		}
		
		
		$allUsers = getAllUsers();
		$friendsStatuts = getFriendsStatuts($_SESSION['id_user']);
		$user 		= getUserInfos($_SESSION['id_user']);
		$friends 	= getUserFriends($_SESSION['id_user']);
		$myPictures = getUserPictures($_SESSION['id_user']);
		$errors 	= "";

		$Smarty->assign('myPictures', 	$myPictures);
		$Smarty->assign('profil', 	$profil);
		$Smarty->assign('user', 		$user);
		$Smarty->assign('friends',		$friends);
		$Smarty->assign('profilFriends',$profilFriends);
		$Smarty->assign('errors', 		$errors);
		$Smarty->assign('friendsStatuts',$friendsStatuts);
		$Smarty->assign('allUsers',$allUsers);

		$template = 'profil';

	} else {
		$template = '404';
	}
?>
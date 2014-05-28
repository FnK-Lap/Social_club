<header>
	<div id='title-logo'>
		<a href="index.php">Social<span class='title-color'>Club</span></a>
	</div>
	<div id='statut' class='title-status'>
		Votre statut : <input type='text' class='hidden' id='statut-input'><span id='statut-span'>"{foreach $user->get_statuts() as $statut}{$statutContent = $statut->get_content()}{if $statut@last}{$statutContent}{/if}{/foreach}"</span>
	</div>
	<div id='deconnexion'>
		<a href='index.php?action=logout'>
			<div class='deconnexion-bloc'>
				<img src="images/logout.png" class='deconnexion_bloc-pict' alt='logout'>
				<p class='deconnexion_bloc-text'>Déconnexion</p>
			</div>
		</a>
	</div>
	<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"><div class='plus-info'></div></a>
	<div id="light" class="white_content">
		<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'" class="textright">Close</a>
	</div>
	<div id="fade" class="black_overlay" ></div>
	<nav>
		<div class='nav-menu'>
			<ul>
			    <a href="index.php"><li><p class='nav-title'>Ma page d'accueil</p></li></a>
			    <a href="index.php?action=profil"><li><p class='nav-title-selected'>Mon profil</p></li></a>
			    <a href="index.php?action=message"><li><p class='nav-title'>Mes messages</p></li></a>
			</ul>
		</div>
	</nav>
</header>
<aside>
	<div id='photo_bloc'>
		<div class='photo_profil'><img src="{$avatar = $user->get_avatar()}{$avatar->get_photo()}" alt='Avatar utilisateur'></div>
		<p class='photo-nom'>{$user->get_prenom()} {$user->get_nom()|capitalize}</p>
	</div>
	<div class='aside-line'></div>
	<div id='friend_bloc'>
		<p class='title-aside'>Mes amis</p><a href="index.php?action=users"><div class='photo-plusfriends'></div></a>
		{foreach $friends as $friend}
			<div class='friend-user'>
				<div class='friend-connected-user'></div>
				<p class='friend-user-info'>{$friend->get_prenom()|capitalize} {$friend->get_nom()|capitalize}</p>
			</div>
		{foreachelse}
			<p>Vous n'avez pas d'amis</p>
		{/foreach}
	</div>
	<div class='aside-line'></div>
	<div id='last_message_bloc'>
		<p class='title-aside'>Mes derniers messages</p>
		<div class='last_message'>
			<div class='last_message-user'>
				<p class='last_message-user-info'>Franck Laypere<span class='last_message-date'> il y a 10 minutes</span></p>
				<div class='last_message-content'>" Ce soir, je fini l'ORM du projet et apres on ce rejoind sur Skype ?"</div>
			</div>
			<div class='last_message-user'>
				<p class='last_message-user-info'>Franck Laypere<span class='last_message-date'> il y a 10 minutes</span></p>
				<div class='last_message-content'>" Ce soir, je fini l'ORM du projet et apres on ce rejoind sur Skype ?"</div>
			</div>
			<div class='last_message-user'>
				<p class='last_message-user-info'>Franck Laypere<span class='last_message-date'> il y a 10 minutes</span></p>
				<div class='last_message-content'>" Ce soir, je fini l'ORM du projet et apres on ce rejoind sur Skype ?"</div>
			</div>
			<div class='last_message-user'>
				<p class='last_message-user-info'>Franck Laypere<span class='last_message-date'> il y a 10 minutes</span></p>
				<div class='last_message-content'>" Ce soir, je fini l'ORM du projet et apres on ce rejoind sur Skype ?"</div>
			</div>
			<div class='last_message-user'>
				<p class='last_message-user-info'>Franck Laypere<span class='last_message-date'> il y a 10 minutes</span></p>
				<div class='last_message-content'>" Ce soir, je fini l'ORM du projet et apres on ce rejoind sur Skype ?"</div>
			</div>
			<div class='last_message-user'>
				<p class='last_message-user-info'>Franck Laypere<span class='last_message-date'> il y a 10 minutes</span></p>
				<div class='last_message-content'>" Ce soir, je fini l'ORM du projet et apres on ce rejoind sur Skype ?"</div>
			</div>
		</div>
	</div>
</aside>
<section>
	<div id='my-profil'>
		<h1 class='title-myprofil'>Mon Profil </h1>
		<div class='my_profil-photo'><img src="{$avatar = $user->get_avatar()}{$avatar->get_photo()}"></div>
		<div class='my_profil-info'>
			<h2 class='my_profil_info-name'>{$user->get_prenom()|capitalize} {$user->get_nom()|capitalize}</h2>
			<span class='my_profil_info-date'>{$user->get_date_naissance()}</span>
			<div id="description">
			<h3 class='title-my_profil_info_description'>Ma description</h3>
			<span class='my_profil_info-description'><textarea class="hidden" id="description_textarea"  style="width: 600px; height: 116px;"></textarea><div id="description_div">{foreach $user->get_description() as $description}{$descriptionContent = $description}{if $description@last}{$descriptionContent}{/if}{/foreach}</div></span>
			</div>
			<span class='my_profil_info-description'>{$user->get_description()}</span>
		</div>
	</div>
	<div class='body-line'></div>
	<div id='my-galery'>
		<h1 class='title-myprofil'>Ma Galerie photo</h1>
		<form class='from-myprofil' method="post" enctype="multipart/form-data" action="index.php?action=addPicture">
			<p>
				<input class='btn_upload' type="file" name="files" size="30" />
				<input class="" type="text" name="photo_description" size="49" placeholder="Description de la photo" /><br />
				<input class='btn_upload' type="submit" name="upload" value="Ajouter une photo" />
				<input type="hidden" name="MAX_FILE_SIZE" value="10000" />
				<span class="photo_errors">
					{$errors}
				</span>
			</p>
		</form>
		{foreach from=$myPictures item=picture}
			<div class='my_galery-photo'>

				<img src="{$picture['photo']}" alt="" />

				<p class="photo_description">{$picture['description']}</p>
				<!-- supprimer -->
				<form method="post" action="index.php?action=deletePicture">
					<input type="hidden" name="photoPath" value="{$picture['photo']}" />
					<input type="submit" name="deletePicture" value="Supprimer" />
				</form>
				<!-- photo de profil -->
				<form method="post" action="index.php?action=addProfilePicture">
					<input type="hidden" name="photoPath" value="{$picture['photo']}" />
					<input type="submit" name="addProfilePicture" value="Ajouter en photo de profil" />
				</form>

			</div>
		{/foreach}
	</div>
	<div class='body-line'></div>
	<div id='my-status'>
		<h1 class='title-myprofil'>Mes Derniers status</h1>
	</div>
	<div class='body-line'></div>
	<div id='my-friendslist'>
		<h1 class='title-myprofil'>Mes Amis</h1>
		{foreach $friends as $friend}
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center>{$friend->get_prenom()|capitalize} {$friend->get_nom()|capitalize}</center></span>
		</div>
		{/foreach}
	</div>
</section>
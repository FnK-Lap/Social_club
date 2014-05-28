<header>
	<div id='title-logo'>
		Social<span class='title-color'>Club</span>
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
			    <a href="index.php?action=profil"><li><p class='nav-title'>Mon profil</p></li></a>
			    <a href="index.php?action=message"><li><p class='nav-title-selected'>Mes messages</p></li></a>
			</ul>
		</div>
	</nav>
</header>
<aside>
	<div id='photo_bloc'>
		<div class='photo_profil'><img src="{$avatar = $user->get_avatar()}{$avatar->get_photo()}" alt='Avatar utilisateur'></div>
		<p class='photo-nom'>{$user->get_prenom()|capitalize} {$user->get_nom()|capitalize}</p>
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
	<div id='list-message'>
		{foreach $userConversations as $key => $userConversation}
			<div class='list_message-user' id='{$key}'>
				<div class='list_message_user-photo'></div>
				<p class='list_message_user-name'>{foreach $allUsers as $allUser}{if $key == $allUser->get_id()}{$allUser->get_prenom()|capitalize} {$allUser->get_nom()|capitalize}{/if}{/foreach}</p>
				<span class='list_message_user_info-new'>{$userConversation|@count} messages</span>
			</div>
		{foreachelse}
			<div class='list_message-user'>
				<p>Aucunes conversations</p>
			</div>
		{/foreach}
	</div>
	<div id='list-message-bloc'>
		<div class='list-message-bloc-recu'>
			<div class='list-message_bloc-info'>
				<div class='list-message_bloc-info-miniavatar'></div>
				<h2 class='list-message_bloc-info-name'>Franck le pd</h2>
				<p class='list-message_bloc-info-date'>dans ton cu</p>
				<div class='list-message_bloc-info-delete'></div>
			</div>
			<div class='list-message_bloc-content'>
				<span class='list-message_bloc_content-text'>
					cdsgfdfnhjhfcdasfghjkhjyhtgrfsdfhjf
					fhdgjgkjhgfsafdghjg
				</span>
			</div>
			<div class='clear'></div>
		</div>
		<div class='list-message-bloc-envoyer'>
			<div class='list-message_bloc-info'>
				<div class='list-message_bloc-info-miniavatar2'></div>
				<h2 class='list-message_bloc-info-name2'>Franck le pd</h2>
				<p class='list-message_bloc-info-date2'>dans ton cu</p>
				<div class='list-message_bloc-info-delete2'></div>
			</div>
			<div class='list-message_bloc-content2'>
				<span class='list-message_bloc_content-text'>
					cdsgfdfnhjhfcdasfghjkhjyhtgrfsdfhjf
					fhdgjgkjhgfsafdghjg
				</span>
			</div>
			<div class='clear'></div>
		</div>
		<div class='list-message-bloc-recu'>
			<div class='list-message_bloc-info'>
				<div class='list-message_bloc-info-miniavatar'></div>
				<h2 class='list-message_bloc-info-name'>Franck le pd</h2>
				<p class='list-message_bloc-info-date'>dans ton cu</p>
				<div class='list-message_bloc-info-delete'></div>
			</div>
			<div class='list-message_bloc-content'>
				<span class='list-message_bloc_content-text'>
					cdsgfdfnhjhfcdasfghjkhjyhtgrfsdfhjf
					fhdgjgkjhgfsafdghjg
				</span>
			</div>
			<div class='clear'></div>
		</div>
	</div>
	<div id='message-bloc-reponse'>
		<textarea id='message-content' class='text-area-styled' rows='3'></textarea>
		<div id='send-message'>
			<div class='send-message-bloc'>
				<p id='send-message-button' class='send-message-bloc-text'>Envoyer</p>
			</div>
		</div>
	</div>
</section>
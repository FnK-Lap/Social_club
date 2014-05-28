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
	<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"><div class='plus-info'></div>
	</a>
	<div id="light" class="white_content">
		<div>
			<a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'" class="btn-close">
			</a>
		</div>
		<div id='ask-friend'>
			<div class='ask_friend-user'>
				{if $friends_requests != null}
				{foreach $friends_requests as $friend_request}
				<div class='ask_friend_user-bloc'>
					<div class='ask_friend_user-bloc-info'>
						<div class='ask_friend_user-photo'><img src="{$avatar = $friend_request->get_avatar()}{$avatar->get_photo()}" alt='Avatar utilisateur'></div>
						<p class='ask_friend_user-name'>{$friend_request->get_prenom()} {$friend_request->get_nom()}</p>
						<a href='index.php?action=add_friend&id_friend={$friend_request->get_id()}'>
							<div class='ask_friend_user-buttom'>
								<span class='ask_friend_user-buttom-text'>Ajouter</span>
							</div>
						</a>
						<a href='index.php?action=refuse_friend&id_friend={$friend_request->get_id()}'>
							<div class='ask_friend_user-buttom2'>
								<span class='ask_friend_user-buttom-text'>Décliner</span>
							</div>
						</a>
					</div>
				</div>
				{/foreach}
				{else}
				<p class='ask_friend_user-name'>Vous n'avez pas demande d'amis </p>
				{/if}
			</div>
		</div>
	</div>
	<div id="fade" class="black_overlay" ></div>
	<nav>
		<div class='nav-menu'>
			<ul>
			    <a href="index.php"><li><p class='nav-title'>Ma page d'accueil</p></li></a>
			    <a href="index.php?action=profil"><li><p class='nav-title'>Mon profil</p></li></a>
			    <a href="index.php?action=message"><li><p class='nav-title'>Mes messages</p></li>
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
	<form action="index.php" method="post">
		<input class="body_bouton" type="email" name='email_invite' placeholder="Email d'invitation" > 
		<input type='submit' class='invite_bloc-buttom'>
		</input>
	</form>
</section>
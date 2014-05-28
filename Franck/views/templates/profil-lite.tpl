
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
		<div class='my_profil-photo'><img src="{$avatar = $profil->get_avatar()}{$avatar->get_photo()}"></div>
		<div class='my_profil-info'>
			<h2 class='my_profil_info-name'>{$profil->get_prenom()|capitalize} {$profil->get_nom()|capitalize}</h2>
			<span class='my_profil_info-date'>{$profil->get_date_naissance()}</span>
			<h3 class='title-my_profil_info_description'>Ma description</h3>
			<span class='my_profil_info-description'>{$profil->get_description()}</span>
		</div>
	</div>
	<div class='body-line'></div>
	<div id='my-status'>
		<h1 class='title-myprofil'>Mes Derniers status</h1>
		{foreach $profil->get_statuts() as $statuts}
			<div class='last_status-user'>
				<div class='last_status_user-info'>
					<div class='last_status_user_info-miniavatar'></div>
					<h2 class='last_status_user_info-name'>{$profil->get_prenom()|capitalize} {$profil->get_nom()|capitalize}</h2>
					<p class='last_status_user_info-date'>{$statut->get_date()|date_format}</p>
					<div class='clear'></div>
				</div>
				<div class='last_status_user-content'>
					{$statuts->get_content()}
				</div>
			</div>
		{foreachelse}
		<p>Il n'y a aucuns statuts</p>
		{/foreach}
	</div>
</section>
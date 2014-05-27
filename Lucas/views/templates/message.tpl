<header>
	<div id='title-logo'>
		Social<span class='title-color'>Club</span>
	</div>
	<div class='title-status'>
		Votre statut : "Le projet SocialClub, c'est genial j'ai plus de vie pendants 2 semaines !" 
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
			    <a href="index.php?action=message"><li><p class='nav-title-selected'>Mes messages</p></li>
			</ul>
		</div>
	</nav>
</header>
<aside>
	<div id='photo_bloc'>
		<div class='photo_profil'></div>
		<p class='photo-nom'>{$user->get_prenom()} {$user->get_nom()}</p>
	</div>
	<div class='aside-line'></div>
	<div id='friend_bloc'>
		<p class='title-aside'>Mes amis</p><a href="index.php?action=users"><div class='photo-plusfriends'></div></a>
		{foreach $friends as $friend}
		<div class='friend-user'>
			<div class='friend-connected-user'></div>
			<p class='friend-user-info'>{$friend->get_prenom()|capitalize} {$friend->get_nom()|capitalize}</p>
		</div>
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
		<div class='list_message-user'>
			<div class='list_message_user-photo'></div>
			<p class='list_message_user-name'>Theo Tison</p>
			<span class='list_message_user_info-new'>1 nouveau message</span>
		</div>
		<div class='list_message-user'>
			<div class='list_message_user-photo'></div>
			<p class='list_message_user-name'>Franck Lapeyre</p>
			<span class='list_message_user_info-nonew'>0 nouveau message</span>
		</div>
		<div class='list_message-user'>
			<div class='list_message_user-photo'></div>
			<p class='list_message_user-name'>Cris James</p>
			<span class='list_message_user_info-new'>3 nouveau message</span>
		</div>
	</div>
	<div id='list-message-bloc'>

	</div>
	<div id='message-bloc-reponse'>
		<textarea class='text-area-styled' rows='3'>
		</textarea>
		<div id='send-message'>
			<a href='index.php?action=logout'>
				<div class='send-message-bloc'>
					<p class='send-message-bloc-text'>Envoyer</p>
				</div>
			</a>
		</div>
	</div>
</section>
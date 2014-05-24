<header>
	<div id='title-logo'>
		Social<span class='title-color'>Club</span>
	</div>
	<div class='title-status'>
		Votre statut : "{foreach $user->get_statuts() as $statut}{$statutContent = $statut->get_content()}{if $statut@last}{$statutContent}{/if}{/foreach}" 
	</div>
	<div id='deconnexion'>
		<a href='index.php?action=logout'>
			<div class='deconnexion-bloc'>
				<img src="images/logout.png" class='deconnexion_bloc-pict' alt='logout'>
				<p class='deconnexion_bloc-text'>Déconnexion</p>
			</div>
		</a>
	</div>
	<nav>
		<div class='nav-menu'>
			<ul>
			    <li><p class='nav-title-selected'><a href="index.php">Ma page d'accueil</a></p></li>
			    <li><p class='nav-title'><a href="index.php?action=profil">Mon profil</a></p></li>
			    <li><p class='nav-title'>Mes messages</p></li>
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
		<p class='title-aside'>Mes amis</p>
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
	<div id='carrousel-photo'>
		<h1 class='title-body'>Derniere photos de vos amis</h1>
		<div id='carou'></div>
	</div>
	<div class='body-line'></div>
	<div id='last_status'>
		<h1 class='title-body'>Dernier statut de vos amis</h1>
		<div class='last_status-user'>
			<div class='last_status_user-info'>
				<div class='last_status_user_info-miniavatar'></div>
				<h2 class='last_status_user_info-name'>Franck Laypere</h2>
				<p class='last_status_user_info-date'>Il y a 1 heure</p>
			</div>
			<div class='last_status_user-content'>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere congue egestas. Etiam placerat, dui in egestas sagittis, tortor risus sollicitudin libero, dignissim hendrerit lacus ante quis nunc. Vivamus eget velit nibh. Donec id risus quam. Cras imperdiet consectetur libero, eget vestibulum enim vulputate sed. Fusce consequat mauris elit, a faucibus magna sollicitudin quis. Suspendisse hendrerit, tellus vitae sagittis placerat, nunc elit porta magna, ut ultricies orci neque at lorem. Sed nec imperdiet dolor. Proin a sem eu arcu commodo malesuada ac eu lectus. 
			</div>
		</div>
		<div class='last_status-user'>
			<div class='last_status_user-info'>
				<div class='last_status_user_info-miniavatar'></div>
				<h2 class='last_status_user_info-name'>Franck Laypere</h2>
				<p class='last_status_user_info-date'>Il y a 1 heure</p>
			</div>
			<div class='last_status_user-content'>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere congue egestas. Etiam placerat, dui in egestas sagittis, tortor risus sollicitudin libero, dignissim hendrerit lacus ante quis nunc. Vivamus eget velit nibh. Donec id risus quam. Cras imperdiet consectetur libero, eget vestibulum enim vulputate sed. Fusce consequat mauris elit, a faucibus magna sollicitudin quis. Suspendisse hendrerit, tellus vitae sagittis placerat, nunc elit porta magna, ut ultricies orci neque at lorem. Sed nec imperdiet dolor. Proin a sem eu arcu commodo malesuada ac eu lectus. 
			</div>
		</div>
		<div class='last_status-user'>
			<div class='last_status_user-info'>
				<div class='last_status_user_info-miniavatar'></div>
				<h2 class='last_status_user_info-name'>Franck Laypere</h2>
				<p class='last_status_user_info-date'>Il y a 1 heure</p>
			</div>
			<div class='last_status_user-content'>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere congue egestas. Etiam placerat, dui in egestas sagittis, tortor risus sollicitudin libero, dignissim hendrerit lacus ante quis nunc. Vivamus eget velit nibh. Donec id risus quam. Cras imperdiet consectetur libero, eget vestibulum enim vulputate sed. Fusce consequat mauris elit, a faucibus magna sollicitudin quis. Suspendisse hendrerit, tellus vitae sagittis placerat, nunc elit porta magna, ut ultricies orci neque at lorem. Sed nec imperdiet dolor. Proin a sem eu arcu commodo malesuada ac eu lectus. 
			</div>
		</div>
		<div class='last_status-user'>
			<div class='last_status_user-info'>
				<div class='last_status_user_info-miniavatar'></div>
				<h2 class='last_status_user_info-name'>Franck Laypere</h2>
				<p class='last_status_user_info-date'>Il y a 1 heure</p>
			</div>
			<div class='last_status_user-content'>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere congue egestas. Etiam placerat, dui in egestas sagittis, tortor risus sollicitudin libero, dignissim hendrerit lacus ante quis nunc. Vivamus eget velit nibh. Donec id risus quam. Cras imperdiet consectetur libero, eget vestibulum enim vulputate sed. Fusce consequat mauris elit, a faucibus magna sollicitudin quis. Suspendisse hendrerit, tellus vitae sagittis placerat, nunc elit porta magna, ut ultricies orci neque at lorem. Sed nec imperdiet dolor. Proin a sem eu arcu commodo malesuada ac eu lectus. 
			</div>
		</div>
	</div>
</section>
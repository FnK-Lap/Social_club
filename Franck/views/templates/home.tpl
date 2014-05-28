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
			    <a href="index.php"><li><p class='nav-title-selected'>Ma page d'accueil</p></li></a>
			    <a href="index.php?action=profil"><li><p class='nav-title'>Mon profil</p></li></a>
			    <a href="index.php?action=message"><li><p class='nav-title'>Mes messages</p></li></a>
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
		<p class='title-aside'>Derniers statuts</p>
		<div class='last_message'>
			{section name=friendsStatut loop=$friendsStatuts step=-1}
				<div class='last_message-user'>
					<a href="index.php?action=profil&amp;id={$friendsStatuts[friendsStatut]->get_id_user()}"><p class='last_message-user-info'>{foreach $allUsers as $allUser}{if $friendsStatuts[friendsStatut]->get_id_user() == $allUser->get_id()}{$allUser->get_prenom()|capitalize} {$allUser->get_nom()|capitalize}{/if}{/foreach}<span class='last_message-date'> {$friendsStatuts[friendsStatut]->get_date()|date_format}</span></p></a>
					<div class='last_message-content'>"{$friendsStatuts[friendsStatut]->get_content()}"</div>
				</div>
			{/section}
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
		{section name=friendsStatut loop=$friendsStatuts step=-1}		
			<div class='last_status-user'>
				<div class='last_status_user-info'>
					<div class='last_status_user_info-miniavatar'><img src="{foreach $allUsers as $allUser}{if $friendsStatuts[friendsStatut]->get_id_user() == $allUser->get_id()}{$avatar = $allUser->get_avatar()}{$avatar->get_photo()}{/if}{/foreach}"></div>
					<a href="index.php?action=profil&amp;id={$friendsStatuts[friendsStatut]->get_id_user()}"><h2 class='last_status_user_info-name'>{foreach $allUsers as $allUser}{if $friendsStatuts[friendsStatut]->get_id_user() == $allUser->get_id()}{$allUser->get_prenom()|capitalize} {$allUser->get_nom()|capitalize}{/if}{/foreach}</h2></a>
					<p class='last_status_user_info-date'>{$friendsStatuts[friendsStatut]->get_date()|date_format}</p>
				</div>
				<div class='last_status_user-content'>
					{$friendsStatuts[friendsStatut]->get_content()}
				</div>
			</div>
		
		{/section}
	</div>
</section>
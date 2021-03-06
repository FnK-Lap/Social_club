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
	<a href="index.php?action=send_invit">
		<div class='send-invite-icon'></div>
	</a>
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
				<a href="index.php?action=new_message&amp;id={$friend->get_id()}">
					<div class='send-new-message'></div>
				</a>
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
					<p class='last_message-user-info'>{foreach $allUsers as $allUser}{if $friendsStatuts[friendsStatut]->get_id_user() == $allUser->get_id()}{$allUser->get_prenom()|capitalize} {$allUser->get_nom()|capitalize}{/if}{/foreach}<span class='last_message-date'> {$friendsStatuts[friendsStatut]->get_date()|date_format}</span></p>
					<div class='last_message-content'>"{$friendsStatuts[friendsStatut]->get_content()}"</div>
				</div>
			{/section}
		</div>
	</div>
</aside>
<section>
	<div id='list-message'>
		{if $userConversations != null}
		{foreach $userConversations as $key => $userConversation}
			<div class='list_message-user' id='{$key}'>
				<div class='list_message_user-photo'><img src="{$user = $userConversation[0]->get_id_sender()}{foreach $allUsers as $allUser}{if $user == $allUser->get_id()}{$avatar = $allUser->get_avatar()}{$avatar->get_photo()}{/if}{/foreach}" alt='Avatar utilisateur'></div>
				<p class='list_message_user-name'>{foreach $allUsers as $allUser}{if $key == $allUser->get_id()}{$allUser->get_prenom()|capitalize} {$allUser->get_nom()|capitalize}{/if}{/foreach}</p>
				<span class='list_message_user_info-new'>{$userConversation|@count} messages</span>
			</div>
		{foreachelse}
			<div class='list_message-user'>
				<p>Aucunes conversations</p>
			</div>
		{/foreach}
		{/if}
	</div>
	<div id='list-message-bloc'>
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
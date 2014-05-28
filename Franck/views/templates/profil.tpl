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
	<div id='my-profil'>
		<h1 class='title-myprofil'>Mon Profil </h1>
		<div class='my_profil-photo'><img src="{$avatar = $profil->get_avatar()}{$avatar->get_photo()}"></div>
		<div class='my_profil-info'>
			<h2 class='my_profil_info-name'>{$profil->get_prenom()|capitalize} {$profil->get_nom()|capitalize}</h2>
			<div class='my_profil_info-plus'>
				<a href = "javascript:void(0)" onclick = "document.getElementById('light2').style.display='block';document.getElementById('fade2').style.display='block'"><div class='plus-info' style="margin-top: 0px; margin-right: 0px;"></div></a>
				<div id="light2" class="white_content">
					<div>
						<a href = "javascript:void(0)" onclick = "document.getElementById('light2').style.display='none';document.getElementById('fade2').style.display='none'" class="btn-close" ></a>
					</div>
					<form class='form_login' action="index.php?action=reset_pass" method="post">
			            <table>
			                <tr>
			                    <td>
			                        <div class='bloc_bodycontent'>
			                            <div class='bloc_bodycentercontent'>
			                                <div class='bloc_bodygroup'>
			                                    <input class="body_bouton" type="password" name='last_password' placeholder="Ancien password">
			                                </div>
			                            </div>
			                        </div>
			                    </td>
			                <tr/>
			                <tr>
			                    <td>
			                        <div class='bloc_bodycontent'>
			                            <div class='bloc_bodycentercontent'>
			                                <div class='bloc_bodygroup'>
			                                    <input class="body_bouton" type="password" name='new_password' placeholder="Nouveau password">
			                                </div>
			                            </div>
			                        </div>
			                    </td>
			                <tr/>
			                <tr>
			                    <td>
			                        <div class='bloc_bodycontent'>
			                            <div class='bloc_bodycentercontent'>
			                                <div class='bloc_bodygroup'>
			                                    <input class="body_bouton" type="password" name='pass' placeholder="Verification password" style="margin-bottom: 35px;" >
			                                </div>
			                            </div>
			                        </div>
			                    </td>
			                </tr>
			            </table>
		                <div class='bloc_bodycontent'>
		                    <div class='bloc_bodycentercontent'>
		                        <div class='bloc_bodygroup'>
		                            <input type='submit' class="btn_body_bouton"></input>
		                        </div>
		                    </div>
		                </div>
			        </form>
				</div>
				<div id="fade2" class="black_overlay" ></div>
			</div>
			<span class='my_profil_info-date'>{$profil->get_date_naissance()}</span>
			<h3 class='title-my_profil_info_description'>Ma description</h3>
			<span class='my_profil_info-description'>{$profil->get_description()}</span>
		</div>
	</div>
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
		{if $myPictures != false}
		{foreach from=$myPictures item=picture}
			<div class='my-galery_bloc'>
				<div class='my_galery-photo'>
					
						<img src="{$picture['photo']}" alt="" />
						<span class="photo_description">{$picture['description']}</span>
						<!-- supprimer -->
						<div class='my_galery_photo-delete'>
							<form method="post" action="index.php?action=deletePicture">
								<input type="hidden" name="photoPath" value="{$picture['photo']}" />
								<input type="submit" name="deletePicture" value="Supprimer" />
							</form>
						</div>
						<!-- photo de profil -->
						<div class='my_galery_photo-ajout'>
							<form method="post" action="index.php?action=addProfilePicture">
								<input type="hidden" name="photoPath" value="{$picture['photo']}" />
								<input type="submit" name="addProfilePicture" value="Ajouter en photo de profil" />
							</form>
						</div>
					
				</div>
			</div>
		{/foreach}
		{else}
		<div>Il n'y a pas de photos</div>
		{/if}
	</div>
	<div id='my-status'>
		<h1 class='title-myprofil'>Mes Derniers status</h1>
		{$statuts = $user->get_statuts()}
		{section name=statut loop=$statuts step=-1}
		
			<div class='last_status-user'>
				<div class='last_status_user-info'>
					<div class='last_status_user_info-miniavatar'><img src="{foreach $allUsers as $allUser}{if $statuts[statut]->get_id_user() == $allUser->get_id()}{$avatar = $allUser->get_avatar()}{$avatar->get_photo()}{/if}{/foreach}"></div>
					<h2 class='last_status_user_info-name'>{$user->get_prenom()|capitalize} {$user->get_nom()|capitalize}</h2>
					<p class='last_status_user_info-date'>{$statuts[statut]->get_date()|date_format}</p>
					<div class='clear'></div>
				</div>
				<div class='last_status_user-content'>
					{$statuts[statut]->get_content()}
				</div>
			</div>
		
		{/section}
	</div>
	<div class='body-line'></div>
	<div id='my-friendslist'>
		<h1 class='title-myprofil'>Mes Amis</h1>
		{foreach $profilFriends as $profilFriend}
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'> <img src="{$profilAvatar = $profilFriend->get_avatar()}{$profilAvatar->get_photo()}" alt='avatar utilisateur'></div>
			<span class='users_list_bloc-name'><center>{$profilFriend->get_prenom()|capitalize} {$profilFriend->get_nom()|capitalize}</center></span>
		</div>
		{/foreach}
	</div>
</section>
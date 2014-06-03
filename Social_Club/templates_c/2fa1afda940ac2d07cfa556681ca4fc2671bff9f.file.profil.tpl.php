<?php /* Smarty version Smarty-3.1.18, created on 2014-05-28 14:54:44
         compiled from "views/templates/profil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13221015095382577e467119-40693900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fa1afda940ac2d07cfa556681ca4fc2671bff9f' => 
    array (
      0 => 'views/templates/profil.tpl',
      1 => 1401281614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13221015095382577e467119-40693900',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5382577e590362_67011857',
  'variables' => 
  array (
    'user' => 0,
    'statut' => 0,
    'statutContent' => 0,
    'friends_requests' => 0,
    'friend_request' => 0,
    'avatar' => 0,
    'friends' => 0,
    'friend' => 0,
    'friendsStatuts' => 0,
    'allUsers' => 0,
    'allUser' => 0,
    'profil' => 0,
    'errors' => 0,
    'myPictures' => 0,
    'picture' => 0,
    'statuts' => 0,
    'profilFriends' => 0,
    'profilFriend' => 0,
    'profilAvatar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5382577e590362_67011857')) {function content_5382577e590362_67011857($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Applications/MAMP/htdocs/PHP/Social club/Social_club/Franck/libs/smarty/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/PHP/Social club/Social_club/Franck/libs/smarty/plugins/modifier.date_format.php';
?><header>
	<div id='title-logo'>
		Social<span class='title-color'>Club</span>
	</div>
	<div id='statut' class='title-status'>
		Votre statut : <input type='text' class='hidden' id='statut-input'><span id='statut-span'>"<?php  $_smarty_tpl->tpl_vars['statut'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statut']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value->get_statuts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['statut']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['statut']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['statut']->key => $_smarty_tpl->tpl_vars['statut']->value) {
$_smarty_tpl->tpl_vars['statut']->_loop = true;
 $_smarty_tpl->tpl_vars['statut']->iteration++;
 $_smarty_tpl->tpl_vars['statut']->last = $_smarty_tpl->tpl_vars['statut']->iteration === $_smarty_tpl->tpl_vars['statut']->total;
?><?php $_smarty_tpl->tpl_vars['statutContent'] = new Smarty_variable($_smarty_tpl->tpl_vars['statut']->value->get_content(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['statut']->last) {?><?php echo $_smarty_tpl->tpl_vars['statutContent']->value;?>
<?php }?><?php } ?>"</span>
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
				<?php if ($_smarty_tpl->tpl_vars['friends_requests']->value!=null) {?>
				<?php  $_smarty_tpl->tpl_vars['friend_request'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend_request']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friends_requests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend_request']->key => $_smarty_tpl->tpl_vars['friend_request']->value) {
$_smarty_tpl->tpl_vars['friend_request']->_loop = true;
?>
				<div class='ask_friend_user-bloc'>
					<div class='ask_friend_user-bloc-info'>
						<div class='ask_friend_user-photo'><img src="<?php $_smarty_tpl->tpl_vars['avatar'] = new Smarty_variable($_smarty_tpl->tpl_vars['friend_request']->value->get_avatar(), null, 0);?><?php echo $_smarty_tpl->tpl_vars['avatar']->value->get_photo();?>
" alt='Avatar utilisateur'></div>
						<p class='ask_friend_user-name'><?php echo $_smarty_tpl->tpl_vars['friend_request']->value->get_prenom();?>
 <?php echo $_smarty_tpl->tpl_vars['friend_request']->value->get_nom();?>
</p>
						<a href='index.php?action=add_friend&id_friend=<?php echo $_smarty_tpl->tpl_vars['friend_request']->value->get_id();?>
'>
							<div class='ask_friend_user-buttom'>
								<span class='ask_friend_user-buttom-text'>Ajouter</span>
							</div>
						</a>
						<a href='index.php?action=refuse_friend&id_friend=<?php echo $_smarty_tpl->tpl_vars['friend_request']->value->get_id();?>
'>
							<div class='ask_friend_user-buttom2'>
								<span class='ask_friend_user-buttom-text'>Décliner</span>
							</div>
						</a>
					</div>
				</div>
				<?php } ?>
				<?php } else { ?>
				<p class='ask_friend_user-name'>Vous n'avez pas demande d'amis </p>
				<?php }?>
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
		<div class='photo_profil'><img src="<?php $_smarty_tpl->tpl_vars['avatar'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->get_avatar(), null, 0);?><?php echo $_smarty_tpl->tpl_vars['avatar']->value->get_photo();?>
" alt='Avatar utilisateur'></div>
		<p class='photo-nom'><?php echo $_smarty_tpl->tpl_vars['user']->value->get_prenom();?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['user']->value->get_nom());?>
</p>
	</div>
	<div class='aside-line'></div>
	<div id='friend_bloc'>
		<p class='title-aside'>Mes amis</p><a href="index.php?action=users"><div class='photo-plusfriends'></div></a>
		<?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
			<div class='friend-user'>
				<div class='friend-connected-user'></div>
				<p class='friend-user-info'><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['friend']->value->get_prenom());?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['friend']->value->get_nom());?>
</p>
				<a href="index.php?action=new_message&amp;id=<?php echo $_smarty_tpl->tpl_vars['friend']->value->get_id();?>
">
					<div class='send-new-message'></div>
				</a>
			</div>
		<?php }
if (!$_smarty_tpl->tpl_vars['friend']->_loop) {
?>
			<p>Vous n'avez pas d'amis</p>
		<?php } ?>
	</div>
	<div class='aside-line'></div>
	<div id='last_message_bloc'>
		<p class='title-aside'>Derniers statuts</p>
		<div class='last_message'>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['name'] = 'friendsStatut';
$_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['friendsStatuts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['step'] = ((int) -1) == 0 ? 1 : (int) -1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['friendsStatut']['total']);
?>
				<div class='last_message-user'>
					<p class='last_message-user-info'><?php  $_smarty_tpl->tpl_vars['allUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['allUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['allUser']->key => $_smarty_tpl->tpl_vars['allUser']->value) {
$_smarty_tpl->tpl_vars['allUser']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['friendsStatuts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['friendsStatut']['index']]->get_id_user()==$_smarty_tpl->tpl_vars['allUser']->value->get_id()) {?><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['allUser']->value->get_prenom());?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['allUser']->value->get_nom());?>
<?php }?><?php } ?><span class='last_message-date'> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['friendsStatuts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['friendsStatut']['index']]->get_date());?>
</span></p>
					<div class='last_message-content'>"<?php echo $_smarty_tpl->tpl_vars['friendsStatuts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['friendsStatut']['index']]->get_content();?>
"</div>
				</div>
			<?php endfor; endif; ?>
		</div>
	</div>
</aside>
<section>
	<div id='my-profil'>
		<h1 class='title-myprofil'>Mon Profil </h1>
		<div class='my_profil-photo'><img src="<?php $_smarty_tpl->tpl_vars['avatar'] = new Smarty_variable($_smarty_tpl->tpl_vars['profil']->value->get_avatar(), null, 0);?><?php echo $_smarty_tpl->tpl_vars['avatar']->value->get_photo();?>
"></div>
		<div class='my_profil-info'>
			<h2 class='my_profil_info-name'><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['profil']->value->get_prenom());?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['profil']->value->get_nom());?>
</h2>
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
			<span class='my_profil_info-date'><?php echo $_smarty_tpl->tpl_vars['profil']->value->get_date_naissance();?>
</span>
			<div id="description">
			<h3 class='title-my_profil_info_description'>Ma description</h3>
			<span class='my_profil_info-description'><textarea class="hidden" id="description_textarea"  style="width: 600px; height: 116px;"><?php echo $_smarty_tpl->tpl_vars['profil']->value->get_description();?>
</textarea><div id="description_div"><?php echo $_smarty_tpl->tpl_vars['profil']->value->get_description();?>
</div></span>
			</div>
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
					<?php echo $_smarty_tpl->tpl_vars['errors']->value;?>

				</span>
			</p>
		</form>
		<?php if ($_smarty_tpl->tpl_vars['myPictures']->value!=false) {?>
		<?php  $_smarty_tpl->tpl_vars['picture'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['picture']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['myPictures']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value) {
$_smarty_tpl->tpl_vars['picture']->_loop = true;
?>
			<div class='my-galery_bloc'>
				<div class='my_galery-photo'>
					
						<img src="<?php echo $_smarty_tpl->tpl_vars['picture']->value['photo'];?>
" alt="" />
						<span class="photo_description"><?php echo $_smarty_tpl->tpl_vars['picture']->value['description'];?>
</span>
						<!-- supprimer -->
						<div class='my_galery_photo-delete'>
							<form method="post" action="index.php?action=deletePicture">
								<input type="hidden" name="photoPath" value="<?php echo $_smarty_tpl->tpl_vars['picture']->value['photo'];?>
" />
								<input type="submit" name="deletePicture" value="Supprimer" />
							</form>
						</div>
						<!-- photo de profil -->
						<div class='my_galery_photo-ajout'>
							<form method="post" action="index.php?action=addProfilePicture">
								<input type="hidden" name="photoPath" value="<?php echo $_smarty_tpl->tpl_vars['picture']->value['photo'];?>
" />
								<input type="submit" name="addProfilePicture" value="Ajouter en photo de profil" />
							</form>
						</div>
					
				</div>
			</div>
		<?php } ?>
		<?php } else { ?>
		<div>Il n'y a pas de photos</div>
		<?php }?>
	</div>
	<div id='my-status'>
		<h1 class='title-myprofil'>Mes Derniers status</h1>
		<?php $_smarty_tpl->tpl_vars['statuts'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->get_statuts(), null, 0);?>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['statut'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['statut']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['name'] = 'statut';
$_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['statuts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['step'] = ((int) -1) == 0 ? 1 : (int) -1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['statut']['total']);
?>
		
			<div class='last_status-user'>
				<div class='last_status_user-info'>
					<div class='last_status_user_info-miniavatar'><img src="<?php  $_smarty_tpl->tpl_vars['allUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['allUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['allUser']->key => $_smarty_tpl->tpl_vars['allUser']->value) {
$_smarty_tpl->tpl_vars['allUser']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['statuts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['statut']['index']]->get_id_user()==$_smarty_tpl->tpl_vars['allUser']->value->get_id()) {?><?php $_smarty_tpl->tpl_vars['avatar'] = new Smarty_variable($_smarty_tpl->tpl_vars['allUser']->value->get_avatar(), null, 0);?><?php echo $_smarty_tpl->tpl_vars['avatar']->value->get_photo();?>
<?php }?><?php } ?>"></div>
					<h2 class='last_status_user_info-name'><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['user']->value->get_prenom());?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['user']->value->get_nom());?>
</h2>
					<p class='last_status_user_info-date'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statuts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['statut']['index']]->get_date());?>
</p>
					<div class='clear'></div>
				</div>
				<div class='last_status_user-content'>
					<?php echo $_smarty_tpl->tpl_vars['statuts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['statut']['index']]->get_content();?>

				</div>
			</div>
		
		<?php endfor; endif; ?>
	</div>
	<div class='body-line'></div>
	<div id='my-friendslist'>
		<h1 class='title-myprofil'>Mes Amis</h1>
		<?php  $_smarty_tpl->tpl_vars['profilFriend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profilFriend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profilFriends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profilFriend']->key => $_smarty_tpl->tpl_vars['profilFriend']->value) {
$_smarty_tpl->tpl_vars['profilFriend']->_loop = true;
?>
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'> <img src="<?php $_smarty_tpl->tpl_vars['profilAvatar'] = new Smarty_variable($_smarty_tpl->tpl_vars['profilFriend']->value->get_avatar(), null, 0);?><?php echo $_smarty_tpl->tpl_vars['profilAvatar']->value->get_photo();?>
" alt='avatar utilisateur'></div>
			<span class='users_list_bloc-name'><center><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['profilFriend']->value->get_prenom());?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['profilFriend']->value->get_nom());?>
</center></span>
		</div>
		<?php } ?>
	</div>
</section><?php }} ?>

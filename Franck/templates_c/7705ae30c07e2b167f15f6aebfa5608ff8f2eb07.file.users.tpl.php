<?php /* Smarty version Smarty-3.1.18, created on 2014-05-28 13:15:59
         compiled from "views/templates/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24747046453855deca403c6-83051964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7705ae30c07e2b167f15f6aebfa5608ff8f2eb07' => 
    array (
      0 => 'views/templates/users.tpl',
      1 => 1401257801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24747046453855deca403c6-83051964',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53855decc592c3_08463042',
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
    'allUsers' => 0,
    'allUser' => 0,
    'amis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53855decc592c3_08463042')) {function content_53855decc592c3_08463042($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Applications/MAMP/htdocs/PHP/Social club/Social_club/Franck/libs/smarty/plugins/modifier.capitalize.php';
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
			    <a href="index.php?action=profil"><li><p class='nav-title'>Mon profil</p></li></a>
			    <a href="index.php?action=message"><li><p class='nav-title'>Mes messages</p></li></a>
			</ul>
		</div>
	</nav>
</header>
<aside>
	<div id='photo_bloc'>
		<div class='photo_profil'><img src="<?php $_smarty_tpl->tpl_vars['avatar'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->get_avatar(), null, 0);?><?php echo $_smarty_tpl->tpl_vars['avatar']->value->get_photo();?>
" alt='Avatar utilisateur'></div>
		<p class='photo-nom'><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['user']->value->get_prenom());?>
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
	
	<div id='users-list'>
		<?php  $_smarty_tpl->tpl_vars['allUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['allUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['allUser']->key => $_smarty_tpl->tpl_vars['allUser']->value) {
$_smarty_tpl->tpl_vars['allUser']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars['amis'] = new Smarty_variable(false, null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['allUser']->value->get_id()==$_smarty_tpl->tpl_vars['friend']->value->get_id()) {?>
					<?php $_smarty_tpl->tpl_vars['amis'] = new Smarty_variable(true, null, 0);?>
				<?php } elseif ($_smarty_tpl->tpl_vars['allUser']->value->get_id()==$_smarty_tpl->tpl_vars['user']->value->get_id()) {?>
					<?php $_smarty_tpl->tpl_vars['amis'] = new Smarty_variable(true, null, 0);?>
				<?php }?>
			<?php }
if (!$_smarty_tpl->tpl_vars['friend']->_loop) {
?>
				<?php if ($_smarty_tpl->tpl_vars['allUser']->value->get_id()==$_smarty_tpl->tpl_vars['user']->value->get_id()) {?>
					<?php $_smarty_tpl->tpl_vars['amis'] = new Smarty_variable(true, null, 0);?>
				<?php }?>
			<?php } ?>
			<?php if ($_smarty_tpl->tpl_vars['amis']->value==false) {?>
				<div class='users_list-bloc'>
					<div class='users_list_bloc-photo'><img src="<?php $_smarty_tpl->tpl_vars['avatar'] = new Smarty_variable($_smarty_tpl->tpl_vars['allUser']->value->get_avatar(), null, 0);?><?php echo $_smarty_tpl->tpl_vars['avatar']->value->get_photo();?>
"></div>
					<span class='users_list_bloc-name'><center>	
						<?php echo $_smarty_tpl->tpl_vars['allUser']->value->get_prenom();?>
 <?php echo $_smarty_tpl->tpl_vars['allUser']->value->get_nom();?>
	
					</center></span>
					<a href='index.php?action=request_friend&id=<?php echo $_smarty_tpl->tpl_vars['allUser']->value->get_id();?>
'>
						<div class='users_list_bloc-buttom'>
							<span class='users_list_bloc-buttom-text'>Ajouter</span>
						</div>
					</a>
				</div>
			<?php }?>
		<?php } ?>
		
	</div>
</section><?php }} ?>

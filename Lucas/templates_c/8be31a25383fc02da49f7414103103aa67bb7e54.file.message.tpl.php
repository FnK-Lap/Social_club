<?php /* Smarty version Smarty-3.1.18, created on 2014-05-28 04:32:06
         compiled from "views/templates/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1212785673537de1a30f5546-00297565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8be31a25383fc02da49f7414103103aa67bb7e54' => 
    array (
      0 => 'views/templates/message.tpl',
      1 => 1401244247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1212785673537de1a30f5546-00297565',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537de1a3152893_52398603',
  'variables' => 
  array (
    'user' => 0,
    'statut' => 0,
    'statutContent' => 0,
    'avatar' => 0,
    'friends' => 0,
    'friend' => 0,
    'userConversations' => 0,
    'key' => 0,
    'allUsers' => 0,
    'allUser' => 0,
    'userConversation' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537de1a3152893_52398603')) {function content_537de1a3152893_52398603($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Applications/MAMP/htdocs/Social_club/Lucas/libs/smarty/plugins/modifier.capitalize.php';
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
				<a href="">
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
	<div id='list-message'>
		<?php  $_smarty_tpl->tpl_vars['userConversation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userConversation']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userConversations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userConversation']->key => $_smarty_tpl->tpl_vars['userConversation']->value) {
$_smarty_tpl->tpl_vars['userConversation']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['userConversation']->key;
?>
			<div class='list_message-user' id='<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
'>
				<div class='list_message_user-photo'></div>
				<p class='list_message_user-name'><?php  $_smarty_tpl->tpl_vars['allUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['allUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['allUser']->key => $_smarty_tpl->tpl_vars['allUser']->value) {
$_smarty_tpl->tpl_vars['allUser']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['allUser']->value->get_id()) {?><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['allUser']->value->get_prenom());?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['allUser']->value->get_nom());?>
<?php }?><?php } ?></p>
				<span class='list_message_user_info-new'><?php echo count($_smarty_tpl->tpl_vars['userConversation']->value);?>
 messages</span>
			</div>
		<?php }
if (!$_smarty_tpl->tpl_vars['userConversation']->_loop) {
?>
			<div class='list_message-user'>
				<p>Aucunes conversations</p>
			</div>
		<?php } ?>
	</div>
	<div id='list-message-bloc'>
	<h3 class='title-message-bloc'>Mes messages</h3>
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
</section><?php }} ?>

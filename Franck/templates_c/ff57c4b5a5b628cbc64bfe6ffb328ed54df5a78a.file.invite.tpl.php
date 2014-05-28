<?php /* Smarty version Smarty-3.1.18, created on 2014-05-28 08:57:25
         compiled from "views/templates/invite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80121452153857bbbb0e9a2-47467300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff57c4b5a5b628cbc64bfe6ffb328ed54df5a78a' => 
    array (
      0 => 'views/templates/invite.tpl',
      1 => 1401260244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80121452153857bbbb0e9a2-47467300',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53857bbbce1344_61156519',
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53857bbbce1344_61156519')) {function content_53857bbbce1344_61156519($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Applications/MAMP/htdocs/PHP/Social club/Social_club/Franck/libs/smarty/plugins/modifier.capitalize.php';
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
			    <a href="index.php?action=profil"><li><p class='nav-title'>Mon profil</p></li></a>
			    <a href="index.php?action=message"><li><p class='nav-title'>Mes messages</p></li>
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
	<form action="index.php?action=send_invit" method="post">
		<input class="body_bouton" type="email" name='email_invite' placeholder="Email d'invitation" > 
		<input type='submit' class='btn-invite'>
		</input>
	</form>
</section><?php }} ?>

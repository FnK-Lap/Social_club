<?php /* Smarty version Smarty-3.1.18, created on 2014-05-24 00:46:27
         compiled from "views/templates/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1140157305537fc6c1242101-57281634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7705ae30c07e2b167f15f6aebfa5608ff8f2eb07' => 
    array (
      0 => 'views/templates/users.tpl',
      1 => 1400885185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1140157305537fc6c1242101-57281634',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537fc6c1348455_20090332',
  'variables' => 
  array (
    'user' => 0,
    'friends' => 0,
    'friend' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537fc6c1348455_20090332')) {function content_537fc6c1348455_20090332($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Applications/MAMP/htdocs/Social_club/Lucas/libs/smarty/plugins/modifier.capitalize.php';
?><header>
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
		<div class='photo_profil'></div>
		<p class='photo-nom'><?php echo $_smarty_tpl->tpl_vars['user']->value->get_prenom();?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->get_nom();?>
</p>
	</div>
	<div class='aside-line'></div>
	<div id='friend_bloc'>
		<p class='title-aside'>Mes amis</p>
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
		</div>
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
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center>Lucas Alumni</center></span>
			<a href='index.php'>
				<div class='users_list_bloc-buttom'>
					<span class='users_list_bloc-buttom-text'>Ajouter</span>
				</div>
			</a>
		</div>
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center>Lucas Alumni</center></span>
			<a href='index.php'>
				<div class='users_list_bloc-buttom'>
					<span class='users_list_bloc-buttom-text'>Ajouter</span>
				</div>
			</a>
		</div>
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center>Lucas Alumni</center></span>
			<a href='index.php'>
				<div class='users_list_bloc-buttom'>
					<span class='users_list_bloc-buttom-text'>Ajouter</span>
				</div>
			</a>
		</div>
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center>Lucas Alumni</center></span>
			<a href='index.php'>
				<div class='users_list_bloc-buttom'>
					<span class='users_list_bloc-buttom-text'>Ajouter</span>
				</div>
			</a>
		</div>
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center>Lucas Alumni</center></span>
			<a href='index.php'>
				<div class='users_list_bloc-buttom'>
					<span class='users_list_bloc-buttom-text'>Ajouter</span>
				</div>
			</a>
		</div>
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center>Lucas Alumni</center></span>
			<a href='index.php'>
				<div class='users_list_bloc-buttom'>
					<span class='users_list_bloc-buttom-text'>Ajouter</span>
				</div>
			</a>
		</div>
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center>Lucas Alumni</center></span>
			<a href='index.php'>
				<div class='users_list_bloc-buttom'>
					<span class='users_list_bloc-buttom-text'>Ajouter</span>
				</div>
			</a>
		</div>
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center>Lucas Alumni</center></span>
			<a href='index.php'>
				<div class='users_list_bloc-buttom'>
					<span class='users_list_bloc-buttom-text'>Ajouter</span>
				</div>
			</a>
		</div>
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center>Lucas Alumni</center></span>
			<a href='index.php'>
				<div class='users_list_bloc-buttom'>
					<span class='users_list_bloc-buttom-text'>Ajouter</span>
				</div>
			</a>
		</div>
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center>Lucas Alumni</center></span>
			<a href='index.php'>
				<div class='users_list_bloc-buttom'>
					<span class='users_list_bloc-buttom-text'>Ajouter</span>
				</div>
			</a>
		</div>
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center>Lucas Alumni</center></span>
			<a href='index.php'>
				<div class='users_list_bloc-buttom'>
					<span class='users_list_bloc-buttom-text'>Ajouter</span>
				</div>
			</a>
		</div>
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center>Lucas Alumni</center></span>
			<a href='index.php'>
				<div class='users_list_bloc-buttom'>
					<span class='users_list_bloc-buttom-text'>Ajouter</span>
				</div>
			</a>
		</div>
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center>Lucas Alumni</center></span>
			<a href='index.php'>
				<div class='users_list_bloc-buttom'>
					<span class='users_list_bloc-buttom-text'>Ajouter</span>
				</div>
			</a>
		</div>
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center>Lucas Alumni</center></span>
			<a href='index.php'>
				<div class='users_list_bloc-buttom'>
					<span class='users_list_bloc-buttom-text'>Ajouter</span>
				</div>
			</a>
		</div>
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center>Lucas Alumni</center></span>
			<a href='index.php'>
				<div class='users_list_bloc-buttom'>
					<span class='users_list_bloc-buttom-text'>Ajouter</span>
				</div>
			</a>
		</div>
	</div>
</section><?php }} ?>

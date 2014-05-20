<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.18, created on 2014-05-20 16:29:16
=======
<?php /* Smarty version Smarty-3.1.18, created on 2014-05-20 16:24:22
>>>>>>> FETCH_HEAD
         compiled from "views/templates/profil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17585082405376a5703fec78-27001824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fa1afda940ac2d07cfa556681ca4fc2671bff9f' => 
    array (
      0 => 'views/templates/profil.tpl',
<<<<<<< HEAD
      1 => 1400592538,
=======
      1 => 1400595730,
>>>>>>> FETCH_HEAD
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17585082405376a5703fec78-27001824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5376a57044b457_35111577',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<<<<<<< HEAD
<?php if ($_valid && !is_callable('content_5376a57044b457_35111577')) {function content_5376a57044b457_35111577($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Applications/MAMP/htdocs/Social_club/Master/libs/smarty/plugins/modifier.capitalize.php';
=======
<?php if ($_valid && !is_callable('content_5376a57044b457_35111577')) {function content_5376a57044b457_35111577($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Applications/MAMP/htdocs/PHP/Social club/Social_club/Master/libs/smarty/plugins/modifier.capitalize.php';
>>>>>>> FETCH_HEAD
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
			    <li><p class='nav-title'><a href="index.php">Ma page d'accueil</a></p></li>
			    <li><p class='nav-title-selected'><a href="index.php?action=profil">Mon profil</a></p></li>
			    <li><p class='nav-title'>Mes messages</p></li>
			</ul>
		</div>
	</nav>
</header>
<aside>
	<div id='photo_bloc'>
		<div class='photo_profil'></div>
		<p class='photo-nom'><?php echo $_smarty_tpl->tpl_vars['user']->value->get_prenom();?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['user']->value->get_nom());?>
</p>
	</div>
	<div class='aside-line'></div>
	<div id='friend_bloc'>
		<p class='title-aside'>Mes amis</p>
		<div class='friend-user'>
			<div class='friend-connected-user'></div>
			<p class='friend-user-info'>Franck Laypere</p>
		</div>
		<div class='friend-user'>
			<div class='friend-connected-user'></div>
			<p class='friend-user-info'>Theo Tison</p>
		</div>
		<div class='friend-user'>
			<div class='friend-deconnected-user'></div>
			<p class='friend-user-info'>Claudy NZIMBU</p>
		</div>
		<div class='friend-user'>
			<div class='friend-deconnected-user'></div>
			<p class='friend-user-info'>Tom LANGLAIS</p>
		</div>
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
	<div id='my-profil'>
		<h1 class='title-myprofil'>Mon Profil </h1>
		<div class='my_profil-photo'></div>
	</div>
	<div class='body-line'></div>
	<div id='my-galery'>
		<h1 class='title-myprofil'>Ma galerie photo</h1>
		<div class='my_galery-photo'></div>
	</div>
</section><?php }} ?>

<?php /* Smarty version Smarty-3.1.18, created on 2014-05-20 14:48:23
         compiled from "views\templates\profil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303105376b444befcc2-15172195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd907474ba1c5e43847ecfbd7dfdef0f9e15d339' => 
    array (
      0 => 'views\\templates\\profil.tpl',
      1 => 1400597301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303105376b444befcc2-15172195',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5376b444cabe44_73990640',
  'variables' => 
  array (
    'user' => 0,
    'friends' => 0,
    'friend' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5376b444cabe44_73990640')) {function content_5376b444cabe44_73990640($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\wamp\\www\\Social_club\\Theo\\libs\\smarty\\plugins\\modifier.capitalize.php';
?><header>
	<div id='title-logo'>
		Social<span class='title-color'>Club</span>
	</div>
	<div class='title-status'>
		Votre statut : "Le projet SocialClub, c'est genial j'ai plus de vie pendants 2 semaines !" 
	</div>

	<div id='deconnexion'>
		<div class='deconnexion-bloc'>
			<img src="images/logout.png" class='deconnexion_bloc-pict' alt='logout'>
			<p class='deconnexion_bloc-text'><a href='index.php?action=logout'>Déconnexion</a></p>
		</div>
	</div>

	<nav>
		<div class='nav-menu'>
			<ul>
			    <li><p <p class='nav-title2' style="margin-right: 30px; margin-left: 0px;"><a href="index.php">Ma page d'accueil</a></p></li>
			    <li><p class='nav-title'><a href="index.php?action=profil">Mon profil</a></p></li>
			    <li><p class='nav-title2'>Mes messages</p></li>
			</ul>
		</div>
	</nav>
</header>
<aside>
	<div id='photo_bloc'>
		<div class='photo_profil'></div>
		<p class='photo-nom'><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['user']->value->get_prenom());?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['user']->value->get_nom());?>
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

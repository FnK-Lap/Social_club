<?php /* Smarty version Smarty-3.1.18, created on 2014-05-16 19:12:36
         compiled from "views/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16458554885376464725d105-33045163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e641a5f4467e9ceaa2820a30bed046ac7f148801' => 
    array (
      0 => 'views/templates/home.tpl',
      1 => 1400260354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16458554885376464725d105-33045163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5376464729e263_38684869',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5376464729e263_38684869')) {function content_5376464729e263_38684869($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Blanqui Lucas, " />
		<meta name="description" content="social club" />
		<title>Social Club</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css" />
	</head>	
	<body>
		<header>
			<div id='title-logo'>
				Social<span class='title-color'>Club</span>
			</div>
			<div class='title-status'>
				Votre statut : "Le projet SocialClub, c'est genial j'ai plus de vie pendants 2 semaines !" 
			</div>
			<nav>
				<ul class='nav-menu'>
				    <li><p class='nav-title'>Ma page d'accueil</p></li>
				    <li><p class='nav-title2'>Mon profil</p></li>
				    <li><p class='nav-title2'>Mes messages</p></li>
				</ul>
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
				</div>
			</div>
		</aside>
		<section>
		</section>
	</body>
</html><?php }} ?>

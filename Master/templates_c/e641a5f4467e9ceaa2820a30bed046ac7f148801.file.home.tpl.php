<?php /* Smarty version Smarty-3.1.18, created on 2014-05-20 16:29:13
         compiled from "views/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16458554885376464725d105-33045163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e641a5f4467e9ceaa2820a30bed046ac7f148801' => 
    array (
      0 => 'views/templates/home.tpl',
      1 => 1400592538,
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
<?php if ($_valid && !is_callable('content_5376464729e263_38684869')) {function content_5376464729e263_38684869($_smarty_tpl) {?><header>
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
			    <li><p class='nav-title2'><a href="index.php?action=profil">Mon profil</a></p></li>
			    <li><p class='nav-title2'>Mes messages</p></li>
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
	<div id='carrousel-photo'>
		<h1 class='title-body'>Derniere photos de vos amis</h1>
		<div id='carou'></div>
	</div>
	<div class='body-line'></div>
	<div id='last_status'>
		<h1 class='title-body'>Dernier statut de vos amis</h1>
		<div class='last_status-user'>
			<div class='last_status_user-info'>
				<div class='last_status_user_info-miniavatar'></div>
				<h2 class='last_status_user_info-name'>Franck Laypere</h2>
				<p class='last_status_user_info-date'>Il y a 1 heure</p>
			</div>
			<div class='last_status_user-content'>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere congue egestas. Etiam placerat, dui in egestas sagittis, tortor risus sollicitudin libero, dignissim hendrerit lacus ante quis nunc. Vivamus eget velit nibh. Donec id risus quam. Cras imperdiet consectetur libero, eget vestibulum enim vulputate sed. Fusce consequat mauris elit, a faucibus magna sollicitudin quis. Suspendisse hendrerit, tellus vitae sagittis placerat, nunc elit porta magna, ut ultricies orci neque at lorem. Sed nec imperdiet dolor. Proin a sem eu arcu commodo malesuada ac eu lectus. 
			</div>
		</div>
		<div class='last_status-user'>
			<div class='last_status_user-info'>
				<div class='last_status_user_info-miniavatar'></div>
				<h2 class='last_status_user_info-name'>Franck Laypere</h2>
				<p class='last_status_user_info-date'>Il y a 1 heure</p>
			</div>
			<div class='last_status_user-content'>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere congue egestas. Etiam placerat, dui in egestas sagittis, tortor risus sollicitudin libero, dignissim hendrerit lacus ante quis nunc. Vivamus eget velit nibh. Donec id risus quam. Cras imperdiet consectetur libero, eget vestibulum enim vulputate sed. Fusce consequat mauris elit, a faucibus magna sollicitudin quis. Suspendisse hendrerit, tellus vitae sagittis placerat, nunc elit porta magna, ut ultricies orci neque at lorem. Sed nec imperdiet dolor. Proin a sem eu arcu commodo malesuada ac eu lectus. 
			</div>
		</div>
		<div class='last_status-user'>
			<div class='last_status_user-info'>
				<div class='last_status_user_info-miniavatar'></div>
				<h2 class='last_status_user_info-name'>Franck Laypere</h2>
				<p class='last_status_user_info-date'>Il y a 1 heure</p>
			</div>
			<div class='last_status_user-content'>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere congue egestas. Etiam placerat, dui in egestas sagittis, tortor risus sollicitudin libero, dignissim hendrerit lacus ante quis nunc. Vivamus eget velit nibh. Donec id risus quam. Cras imperdiet consectetur libero, eget vestibulum enim vulputate sed. Fusce consequat mauris elit, a faucibus magna sollicitudin quis. Suspendisse hendrerit, tellus vitae sagittis placerat, nunc elit porta magna, ut ultricies orci neque at lorem. Sed nec imperdiet dolor. Proin a sem eu arcu commodo malesuada ac eu lectus. 
			</div>
		</div>
		<div class='last_status-user'>
			<div class='last_status_user-info'>
				<div class='last_status_user_info-miniavatar'></div>
				<h2 class='last_status_user_info-name'>Franck Laypere</h2>
				<p class='last_status_user_info-date'>Il y a 1 heure</p>
			</div>
			<div class='last_status_user-content'>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere congue egestas. Etiam placerat, dui in egestas sagittis, tortor risus sollicitudin libero, dignissim hendrerit lacus ante quis nunc. Vivamus eget velit nibh. Donec id risus quam. Cras imperdiet consectetur libero, eget vestibulum enim vulputate sed. Fusce consequat mauris elit, a faucibus magna sollicitudin quis. Suspendisse hendrerit, tellus vitae sagittis placerat, nunc elit porta magna, ut ultricies orci neque at lorem. Sed nec imperdiet dolor. Proin a sem eu arcu commodo malesuada ac eu lectus. 
			</div>
		</div>
	</div>
</section><?php }} ?>

<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 15:05:35
         compiled from "views\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225785384a9bf711932-91435925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ded8cecba4e4d8021eac176655150040da2d157' => 
    array (
      0 => 'views\\templates\\home.tpl',
      1 => 1401196725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225785384a9bf711932-91435925',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'friends' => 0,
    'friend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384a9bf8c3431_24935452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384a9bf8c3431_24935452')) {function content_5384a9bf8c3431_24935452($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\wamp\\www\\Social_club\\Lucas\\libs\\smarty\\plugins\\modifier.capitalize.php';
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
			    <a href="index.php"><li><p class='nav-title-selected'>Ma page d'accueil</p></li></a>
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

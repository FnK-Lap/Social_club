<?php /* Smarty version Smarty-3.1.18, created on 2014-05-22 13:55:44
         compiled from "views/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1425733260537de39d553436-50652738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e641a5f4467e9ceaa2820a30bed046ac7f148801' => 
    array (
      0 => 'views/templates/home.tpl',
      1 => 1400759742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1425733260537de39d553436-50652738',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537de39da13941_55339520',
  'variables' => 
  array (
    'user' => 0,
    'friends' => 0,
    'friend' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537de39da13941_55339520')) {function content_537de39da13941_55339520($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Applications/MAMP/htdocs/PHP/Social club/Social_club/Franck/libs/smarty/plugins/modifier.capitalize.php';
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
			    <li><p class='nav-title-selected'><a href="index.php">Ma page d'accueil</a></p></li>
			    <li><p class='nav-title'><a href="index.php?action=profil">Mon profil</a></p></li>
			    <li><p class='nav-title'>Mes messages</p></li>
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

<?php /* Smarty version Smarty-3.1.18, created on 2014-05-28 04:32:04
         compiled from "views/templates/profil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1705675009537b699327a298-88362251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fa1afda940ac2d07cfa556681ca4fc2671bff9f' => 
    array (
      0 => 'views/templates/profil.tpl',
      1 => 1401244316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1705675009537b699327a298-88362251',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537b6993323bb5_32272218',
  'variables' => 
  array (
    'user' => 0,
    'statut' => 0,
    'statutContent' => 0,
    'avatar' => 0,
    'friends' => 0,
    'friend' => 0,
    'statuts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537b6993323bb5_32272218')) {function content_537b6993323bb5_32272218($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/Applications/MAMP/htdocs/Social_club/Lucas/libs/smarty/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/Social_club/Lucas/libs/smarty/plugins/modifier.date_format.php';
?>
<header>
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
			    <a href="index.php?action=profil"><li><p class='nav-title-selected'>Mon profil</p></li></a>
			    <a href="index.php?action=message"><li><p class='nav-title'>Mes messages</p></li></a>
			</ul>
		</div>
	</nav>
</header>
<aside>
	<div id='photo_bloc'>
		<div class='photo_profil'><img src="<?php $_smarty_tpl->tpl_vars['avatar'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->get_avatar(), null, 0);?><?php echo $_smarty_tpl->tpl_vars['avatar']->value->get_photo();?>
" alt='Avatar utilisateur'></div>
		<p class='photo-nom'><?php echo $_smarty_tpl->tpl_vars['user']->value->get_prenom();?>
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
	<div id='my-profil'>
		<h1 class='title-myprofil'>Mon Profil </h1>
		<div class='my_profil-photo'></div>
		<div class='my_profil-info'>
			<h2 class='my_profil_info-name'><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['user']->value->get_prenom());?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['user']->value->get_nom());?>
</h2>
			<div class='my_profil_info-plus'>
				<a href = "javascript:void(0)" onclick = "document.getElementById('light2').style.display='block';document.getElementById('fade2').style.display='block'"><div class='plus-info' style="margin-top: 0px; margin-right: 0px;"></div></a>
				<div id="light2" class="white_content">
					<div>
						<a href = "javascript:void(0)" onclick = "document.getElementById('light2').style.display='none';document.getElementById('fade2').style.display='none'" class="btn-close" ></a>
					</div>
					<form class='form_login' action="" method="post">
			            <table>
			                <tr>
			                    <td>
			                        <div class='bloc_bodycontent'>
			                            <div class='bloc_bodycentercontent'>
			                                <div class='bloc_bodygroup'>
			                                    <input class="body_bouton" type="password" name='last_password' placeholder="Ancien password">
			                                </div>
			                            </div>
			                        </div>
			                    </td>
			                <tr/>
			                <tr>
			                    <td>
			                        <div class='bloc_bodycontent'>
			                            <div class='bloc_bodycentercontent'>
			                                <div class='bloc_bodygroup'>
			                                    <input class="body_bouton" type="password" name='new_password' placeholder="Nouveau password">
			                                </div>
			                            </div>
			                        </div>
			                    </td>
			                <tr/>
			                <tr>
			                    <td>
			                        <div class='bloc_bodycontent'>
			                            <div class='bloc_bodycentercontent'>
			                                <div class='bloc_bodygroup'>
			                                    <input class="body_bouton" type="password" name='pass' placeholder="Verification password" style="margin-bottom: 35px;" >
			                                </div>
			                            </div>
			                        </div>
			                    </td>
			                </tr>
			            </table>
		                <div class='bloc_bodycontent'>
		                    <div class='bloc_bodycentercontent'>
		                        <div class='bloc_bodygroup'>
		                            <input type='submit' class="btn_body_bouton"></input>
		                        </div>
		                    </div>
		                </div>
			        </form>
				</div>
				<div id="fade2" class="black_overlay" ></div>
			</div>
			<span class='my_profil_info-date'><?php echo $_smarty_tpl->tpl_vars['user']->value->get_date_naissance();?>
</span>
			<h3 class='title-my_profil_info_description'>Ma description</h3>
			<span class='my_profil_info-description'><?php echo $_smarty_tpl->tpl_vars['user']->value->get_description();?>
</span>
		</div>
	</div>
	<div class='body-line'></div>
	<div id='my-galery'>
		<h1 class='title-myprofil'>Ma Galerie photo</h1>
		<form class='from-myprofil' method="post" enctype="multipart/form-data" action="">
		<p>
			<input class='btn_upload' type="file" name="files" size="30">
			<input class='btn_upload' type="submit" name="upload" value="Ajouter une photo">
			<input type="hidden" name="MAX_FILE_SIZE" value="10000" />
		</p>
	</form>
		<div class='my_galery-photo'></div>
		<div class='my_galery-photo'></div>
		<div class='my_galery-photo'></div>
		<div class='my_galery-photo'></div>
		<div class='my_galery-photo'></div>
		<div class='my_galery-photo'></div>
		<div class='my_galery-photo'></div>
		<div class='my_galery-photo'></div>
		<div class='my_galery-photo'></div>
		<div class='my_galery-photo'></div>
	</div>
	<div class='body-line'></div>
	<div id='my-status'>
		<h1 class='title-myprofil'>Mes Derniers status</h1>
		<?php  $_smarty_tpl->tpl_vars['statuts'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statuts']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value->get_statuts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statuts']->key => $_smarty_tpl->tpl_vars['statuts']->value) {
$_smarty_tpl->tpl_vars['statuts']->_loop = true;
?>
			<div class='last_status-user'>
				<div class='last_status_user-info'>
					<div class='last_status_user_info-miniavatar'></div>
					<h2 class='last_status_user_info-name'><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['user']->value->get_prenom());?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['user']->value->get_nom());?>
</h2>
					<p class='last_status_user_info-date'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['statuts']->value->get_date());?>
</p>
					<div class='clear'></div>
				</div>
				<div class='last_status_user-content'>
					<?php echo $_smarty_tpl->tpl_vars['statuts']->value->get_content();?>

				</div>
			</div>
		<?php } ?>
	</div>
	<div class='body-line'></div>
	<div id='my-friendslist'>
		<h1 class='title-myprofil'>Mes Amis</h1>
		<?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
		<div class='users_list-bloc'>
			<div class='users_list_bloc-photo'></div>
			<span class='users_list_bloc-name'><center><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['friend']->value->get_prenom());?>
 <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['friend']->value->get_nom());?>
</center></span>
		</div>
		<?php } ?>
	</div>
</section><?php }} ?>

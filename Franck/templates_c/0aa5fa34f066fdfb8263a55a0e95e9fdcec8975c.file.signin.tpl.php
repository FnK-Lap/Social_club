<?php /* Smarty version Smarty-3.1.18, created on 2014-05-17 00:15:27
         compiled from "views/templates/signin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32050067753768a200d5696-36666348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aa5fa34f066fdfb8263a55a0e95e9fdcec8975c' => 
    array (
      0 => 'views/templates/signin.tpl',
      1 => 1400278525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32050067753768a200d5696-36666348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53768a201120c2_93735356',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53768a201120c2_93735356')) {function content_53768a201120c2_93735356($_smarty_tpl) {?><header>
	<div id='title-logo-center'>
		Social<span class='title-color'>Club</span>
	</div>
</header>
	<div id='bloc_login'>
	    <div class='bloc_logincontent'>
	        <div class='bloc_headercontent'>
	            <h1 class="text-login">Inscription</h1>
	        </div>
	        <form class='form_login' action="index.php?action=login" method="post"><br>
	            <table>
	                <tr>
	                    <td>
	                        <div class='bloc_bodycontent'>
	                            <div class='bloc_bodycentercontent'>
	                                <div class='bloc_bodygroup'>
	                                    <input class="body_bouton" type="text" name='Nom' placeholder="Nom">
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
	                                    <input class="body_bouton" type="text" name='prenom' placeholder="Prenom">
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
	                                    <input class="body_bouton" type="email" name='email' placeholder="Email">
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
	                                    <input class="body_bouton" type="date" name='date' placeholder="18/11/1995">
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
	                                    <input class="body_bouton" type="password" name='pass' placeholder="Password">
	                                </div>
	                            </div>
	                        </div>
	                    </td>
	                </tr>
	                 <tr>
	                    <td>
	                        <div class='bloc_bodycontent'>
	                            <div class='bloc_bodycentercontent'>
	                                <div class='bloc_bodygroup'>
	                                    <input class="body_bouton" type="password" name='pass' placeholder="Verifaction Pass" style="margin-bottom: 35px;">
	                                </div>
	                            </div>
	                        </div>
	                    </td>
	                </tr>
	            </table>
                <div class='bloc_bodycontent'>
                    <div class='bloc_bodycentercontent'>
                        <div class='bloc_bodygroup'>
                            <button class="btn_body_bouton">Inscription</button>
                        </div>
                    </div>
                </div>
	        </form>
	    </div>
	</div><?php }} ?>

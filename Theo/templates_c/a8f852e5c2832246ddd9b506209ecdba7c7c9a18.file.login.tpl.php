<?php /* Smarty version Smarty-3.1.18, created on 2014-05-16 18:59:44
         compiled from "views\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25819537660204771e2-11637388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8f852e5c2832246ddd9b506209ecdba7c7c9a18' => 
    array (
      0 => 'views\\templates\\login.tpl',
      1 => 1400266587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25819537660204771e2-11637388',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537660204e25f1_38468650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537660204e25f1_38468650')) {function content_537660204e25f1_38468650($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Blanqui Lucas, " />
		<meta name="description" content="social club" />
		<title>Social Club</title>
		<link rel="stylesheet" type="text/css" href="styles/login.css" />
	</head>	
	<body>
		<header>
			<div id='title-logo'>
				Social<span class='title-color'>Club</span>
			</div>
			<div id='bloc_login'>
			    <div class='bloc_logincontent'>
			        <div class='bloc_headercontent'>
			            <h1 class="text-login">Login</h1>
			        </div>
			        <form class='form_login' action="index.php?action=login" method="post"><br>
			            <table>
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
			                                    <input class="body_bouton" type="password" name='pass' placeholder="Password" style="margin-bottom: 35px;">
			                                </div>
			                            </div>
			                        </div>
			                    </td>
			                </tr>
			            </table>
	                    <div class='bloc_bodycontent'>
	                        <div class='bloc_bodycentercontent'>
	                            <div class='bloc_bodygroup'>
	                                <button class="btn_body_bouton">Connexion</button>
	                            </div>
	                        </div>
	                    </div>
			        </form>
			    </div>
			</div>
		</header>
	</body>
</html><?php }} ?>

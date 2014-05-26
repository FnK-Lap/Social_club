<?php /* Smarty version Smarty-3.1.18, created on 2014-05-26 01:07:05
         compiled from "views/templates/signin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:658251907538266ba116bd8-26469030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aa5fa34f066fdfb8263a55a0e95e9fdcec8975c' => 
    array (
      0 => 'views/templates/signin.tpl',
      1 => 1401059219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '658251907538266ba116bd8-26469030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538266ba1eaf77_33401119',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538266ba1eaf77_33401119')) {function content_538266ba1eaf77_33401119($_smarty_tpl) {?><header>
	<div id='title-logo-center'>
		Social<span class='title-color'>Club</span>
	</div>
</header>
	<div id='bloc_login'>
	    <div class='bloc_logincontent'>
	        <div class='bloc_headercontent'>
	            <h1 class="text-login">Inscription</h1>
	        </div>
	        <form class='form_login' action="index.php?action=register&amp;token=<?php echo $_GET['token'];?>
" method="post"><br>
	            <table>
	                <tr>
	                    <td>
	                        <div class='bloc_bodycontent'>
	                            <div class='bloc_bodycentercontent'>
	                                <div class='bloc_bodygroup'>
	                                    <input class="body_bouton" type="text" name='nom' id='nom' placeholder="Nom" value='<?php echo (($tmp = @$_POST['nom'])===null||$tmp==='' ? '' : $tmp);?>
'>
	                                    <span class="error-message"></span>
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
	                                    <input class="body_bouton" type="text" name='prenom' id='prenom' placeholder="Prenom" value='<?php echo (($tmp = @$_POST['prenom'])===null||$tmp==='' ? '' : $tmp);?>
'>
	                                    <span class="error-message"></span>
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
	                                    <input class="body_bouton" type="email" name='email' id='email' placeholder="Email" value='<?php echo (($tmp = @$_POST['email'])===null||$tmp==='' ? '' : $tmp);?>
'>
	                                    <span class="error-message"></span>
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
	                                    <input class="body_bouton" type="date" name='date' id='date' placeholder="1995-11-18" value='<?php echo (($tmp = @$_POST['date'])===null||$tmp==='' ? '' : $tmp);?>
'>
	                                    <span class="error-message"></span>
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
	                                    <input class="body_bouton" type="password" name='pass' id='password' placeholder="Password">
	                                    <span class="error-message"></span>
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
	                                    <input class="body_bouton" type="password" name='verif_pass' id='verif_pass' placeholder="Verifaction Pass">
	                                    <span class="error-message"></span>
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
	</div><?php }} ?>

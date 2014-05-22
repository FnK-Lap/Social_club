<?php /* Smarty version Smarty-3.1.18, created on 2014-05-22 13:45:11
         compiled from "views/templates/signin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1803831620537de347242655-03401440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aa5fa34f066fdfb8263a55a0e95e9fdcec8975c' => 
    array (
      0 => 'views/templates/signin.tpl',
      1 => 1400281151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1803831620537de347242655-03401440',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537de347375773_16450710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537de347375773_16450710')) {function content_537de347375773_16450710($_smarty_tpl) {?><header>
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
	                                    <input class="body_bouton" type="text" name='nom' placeholder="Nom" value='<?php echo (($tmp = @$_POST['nom'])===null||$tmp==='' ? '' : $tmp);?>
'>
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
	                                    <input class="body_bouton" type="text" name='prenom' placeholder="Prenom" value='<?php echo (($tmp = @$_POST['prenom'])===null||$tmp==='' ? '' : $tmp);?>
'>
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
	                                    <input class="body_bouton" type="email" name='email' placeholder="Email" value='<?php echo (($tmp = @$_POST['email'])===null||$tmp==='' ? '' : $tmp);?>
'>
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
	                                    <input class="body_bouton" type="date" name='date' placeholder="1995/11/18" value='<?php echo (($tmp = @$_POST['date'])===null||$tmp==='' ? '' : $tmp);?>
'>
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
	                                    <input class="body_bouton" type="password" name='verif_pass' placeholder="Verifaction Pass" style="margin-bottom: 35px;">
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
